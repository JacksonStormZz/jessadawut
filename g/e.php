<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container { width: 45%; float: left; margin: 10px; }
    table { width: 100%; margin-top: 20px; border-collapse: collapse; }
</style>
</head>

<body>
<h1>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>

<?php
include_once("connectdb.php");
$sql = "SELECT `p_country`, SUM(`p_amount`) as total FROM `popsupermarket` GROUP BY `p_country`;";
$rs = mysqli_query($conn, $sql);

$countries = [];
$totals = [];

// เก็บข้อมูลลง Array เพื่อใช้ทั้งใน Table และ Chart
while ($data = mysqli_fetch_array($rs)) {
    $countries[] = $data['p_country'];
    $totals[] = $data['total'];
}
?>

<div style="overflow: hidden;">
    <div class="chart-container">
        <canvas id="barChart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="pieChart"></canvas>
    </div>
</div>

<table border="1">
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
    <?php foreach ($countries as $index => $country): ?>
    <tr>
        <td><?php echo $country; ?></td>
        <td align="right"><?php echo number_format($totals[$index], 0); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<script>
// 4. ส่งข้อมูลจาก PHP ไปยัง JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// กราฟแท่ง (Bar Chart)
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรายประเทศ',
            data: dataValues,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    }
});

// กราฟวงกลม (Pie Chart)
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: [
                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
            ]
        }]
    }
});
</script>

<?php mysqli_close($conn); ?>
</body>
</html>