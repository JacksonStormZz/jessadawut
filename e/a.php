<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914005 เจษฏาวุฒิ มั่นยืน(ฟลุ๊ค) - ฟอร์ม Bootstrap</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* สไตล์เพิ่มเติมสำหรับสีที่เลือก */
    .color-display {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 1px solid #ccc;
        vertical-align: middle;
        margin-right: 10px;
        border-radius: 5px;
    }
</style>
</head>

<body>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="text-center mb-4 text-primary">ฟอร์มรับข้อมูล - เจษฏาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>
            <div class="card shadow-lg p-4">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" autofocus required placeholder="กรุณากรอกชื่อ-สกุล">
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" required placeholder="0XX-XXX-XXXX">
                    </div>
                    
                    <div class="mb-3">
                        <label for="height" class="form-label">ส่วนสูง (ซม.)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="height" name="height" min="100" max="200" placeholder="100 - 200">
                            <span class="input-group-text">ซม.</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="ที่อยู่ปัจจุบัน"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">สีที่ชอบ</label>
                        <input type="color" class="form-control form-control-color" id="color" name="color" value="#46fb73">
                    </div>
                    
                    <div class="mb-3">
                        <label for="major" class="form-label">สาขาวิชา</label>
                        <select class="form-select" id="major" name="major">
                            <option value="การบัญชี">การบัญชี</option>
                            <option value="การตลาด">การตลาด</option>
                            <option value="การจัดการ">การจัดการ</option>
                            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <button type="submit" name="Submit" class="btn btn-success me-md-2">
                            <i class="bi bi-person-fill-add"></i> สมัครสมาชิก
                        </button>
                        <button type="reset" class="btn btn-warning me-md-2">
                            <i class="bi bi-x-circle-fill"></i> ยกเลิก
                        </button>
                        <button type="button" class="btn btn-info text-white me-md-2" onClick="window.location='https://msu.ac.th/';">
                            <i class="bi bi-box-arrow-in-up-right"></i> Go to MSU
                        </button>
                        <button type="button" class="btn btn-secondary me-md-2" onMouseOver="alert('จุ๊กกรู้ว');">
                            <i class="bi bi-hand-index-thumb"></i> Hello
                        </button>
                        <button type="button" class="btn btn-outline-dark" onClick="window.print();">
                            <i class="bi bi-printer-fill"></i> พิมพ์
                        </button>
                    </div>
                </form>
            </div>
            
            <hr class="my-5">

    <?php
     if (isset($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        include_once("connectdb.php");

        $sql = "INSERT INTO register (r_id, r_name, r_phone, r_height, r_address, r_birthday, r_color, r_major) VALUES (NULL, '{$fullname}', '{$phone}', '{$height}', '{$address}', '{$birthday}', '{$color}', '{$major}' );";
        mysqli_query ($conn,$sql);

        echo "<script>";
        echo "alert('บันทึกข้อมูลสำเร็จ');";
        echo "</script>";
       
    }
    ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>