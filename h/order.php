<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการออเดอร์ - เจษฎาวุฒิ</title>
</head>

<body>

<h1>จัดการออเดอร์ - เจษฎาวุฒิ</h1>

<?php 
if (isset($_SESSION['a_name'])) {
    echo "แอดมิน: " . $_SESSION['a_name'];
} else {
    echo "ยังไม่ได้เข้าสู่ระบบ";
}
?>
<br><br>

<ul>
	<li><a href="products.php">จัดการสินค้า</a></li>
	<li><a href="orders.php">จัดการออเดอร์</a></li>
	<li><a href="customers.php">จัดการลูกค้า</a></li>
	<li><a href="logout.php">ออกจากระบบ</a></li>
</ul>

</body>
</html>
