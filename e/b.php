<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ใบสมัครงาน</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 p-4 bg-white shadow rounded">
<h2 class="text-center text-primary">ใบสมัครงาน บริษัท BaKPUK</h2>

<form method="POST" class="row g-3 needs-validation" novalidate>

<div class="col-12">
<label class="form-label">ตำแหน่งที่สมัคร</label>
<select class="form-select" name="position" required>
<option value="">-- เลือกตำแหน่ง --</option>
<option value="วิศวกรซอฟต์แวร์">วิศวกรซอฟต์แวร์</option>
<option value="นักวิเคราะห์ข้อมูล">นักวิเคราะห์ข้อมูล</option>
<option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
</select>
</div>

<div class="col-md-3">
<label class="form-label">คำนำหน้า</label>
<select class="form-select" name="title" required>
<option value="">เลือก</option>
<option value="นาย">นาย</option>
<option value="นาง">นาง</option>
<option value="นางสาว">นางสาว</option>
</select>
</div>

<div class="col-md-4">
<label class="form-label">ชื่อ</label>
<input type="text" class="form-control" name="name" required>
</div>

<div class="col-md-5">
<label class="form-label">นามสกุล</label>
<input type="text" class="form-control" name="lastname" required>
</div>

<div class="col-md-6">
<label class="form-label">วันเกิด</label>
<input type="date" class="form-control" name="birthday" required>
</div>

<div class="col-md-6">
<label class="form-label">วุฒิการศึกษา</label>
<select class="form-select" name="education" required>
<option value="">เลือก</option>
<option value="ปริญญาตรี">ปริญญาตรี</option>
<option value="ปริญญาโท">ปริญญาโท</option>
</select>
</div>

<div class="col-12">
<label class="form-label">ทักษะ</label>
<textarea class="form-control" name="skill"></textarea>
</div>

<div class="col-12">
<label class="form-label">ประสบการณ์ทำงาน</label>
<textarea class="form-control" name="talent"></textarea>
</div>

<div class="col-12">
<button type="submit" name="submit" class="btn btn-primary">ส่งใบสมัคร</button>
</div>

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

    $position  = $_POST['position'];
    $title     = $_POST['title'];
    $name      = $_POST['name'];
    $lastname  = $_POST['lastname'];
    $birthday  = $_POST['birthday'];
    $education = $_POST['education'];
    $skill     = $_POST['skill'];
    $talent    = $_POST['talent'];

    include_once("connectdb.php");

    $sql = "INSERT INTO application 
            (a_position, a_title, a_name, a_lastname, a_birthday, a_education, a_skill, a_talents)
            VALUES 
            ('$position','$title','$name','$lastname','$birthday','$education','$skill','$talent')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
