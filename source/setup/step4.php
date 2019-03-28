<?php
header('Content-Type: text/html; charset=utf-8');

$save_dir = "../img/logo/";

if(is_uploaded_file($_FILES["myfile"]["tmp_name"]))
{
    $dest = $save_dir . $_FILES["myfile"]["name"];

    $name = $_FILES["myfile"]["name"];

    if(!move_uploaded_file($_FILES["myfile"]["tmp_name"], $dest))
    {
        die("<script>alert('파일 업로드에 실패하였습니다!')</script>");
    }

    $test_name = rename("../img/logo/$name","../img/logo/logo.png");

    if($test_name){
    }else{
        "<script>alert('파일 이동 실패하였습니다!')</script>";
    }
}

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 완료</title>
    </head>
    <body>
        <div id="logo">
            <img src="logo.png">
        </div>
        <div style="text-algin: center;">
            <h1 style="font-size: 50px;">설치 완료!</h1>
            <p>모든 설치를 완료하였습니다.</p>
            <p>이제부터 사용하시면 됩니다.</p>
        </div>
    </body>
</html>