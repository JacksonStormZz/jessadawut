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
    <th>เดือน</th>
    <th>ยอดขาย</th>
</tr>
<?php
include_once("connectdb.php");
$sql= "SELECT 
MONTH(p_date) AS Month, 
SUM(p_amount) AS Total_Sales
FROM popsupermarket
GROUP BY MONTH(p_date)
ORDER BY Month;";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)) {
?>
<tr>

	<td><?php echo $data['Month'];?></td>
	
    <td align ="right"><?php echo number_format($data['Total_Sales'],0);?></td>
</tr>
<?php
}
mysqli_close($conn);
?>
</body>
</html>