<!DOCTYPE html>
<?php 
    header("Content-Type: text/html; charset=UTF-8");
    session_start();
    Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../../index.html';</script>";
            }
        ?>
        <header>
            <ul>
                <li title="메인"><a href="../index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                <li title="신청 목록"><a href="../music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                <li title="관리자 관리"><a href="../user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                <li title="학생 관리"><a href="../student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                <li title="글쓰기"><a href="../write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                <li title="설정"><a href="../setting/index.php"><span style="color: gray;"><i class="fas fa-cogs fa-3x"></i></span></a></li>
                <li title="로그아웃"><a href="../../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
            </ul>
        </header>
        <div id="main">
            <h1 style="font-size: 70px;">환경설정</h1>
            <br>
            <h3>음악 신청 서비스의 전반적인 설정 사항을 변경할 수 있습니다.</h3>
            <br>
            <hr>
            <br>
        </div>
    </body>
</html>
