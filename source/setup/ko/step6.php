<?php
header('Content-Type: text/html; charset=utf-8');

$save_dir = "../../img/logo/";

if(is_uploaded_file($_FILES["myfile"]["tmp_name"]))
{
    $dest = $save_dir . $_FILES["myfile"]["name"];

    $name = $_FILES["myfile"]["name"];

    if(!move_uploaded_file($_FILES["myfile"]["tmp_name"], $dest))
    {
        die("<script>alert('파일 업로드에 실패하였습니다!')</script>");
    }

    $test_name = rename("../../img/logo/$name","../../img/logo/logo.png");

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
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 설치 완료</title>
        <style>
            textarea {
                width: 500px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div id="logo">
            <img src="../img/ko/step4.png">
        </div>
        <div id="info">
            <h2>서비스 설치 완료를 축하합니다!</h2>
            <p>이제부터 사용하시면 됩니다. 만약 에러가 발생한다면 서버를 초기화 하신 후에 다시 본 작업을 진행해 보십시오.</p>
        </div>
    </body>
</html>