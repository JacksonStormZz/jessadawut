<?php session_start(); ?>
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success bg-opacity-10">

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="col-md-4">
    <div class="card shadow">
      <div class="card-header bg-success text-white text-center">
        <h4 class="mb-0">เข้าสู่ระบบผู้ดูแล</h4>
      </div>
      <div class="card-body">
        <form method="post" action="checklogin.php">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="auser" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="apwd" class="form-control" required>
          </div>
          <button type="submit" name="Submit" class="btn btn-success w-100">
            LOGIN
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
