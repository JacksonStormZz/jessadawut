<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เจษฎาวุฒิ มั่นยืน(ฟลุ๊ค)</title>
</head>

<body>
<h1>b.php</h1>


<?php
	echo $SESSION['name']."<br>";
	echo $SESSION['nickname']."<br>";
	echo $SESSION['p1']."<br>";
	echo $SESSION['p2']."<br>";
?>
</body>
</html>