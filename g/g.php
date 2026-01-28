<?php
include_once("connectdb.php");
$sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales 
        FROM popsupermarket 
        GROUP BY MONTH(p_date) 
        ORDER BY Month;";
$rs = mysqli_query($conn, $sql);

$months = [];
$sales = [];
$data_rows = [];

while ($data = mysqli_fetch_array($rs)) {
    $months[] = "เดือน " . $data['Month'];
    $sales[] = $data['Total_Sales'];
    $data_rows[] = $data; // เก็บไว้แสดงในตาราง
}
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Dashboard - เจษฎาวุฒิ มั่นยืน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f8f9fa; font-family: 'Sarabun', sans-serif; }
        .card { border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="text-center mb-4">รายงานยอดขาย: เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</h1>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">ตารางสรุปยอดขาย</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>เดือน</th>
                                <th class="text-end">ยอดขาย</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_rows as $row) { ?>
                            <tr>
                                <td>เดือน <?php echo $row['Month']; ?></td>
                                <td align="right"><?php echo number_format($row['Total_Sales'], 2); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // เตรียมข้อมูลจาก PHP สำหรับ Chart.js
    const labels = <?php echo json_encode($months); ?>;
    const salesData = <?php echo json_encode($sales); ?>;
    const colors = [
        'rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)', 
        'rgba(255, 206, 86, 0.7)', 'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)', 'rgba(255, 159, 64, 0.7)'
    ];

    // Config สำหรับ Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรายเดือน',
                data: salesData,
                backgroundColor: colors
            }]
        },
        options: { responsive: true, plugins: { title: { display: true, text: 'Bar Chart - ยอดขาย' } } }
    });

    // Config สำหรับ Doughnut Chart
    new Chart(document.getElementById('doughnutChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: salesData,
                backgroundColor: colors
            }]
        },
        options: { responsive: true, plugins: { title: { display: true, text: 'Doughnut Chart - สัดส่วนยอดขาย' } } }
    });
</script>

</body>
</html>
<?php mysqli_close($conn); ?>