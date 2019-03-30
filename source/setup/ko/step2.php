<?php
    header('Content-Type: text/html; charset=utf-8');
    $is_file_exist = file_exists("../../dbinfo.php");

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
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 이용약관</title>
    </head>
    <body>
        <div id="logo">
            <img src="../img/ko/step2.png">
        </div>
        <div id="info">
            <h2>본 서비스를 설치하시기 전에 이용약관을 자세히 읽어보시기 바랍니다.</h2>
            <textarea readonly="readonly" style="resize: none; width: 100%; height: 500px; background-color: #EAEAEA; border: 0;">
이용 약관
            </textarea>
            <br>
            <button onclick="window.location.href = 'step3.php'">동의 합니다.</button>
        </div>
    </body>
</html>