<?php include_once("connectdb.php"); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</title>
</head>
<body>
    <h1>งาน i -- เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</h1>
    
    <form method="post" action="" enctype="multipart/form-data">
        ชื่อจังหวัด: <input type="text" name="pname" autofocus required><br>
        รูป: <input type="file" name="pimage" required><br> ภาค: 
        <select name="rid">
        <?php
            $sql3 = "SELECT * FROM regions";
            $rs3 = mysqli_query($conn, $sql3);
            while ($data3 = mysqli_fetch_array($rs3)){
        ?> 
            <option value="<?php echo $data3['r_id']; ?>"><?php echo $data3['r_name']; ?></option>
        <?php } ?>
        </select>
        <br>
        <button type="submit" name="Submit">บันทึก</button> 
    </form><br><br>

    <?php
    if(isset($_POST['Submit'])){
        $pname = $_POST['pname'];
        $rid = $_POST['rid'];
        $ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION); 
        
        
        $sql2 = "INSERT INTO `provinces` (`p_name`, `p_ext`, `r_id`) VALUES ('{$pname}', '{$ext}', '{$rid}')";
        mysqli_query($conn, $sql2) or die("เพิ่มข้อมูลไม่ได้: " . mysqli_error($conn)); 
        $pid = mysqli_insert_id($conn);
        @move_uploaded_file($_FILES['pimage']['tmp_name'], "img/".$pid.".".$ext);
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
    $sql = "SELECT * FROM provinces";
    $rs = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($rs)){
    ?>   
        <tr>
            <td><?php echo $data['p_id']; ?></td>
            <td><?php echo $data['p_name']; ?></td>
            <td><img src="img/<?php echo $data['p_id']; ?>.<?php echo $data['p_ext']; ?>" width="140"></td>
            <td align="center">
                <a href="delete.php?id=<?php echo $data['p_id'];?>" onClick="return confirm('ยืนยันการลบ?');">
                    ลบ
                </a>
            </td>
        </tr>
    <?php } ?>
    </table>

</body>
</html>
<?php mysqli_close($conn); ?>