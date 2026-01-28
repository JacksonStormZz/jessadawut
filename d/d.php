<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914005 เจษฏาวุฒิ มั่นยืน (ฟลุ๊ค) chat gpt</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Custom Minimal CSS -->
<style>
    body {
        background: #f5f6f7;
        font-family: "Prompt", sans-serif;
    }
    .form-box {
        max-width: 650px;
        margin: auto;
        margin-top: 40px;
        padding: 35px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .form-title {
        font-weight: 600;
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }
    .icon-input {
        position: relative;
    }
    .icon-input i {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        color: #777;
        font-size: 18px;
    }
    .icon-input input,
    .icon-input select,
    .icon-input textarea {
        padding-left: 40px !important;
    }
    .btn-modern {
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 16px;
    }
    .color-box {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }
</style>
</head>

<body>

<div class="form-box">

    <h2 class="form-title"><i class="bi bi-ui-checks-grid"></i> ฟอร์มรับข้อมูล chat gpt</h2>

    <form method="post">

        <!-- ชื่อ -->
        <div class="mb-3 icon-input">
            <label class="form-label">ชื่อ - สกุล</label>
            <i class="bi bi-person"></i>
            <input type="text" class="form-control" name="fullname" required autofocus>
        </div>

        <!-- เบอร์โทร -->
        <div class="mb-3 icon-input">
            <label class="form-label">เบอร์โทร</label>
            <i class="bi bi-telephone"></i>
            <input type="text" class="form-control" name="phone" required>
        </div>

        <!-- ส่วนสูง -->
        <div class="mb-3 icon-input">
            <label class="form-label">ส่วนสูง (ซม.)</label>
            <i class="bi bi-rulers"></i>
            <input type="number" class="form-control" name="height" min="100" max="200">
        </div>

        <!-- ที่อยู่ -->
        <div class="mb-3 icon-input">
            <label class="form-label">ที่อยู่</label>
            <i class="bi bi-geo-alt"></i>
            <textarea class="form-control" name="address" rows="3"></textarea>
        </div>

        <!-- วันเกิด -->
        <div class="mb-3 icon-input">
            <label class="form-label">วันเดือนปีเกิด</label>
            <i class="bi bi-calendar-event"></i>
            <input type="date" class="form-control" name="birthday">
        </div>

        <!-- สีที่ชอบ -->
        <div class="mb-3 d-flex align-items-center gap-3">
            <div style="flex:1;">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" name="color">
            </div>
            <div class="color-box" id="previewColor"></div>
        </div>

        <!-- สาขา -->
        <div class="mb-3 icon-input">
            <label class="form-label">สาขาวิชา</label>
            <i class="bi bi-mortarboard"></i>
            <select class="form-select" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <!-- ปุ่ม -->
        <div class="d-flex justify-content-between mt-4">
            <button type="submit" name="Submit" class="btn btn-primary btn-modern">
                <i class="bi bi-check-circle"></i> สมัครสมาชิก
            </button>

            <button type="reset" class="btn btn-outline-secondary btn-modern">
                <i class="bi bi-x-circle"></i> ยกเลิก
            </button>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-info btn-modern" onclick="window.location='https://msu.ac.th/'">
                <i class="bi bi-globe"></i> Go to MBS
            </button>

            <button type="button" class="btn btn-warning btn-modern" onclick="alert('จุ๊กกรู้ว!')">
                <i class="bi bi-emoji-smile"></i> Hello
            </button>

            <button type="button" class="btn btn-dark btn-modern" onclick="window.print();">
                <i class="bi bi-printer"></i> พิมพ์
            </button>
        </div>

    </form>

</div>

<hr class="mt-5">

<?php
if (isset($_POST['Submit'])) {
    echo "<div class='container mt-4 p-4 bg-white shadow rounded' style='max-width:600px;'>";
    echo "<h4><i class='bi bi-info-circle'></i> ข้อมูลที่ส่งมา</h4>";
    echo "ชื่อ-สกุล: {$_POST['fullname']}<br>";
    echo "เบอร์โทร: {$_POST['phone']}<br>";
    echo "ส่วนสูง: {$_POST['height']}<br>";
    echo "ที่อยู่: ".nl2br($_POST['address'])."<br>";
    echo "วันเกิด: {$_POST['birthday']}<br>";
    echo "สีที่ชอบ: <div style='background:{$_POST['color']}; width:40px; height:40px; border-radius:6px;'></div><br>";
    echo "สาขา: {$_POST['major']}<br>";
    echo "</div>";
}
?>

<script>
    // แสดงสีตัวอย่าง real-time
    document.querySelector("[name='color']").addEventListener("input", function () {
        document.getElementById("previewColor").style.background = this.value;
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
