<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสมัครงาน - บริษัท BaKPUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* สีพื้นหลังอ่อน ๆ */
        }
        .container {
            max-width: 900px; /* กำหนดความกว้างสูงสุดของฟอร์ม */
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 30px;
            background-color: #ffffff; /* สีพื้นหลังฟอร์ม */
            border-radius: 10px; /* ขอบโค้ง */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เงา */
        }
        .header-section {
            background-color: #007bff; /* สีน้ำเงินสำหรับส่วนหัว */
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 20px -30px; /* จัดการระยะห่าง */
            text-align: center;
        }
        .form-label {
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-section">
        <h1>บริษัท BaKPUK จำกัด (มหาชน)</h1>
        <p class="lead">ร่วมเป็นส่วนหนึ่งของการเติบโตไปกับเรา</p>
    </div>

    <form class="row g-3 needs-validation" method="POST" action="f.php" novalidate>
        
        <h3 class="mt-4 text-primary">💼 ข้อมูลตำแหน่งงาน</h3>
        <hr>
        <div class="col-md-12">
            <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
            <select class="form-select" id="position" name="position" required>
                <option selected disabled value="">เลือกตำแหน่ง...</option>
                <option value="วิศวกรซอฟต์แวร์">วิศวกรซอฟต์แวร์ (Software Engineer)</option>
                <option value="นักวิเคราะห์ข้อมูล">นักวิเคราะห์ข้อมูล (Data Analyst)</option>
                <option value="ผู้เชี่ยวชาญด้านการตลาดดิจิทัล">ผู้เชี่ยวชาญด้านการตลาดดิจิทัล (Digital Marketing Specialist)</option>
                <option value="เจ้าหน้าที่ฝ่ายทรัพยากรบุคคล">เจ้าหน้าที่ฝ่ายทรัพยากรบุคคล (HR Officer)</option>
                <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก (Graphic Designer)</option>
            </select>
            <div class="invalid-feedback">
                กรุณาเลือกตำแหน่งที่ต้องการสมัคร
            </div>
        </div>

        <h3 class="mt-5 text-primary">👤 ข้อมูลส่วนตัว</h3>
        <hr>
        <div class="col-md-3">
            <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
            <select class="form-select" id="prefix" name="prefix" required>
                <option selected disabled value="">เลือก...</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
            <div class="invalid-feedback">
                กรุณาเลือกคำนำหน้าชื่อ
            </div>
        </div>
        
        <div class="col-md-5">
            <label for="firstName" class="form-label">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="เช่น สมชาย">
            <div class="invalid-feedback">
                กรุณากรอกชื่อ
            </div>
        </div>
        
        <div class="col-md-4">
            <label for="lastName" class="form-label">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="lastName" name="lastName" required placeholder="เช่น ใจดี">
            <div class="invalid-feedback">
                กรุณากรอกนามสกุล
            </div>
        </div>
        
        <div class="col-md-6">
            <label for="birthDate" class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" required>
            <div class="invalid-feedback">
                กรุณาระบุวันเดือนปีเกิด
            </div>
        </div>

        <h3 class="mt-5 text-primary">🎓 ข้อมูลการศึกษา</h3>
        <hr>
        <div class="col-md-6">
            <label for="educationLevel" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
            <select class="form-select" id="educationLevel" name="educationLevel" required>
                <option selected disabled value="">เลือก...</option>
                <option value="ปวส./อนุปริญญา">ปวส./อนุปริญญา</option>
                <option value="ปริญญาตรี">ปริญญาตรี</option>
                <option value="ปริญญาโท">ปริญญาโท</option>
                <option value="ปริญญาเอก">ปริญญาเอก</option>
            </select>
            <div class="invalid-feedback">
                กรุณาเลือกระดับการศึกษาสูงสุด
            </div>
        </div>
        
        <h3 class="mt-5 text-primary">🌟 ทักษะและประสบการณ์</h3>
        <hr>
        <div class="col-md-12">
            <label for="specialSkills" class="form-label">ความสามารถพิเศษ (ภาษา, ทักษะเฉพาะทาง, โปรแกรมที่ถนัด)</label>
            <textarea class="form-control" id="specialSkills" name="specialSkills" rows="3" placeholder="เช่น พูดภาษาอังกฤษได้คล่อง, สามารถใช้ Adobe Photoshop และ Illustrator, มีทักษะด้าน Python"></textarea>
        </div>
        
        <div class="col-md-12">
            <label for="workExperience" class="form-label">ประสบการณ์ทำงาน (สรุปย่อ)</label>
            <textarea class="form-control" id="workExperience" name="workExperience" rows="5" placeholder="เช่น เคยทำงานเป็น Software Engineer มา 2 ปี ที่บริษัท XYZ มีผลงานโครงการ..."></textarea>
        </div>

        <div class="col-12 mt-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="agreed" id="agreementCheck" name="agreementCheck" required>
                <label class="form-check-label" for="agreementCheck">
                    ข้าพเจ้าขอรับรองว่าข้อมูลข้างต้นเป็นความจริงทุกประการ
                </label>
                <div class="invalid-feedback">
                    ท่านต้องรับรองความถูกต้องของข้อมูล
                </div>
            </div>
        </div>
        
        <div class="col-12 mt-4">
            <button class="btn btn-primary btn-lg" type="submit">ส่งใบสมัคร</button>
            <button class="btn btn-secondary btn-lg" type="reset">ล้างข้อมูล</button>
        </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
    (function () {
      'use strict'

      var forms = document.querySelectorAll('.needs-validation')

      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>

</body>
</html>