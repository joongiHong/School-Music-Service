<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>고창중학교 음악 신청 서비스 - 관리자</title>
    </head>
    <body>
        <h1>환영합니다</h1>
        <?php
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../index.html';</script>";
            }else{
                $snum = $_SESSION['snum'];
                echo "<p><strong>$snum</strong>님 환영합니다.</p>";
                echo "<a href=\"../logout.php\">로그아웃</a>";
            }
        ?>
    </body>
</html>