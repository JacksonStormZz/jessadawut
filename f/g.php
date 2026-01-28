<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914005 เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</title>
</head>

<body>
<h1>66010914005 เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค) โปรแกรมสูตรคูณ </h1>


<form method = "post" action = "">
    กรอกคะแนน <input type = "number"min="2"max="1000" name = "a" autofocus require>
    <button type = "submit" name = "Submit">OK</button>
</form>
<hr>


<?php
if(isset($_POST['Submit'])){
    $m= $_POST['a'];
    for ($i=1; $i<=12; $i++){
        $x=$m*$i;
        echo "{$m}x<$i>=($x)<br>";}
        
        

}
?>
</body>
</html>
