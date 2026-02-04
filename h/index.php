<?php
session_start(); // อย่าลืม start session ที่บรรทัดแรกสุด
include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - เจษฎาวุฒิ มั่นยืน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-container { max-width: 400px; margin-top: 100px; }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="card shadow-sm">
        <div class="card-body p-5">
            <h3 class="card-title text-center mb-4">เข้าสู่ระบบหลังบ้าน</h3>
            
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="auser" class="form-control" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="apwd" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="Submit" class="btn btn-primary">LOGIN</button>
                </div>
            </form>

            <?php
            if(isset($_POST['Submit'])) {
                $user = $_POST['auser'];
                $pwd  = $_POST['apwd'];

                // 1. ใช้ Prepared Statement ป้องกัน SQL Injection
                $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
                mysqli_stmt_bind_param($stmt, "s", $user);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $data = mysqli_fetch_array($result);

                // 2. ตรวจสอบรหัสผ่านที่เข้ารหัสไว้ (ใช้ password_verify)
                if ($data && password_verify($pwd, $data['a_password'])) {
                    $_SESSION['aid'] = $data['a_id'];
                    $_SESSION['aname'] = $data['a_name'];
                    
                    echo "<script>window.location='index2.php';</script>";
                } else {
                    echo "<div class='alert alert-danger mt-3 text-center'>Username หรือ Password ไม่ถูกต้อง</div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>