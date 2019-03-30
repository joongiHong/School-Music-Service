<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>고창중학교 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <?php
            header("Content-Type: text/html; charset=UTF-8");
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../index.html';</script>";
            }else
        ?>
        <header>
            <ul>
                <li title="메인"><a href="index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                <li title="신청 목록"><a href="music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                <li title="관리자 관리"><a href="user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                <li title="학생 관리"><a href="student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                <li title="글쓰기"><a href="write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                <li title="로그아웃"><a href="../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
            </ul>
        </header>
        <div id="main">
            <h1 style="font-size: 70px;">메인화면</h1>
            <br>
            <h3>메인 패널로 각종 정보와 동작 사항을 확인할 수 있습니다.</h3>
            <br>
            <hr>
            <br>
            <h1>버전 정보</h1>
            <p>Beta 3 (불안정한 버전으로 문제가 발생할 수 있습니다.)</p>
        </div>
    </body>
</html>
