<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูล - เจษฎาวุฒิ</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f4f7f6; color: #444; }
        .container { max-width: 1200px; }
        .card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); overflow: hidden; }
        /* ตกแต่งช่อง Search ของ DataTable ให้ Minimal */
        .dataTables_filter input {
            border: none !important;
            background-color: #f1f3f5 !important;
            padding: 10px 20px !important;
            border-radius: 10px !important;
            outline: none !important;
            margin-bottom: 10px;
        }
        .table thead th { background-color: #fff; border-bottom: 2px solid #f1f1f1; color: #888; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; }
        .img-product { border-radius: 12px; object-fit: cover; transition: transform 0.2s; }
        .img-product:hover { transform: scale(1.1); }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">🛒 Pop Supermarket</h2>
        <p class="text-muted">จัดการข้อมูลสินค้าโดย เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</p>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="myDataTable" class="table align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>รูป</th>
                            <th>ชื่อสินค้า</th>
                            <th>หมวดหมู่</th>
                            <th>วันที่ขาย</th>
                            <th>ประเทศ</th>
                            <th class="text-end">ยอดขาย</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connectdb.php");
                        // ดึงข้อมูลทั้งหมดมาไว้ที่หน้าจอก่อน เพื่อให้ DataTables ค้นหาได้ทันที
                        $sql = "SELECT * FROM popsupermarket";
                        $rs = mysqli_query($conn, $sql);
                        $total_all = 0;
                        
                        while ($data = mysqli_fetch_array($rs)) {
                            $total_all += $data['p_amount'];
                        ?>
                        <tr>
                            <td><span class="text-muted">#<?php echo $data['p_order_id']; ?></span></td>
                            <td>
                                <img src="img/<?php echo $data['p_product_name']; ?>.jpg" width="45" height="45" class="img-product" onerror="this.src='https://via.placeholder.com/45?text=No'">
                            </td>
                            <td class="fw-bold"><?php echo $data['p_product_name']; ?></td>
                            <td><span class="badge rounded-pill bg-light text-dark fw-normal border"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo date('d M Y', strtotime($data['p_date'])); ?></td>
                            <td><?php echo $data['p_country']; ?></td>
                            <td class="text-end fw-bold text-dark"><?php echo number_format($data['p_amount'], 2); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="mt-4 text-end px-4">
        <h4 class="text-muted fw-light">ยอดรวมทั้งหมด: <span class="text-dark fw-bold">฿<?php echo number_format($total_all, 2); ?></span></h4>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable({
            "language": {
                "lengthMenu": "แสดง _MENU_ รายการ",
                "search": "🔍 ค้นหาแบบด่วน:",
                "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
                "info": "แสดงหน้าที่ _PAGE_ จากทั้งหมด _PAGES_ หน้า",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "ถัดไป",
                    "previous": "ก่อนหน้า"
                }
            },
            "pageLength": 10,
            "order": [[0, "desc"]], // เรียงตาม ID ล่าสุด
            "dom": '<"d-flex justify-content-between align-items-center mb-3"f l>rtip' // จัดวางช่อง Search และตัวเลือกจำนวนหน้า
        });
    });
</script>

</body>
</html>