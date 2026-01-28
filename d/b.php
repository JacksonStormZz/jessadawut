<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914005 เจษฏาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
</head>

<body>
<h1>ฟอร์มรับข้อมูล - เจษฏาวุฒิ มั่นยืน(ฟลุ๊ค)</h1>

<form method="post" action="">
ชื่อ-สกุล <input type="text" name="fullname" autofocus required> * <br>
เบอร์โทร <input type="text" name="phone"> * <br>
ส่วนสูง <input type="number" name="height" min="100" max="200"> ซม. <br>

ที่อยู่ <br><textarea name="address" cols="40" rows="4"></textarea><br>

วันเดือนปีเกิด <input type="date" name="birthday"><br>
สีที่ชอบ <input type="color" name="color"><br>

สาขาวิชา
<select name="major">
    <option value="การบัญชี">การบัญชี</option>
    <option value="การตลาด">การตลาด</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select>

<!--<input type="submit" name="Submit" value="สมัครสมาชิก">-->
<br><button type="submit" name="Submit">สมัครสมาชิก</button>
<button type="reset">ยกเลิก</button></br>
<button type="button"onClick="window.location='https://msu.ac.th/';">Go to MBS</button>
<button type="button" onMouseOver="alert('จุ๊กกรู้ว');">Hello</button>
<button type="button"onClick="window.print();">พิมพ์</button>
</form>

<hr>
<?php

if(isset($_POST['Submit'])){
	$fullname = $_POST['fullname'];
	$phone= $_POST['phone'];
	$height = $_POST['height'];
	$address = $_POST['address'];
	$color = $_POST['color'];
	$birthday = $_POST['birthday'];
	$major = $_POST['major'];
	
	echo "ชื่อ-สกุล".$_POST['fullname']."<br>";
	echo "เบอร์โทร".$_POST['phone']."<br>";
	echo "ส่วนสูง".$_POST['height']."<br>";
	echo "ที่อยู่".$_POST['address']."<br>";
	echo "วันเดือนปีเกิด".$_POST['birthday']."<br>";
	echo "สี <div style='background-color:#46fb73;width:300px'>".$color."</div><br>";
	echo "สาขา".$_POST['major']."<br>";
}

?>


</body>
</html>