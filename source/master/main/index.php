<!DOCTYPE html>
<?php 
session_start();
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";
?>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <style>
            tr {
                padding: 0;
                border: 0;
            }

            td {
                padding: 0;
                border: 0;
            }

            td:nth-child(1) {
                width: 100px;
            }

            td:nth-child(2) {
                width: 5px;
            }

            td:nth-child(3) {
                width: 100px;
                text-align: right;
            }

            #maginzero {
                margin: 0;
            }
        </style>
        <script>
        function times() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(times, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};
            return i;
        }
        </script>
    </head>
    <body onload="times()>
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
            <h1>현재 시각</h1>
            <h1 style="font-size: 100px;" id="time"></h1>
            <br>
            <h1>서버 상태</h1>
            <br>
            <h2>DB</h2>
            <br>
            <table>
                <tr>
                    <td><p id="maginzero">학생 DB</p></td>
                    <td> | </td>
                    <td><p id="maginzero"><?php $sql = "SHOW TABLES LIKE 'studentdoc'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: blue;" title="테이블이 존재하며, 정상 작동중입니다."><i class="far fa-check-circle"></i> 작동중</span>'; }else{echo '<span style="color: red;" title="테이블이 존재하지 않습니다. 학생 확인이 불가능 합니다."><i class="fas fa-times"></i> 작동 실패</span>'; }; ?></p></td>
                </tr>
                <tr>
                    <td><p id="maginzero">관리자 DB</p></td>
                    <td> | </td>
                    <td><p id="maginzero"><?php $sql = "SHOW TABLES LIKE 'master'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: blue;" title="테이블이 존재하며, 정상 작동중입니다."><i class="far fa-check-circle"></i> 작동중</span>'; }else{echo '<span style="color: red;" title="테이블이 존재하지 않습니다. 관리자 로그인이 불가능 합니다."><i class="fas fa-times"></i> 작동 실패</span>'; }; ?></p></td>
                </tr>
                <tr>
                    <td><p id="maginzero">신청목록 DB</p></td>
                    <td> | </td>
                    <td><p id="maginzero"><?php $sql = "SHOW TABLES LIKE 'music'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: blue;" title="테이블이 존재하며, 정상 작동중입니다."><i class="far fa-check-circle"></i> 작동중</span>'; }else{echo '<span style="color: red;" title="테이블이 존재하지 않습니다. 신청 목록 확인과 신청이 불가능 합니다."><i class="fas fa-times"></i> 작동 실패</span>'; }; ?></p></td>
                </tr>
                <tr>
                    <td><p id="maginzero">게시판 DB</p></td>
                    <td> | </td>
                    <td><p id="maginzero"><?php $sql = "SHOW TABLES LIKE 'board'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: blue;" title="테이블이 존재하며, 정상 작동중입니다."><i class="far fa-check-circle"></i> 작동중</span>'; }else{echo '<span style="color: red;" title="테이블이 존재하지 않습니다. 게시판 사용이 불가능 합니다."><i class="fas fa-times"></i> 작동 실패</span>'; }; ?></p></td>
                </tr>
            </table>     
            <br>
            <br>
            <h1>버전 정보</h1>
            <p>Beta 3 (불안정한 버전으로 문제가 발생할 수 있습니다.)</p>
        </div>
    </body>
</html>
