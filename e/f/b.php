<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914005 เจษฎาวุฒิ มั่นยืน (ฟลุ๊ค)</title>
</head>

<body>
<h1>66010914005 เจษฎาวุฒิ มั่นยืน</h1>


<form method = "post" action = "">
    กรอกตัวเลข <input type = "number" name = "a" autofocus require>
    <button type = "submit" name = "Submit">OK</button>
</form>
<hr>

<?php 
if(isset($_POST['Submit'])){
    $gender =$_POST["a"];
    if($gender ==1){
        echo  "เพศชาย";
    } else if ($gender==2){
        echo  "เพศหญิง";

    }else if ($gender==3){
        echo  "เพศทางเลือก";
    }else if ($gender==4){
        echo  "อื่นๆ";
    }


}
?>

    





</body>
</html>
