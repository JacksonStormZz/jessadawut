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
        ชื่อจังหวัด <input type="text" name="pname" autofocus required><br>
        รูป <input type="file" name="pimage" required><br>

        ภาค
        <select name="rid">
        <?php
        $sql_r = "SELECT * FROM regions";
        $rs_r = mysqli_query($conn, $sql_r);
        while ($data_r = mysqli_fetch_array($rs_r)){
        ?> 
            <option value="<?php echo $data_r['r_id']; ?>"><?php echo $data_r['r_name']; ?></option>
        <?php } ?>
        </select>
        <button type="submit" name="Submit">บันทึก</button> 
    </form><br><br>

    <?php
    if(isset($_POST['Submit'])){
        $pname = $_POST['pname'];
        $rid = $_POST['rid'];
        
        $ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);

        $sql_ins = "INSERT INTO provinces (p_id, p_name, p_ext, r_id) VALUES (NULL, '{$pname}', '{$ext}', '{$rid}')";
        mysqli_query($conn, $sql_ins) or die ("เพิ่มข้อมูลไม่ได้");
        
        $pid = mysqli_insert_id($conn);
        
        move_uploaded_file($_FILES['pimage']['tmp_name'], "img/".$pid.".".$ext);
        
        echo "<script>window.location='b.php';</script>"; 
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
    $sql_list = "SELECT * FROM provinces";
    $rs_list = mysqli_query($conn, $sql_list);
    while ($data = mysqli_fetch_array($rs_list)){
    ?>   
        <tr>
            <td><?php echo $data['p_id']; ?></td>
            <td><?php echo $data['p_name']; ?></td>
            <td><img src="img/<?php echo $data['p_id']; ?>.<?php echo $data['p_ext']; ?>" width="140"></td>
            <td width="80" align="center"><a href="delete_provinces.php?id=<?php echo $data['r_id']; ?>" onClick="return confirm('d1');"><img src="images/ถัง.jpg" width="80"></a></td>
            
        </tr>
    <?php } ?>
    </table>

</body>
</html>
<?php mysqli_close($conn); ?>