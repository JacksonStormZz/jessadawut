<?php
    session_start();
if (empty($_SESSION|['aid'])) {
echo "Access Denied";
echo "<meta http-equiv='refresh' content='3; url=index.php'";
exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
</head>

<body>
<h1> จัดการสินค้า เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>

<?php echo $_SESSION['a_name'];?><br>
<ul>
<a href = "product.php"><li>จัดการสินค้า </li></a>
<a href = "order.php"><li>จัดการออเดอร์</li></a>
<a href = "customers.php"><li>จัดการลูกค้า</li></a>
<a href = "product.php"><li>ออกจากระบบ</li></a>

</body>
</html>