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
        <title>서비스 설치 - 사용 언어 선택</title>
    </head>
    <body>
        <div id="logo">
            <img src="img/ko/step1.png">
        </div>
        <div id="info">
            <h2>설치를 진행하실 때 사용하실 언어를 선택하십시오.</h2>
            <input type="radio">한국어
            <br>
            <button onclick="window.location.href = 'ko/step2.php'">언어 선택</button>
        </div>
    </body>
</html>