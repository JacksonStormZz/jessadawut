<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
</head>

<body>
<h1>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>

<table border="1">
<tr>
	<th>Order ID</th>
    <th>ชื่อผัก</th>
    <th>ประเภท</th>
    <th>ราคา</th>
</tr>
<?php
include_once("connectdb.php");
$sql = SELECT * FROM `js_66010914005`;
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)) {
?>
<tr>
	<td><?php echo $data['v_id'];?></td>
	<td><?php echo $data['v_name'];?></td>
	<td><?php echo $data['v_type'];?></td>
	<td><?php echo $data['v_price'];?></td>

</tr>
<?php
}
mysqli_close($conn);
?>
</body>
</html>