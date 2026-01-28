<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปข้อมูลใบสมัคร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header-section {
            background-color: #28a745; /* สีเขียวสำหรับความสำเร็จ */
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 20px -30px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // ดึงข้อมูลที่ส่งมาจากฟอร์ม
        $position = $_POST['position'] ?? 'ไม่ได้ระบุ';
        $prefix = $_POST['prefix'] ?? '';
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';
        $birthDate = $_POST['birthDate'] ?? 'ไม่ได้ระบุ';
        $educationLevel = $_POST['educationLevel'] ?? 'ไม่ได้ระบุ';
        $specialSkills = $_POST['specialSkills'] ?? 'ไม่มี';
        $workExperience = $_POST['workExperience'] ?? 'ไม่มี';
        $agreement = $_POST['agreementCheck'] ?? 'ไม่รับรอง';

        // จัดรูปแบบวันที่ (ถ้ามี)
        $displayBirthDate = ($birthDate !== 'ไม่ได้ระบุ' && $birthDate !== '') ? date('d/m/Y', strtotime($birthDate)) : 'ไม่ได้ระบุ';

        // ส่วนหัวแสดงผลลัพธ์
        echo '<div class="header-section">';
        echo '  <h1>✔️ ใบสมัครของคุณถูกส่งแล้ว</h1>';
        echo '  <p class="lead">ตรวจสอบข้อมูลสรุปด้านล่างนี้</p>';
        echo '</div>';

        // ส่วนแสดงข้อมูลที่ได้รับ
        echo '<h3 class="text-success mb-3">สรุปรายละเอียดการสมัคร</h3>';
        echo '<ul class="list-group list-group-flush">';
        
        // ข้อมูลตำแหน่งงาน
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
        echo '  <strong>ตำแหน่งที่สมัคร:</strong>';
        echo '  <span class="badge bg-primary fs-6">' . htmlspecialchars($position) . '</span>';
        echo '</li>';

        // ข้อมูลส่วนตัว
        echo '<li class="list-group-item"><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($prefix) . ' ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . '</li>';
        echo '<li class="list-group-item"><strong>วัน/เดือน/ปีเกิด:</strong> ' . $displayBirthDate . '</li>';
        
        // ข้อมูลการศึกษา
        echo '<li class="list-group-item"><strong>ระดับการศึกษาสูงสุด:</strong> ' . htmlspecialchars($educationLevel) . '</li>';
        
        // ทักษะและประสบการณ์
        echo '<li class="list-group-item">';
        echo '  <strong>ความสามารถพิเศษ:</strong><br>';
        echo '  <small class="text-muted">' . nl2br(htmlspecialchars($specialSkills)) . '</small>';
        echo '</li>';
        
        echo '<li class="list-group-item">';
        echo '  <strong>ประสบการณ์ทำงาน:</strong><br>';
        echo '  <small class="text-muted">' . nl2br(htmlspecialchars($workExperience)) . '</small>';
        echo '</li>';

        // การรับรอง
        echo '<li class="list-group-item">';
        echo '  <strong>การรับรองข้อมูล:</strong> ';
        echo '  <span class="badge bg-success">' . ($agreement === 'agreed' ? 'รับรองความจริง' : 'ไม่ได้รับรอง') . '</span>';
        echo '</li>';
        
        echo '</ul>';
        
        // ปุ่มย้อนกลับ
        echo '<div class="d-grid gap-2 mt-4">';
        echo '  <a href="e.php" class="btn btn-outline-secondary btn-lg">';
        echo '    <i class="bi bi-arrow-left"></i> ย้อนกลับไป';
        echo '  </a>';
        echo '</div>';

    } else {
        // หากไม่มีการส่งข้อมูลด้วย POST
        echo '<div class="alert alert-warning" role="alert">';
        echo '  ไม่พบข้อมูลการสมัคร กรุณาส่งข้อมูลผ่านฟอร์มเท่านั้น';
        echo '</div>';
        echo '<div class="d-grid gap-2 mt-4">';
        echo '  <a href="e.php" class="btn btn-warning">กลับไปหน้าฟอร์ม</a>';
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>