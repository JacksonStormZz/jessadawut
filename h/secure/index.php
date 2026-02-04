<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ - เจษฎาวุฒิ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div class="card p-4 shadow" style="width:400px;">
<h4 class="text-center mb-3">เข้าสู่ระบบหลังบ้าน</h4>

<form method="post">
    <input type="text" name="auser" class="form-control mb-2" placeholder="Username" required>
    <input type="password" name="apwd" class="form-control mb-3" placeholder="Password" required>
    <button type="submit" name="Submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
</form>
</div>

<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");

    $u = mysqli_real_escape_string($conn,$_POST['auser']);
    $p = mysqli_real_escape_string($conn,$_POST['apwd']);

    $sql = "SELECT * FROM admin 
            WHERE a_username='$u' AND a_password='$p' LIMIT 1";
    $rs = mysqli_query($conn,$sql);

    if(mysqli_num_rows($rs)==1){
        $data = mysqli_fetch_assoc($rs);
        $_SESSION['aid']   = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];

        header("Location:index2.php");
        exit;
    }else{
        echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
    }
}
?>
</body>
</html>
