<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
</head>

<body>
<h1>งาน i -- เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>
<form method="post" action="" enctype="multipart/from-data">
	ชื่อจังหวัด <input type="text" name="pname" autofocus required><br>
    รูป <input type="file" name="pimage" required><br>

    ภาค 
    <select name="rid">
    <?php
include_once("connectdb.php");
$sql3 = "SELECT * FROM regions";
$rs = mysqli_query($conn, $sql);
 while ($data3 = mysqli_fetch_array($rs)){
?> 
        <option value="<?php echo $data3['r_id'] ; ?>"><?php echo $data3['r_name'] ;?></option>
<?php}?>
 </select>
 <br>

    <button type="submit" name="Submit">บันทึก</button>	
</form><br><br>

<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$pname = $_POST['pname'];
    $ext = pathinfo($_FILES['pimage']['name'],PATHINFO_EXTENSION); 
    $rid = $_POST['rid'];
	$sql2 = "INSERT INTO `provinces` VALUES (NULL, '{$pname}','{$ext}')";
	mysqli_query($conn, $sql2) or die ("เพิ่มข้อมูลไม่ได้");
    $pid=mysqli_insert_id($conn);
    copy($_FILES['pimage']['name'],"images/".$pid.".".$ext);
}
?>


<table border="1">
	<tr>
    	<th>รหัสจังหวัด</th>
        <th>ชื่อจังหวัด</th>
        <th>รูป</th>
        <th>ลบ</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM provinces";
$rs = mysqli_query($conn, $sql);
 while ($data = mysqli_fetch_array($rs)){
?>   
    <tr>
    	<td><?php echo $data['p_id'] ; ?></td>
        <td><?php echo $data['p_name'] ;?></td>
        <td><img src="img/<?php echo $data['p_id'] ; ?>.<?php echo $data['p_ext'] ; ?>" width="140"></td>
        <td width="80" align="center"><a href="delete_region.php?id=<?php echo $data['p_id'];?>" onClick="return confirm('ยืนยันการลบ?');"><img src="img/ถัง.jpg" width="20"></td>
    </tr>
<?php } ?>
</table>

</body>
</html>

<?php
mysqli_close($conn);
?>