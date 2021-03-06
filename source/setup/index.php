<?php
    header('Content-Type: text/html; charset=utf-8');
    $is_file_exist = file_exists("../dbinfo.php");

    if ($is_file_exist) {
        echo "
            <script>alert('이미 서비스가 설치되어 있습니다.')</script>
        ";
        exit;
    };
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - Welcome</title>
    </head>
    <body>
        <div id="logo">
            <img src="img/ko/logo.png">
        </div>
        <div id="info">
            <h1>스쿨뮤직 서비스의 설치를 시작합니다!</h1>
            <p>본 작업은 스쿨뮤직이 동작할 수 있도록 하는 대부분의 설정을 담당합니다.</p>
            <p>본 작업을 통하여 생성되는 것은 총 3개로, dbinfo.php와 serviceinfo.php, 각종 정보용 테이블입니다.</p>
            <p>위 3개는 본 서비스가 동작하는데 필수적인 것입니다.</p>
        <button onclick="window.location.href = 'step1.php'">설치를 시작합니다.</button>
        </div>
    </body>
</html>