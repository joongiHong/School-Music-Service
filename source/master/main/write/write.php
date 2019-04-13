<!DOCTYPE HTML>
<?php 
session_start();
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <link rel="stylesheet" href="../../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <?php
            header("Content-Type: text/html; charset=UTF-8");
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../../index.html';</script>";
            }else
        ?>
        <header>
            <h1>스쿨뮤직 관리자</h1>
        </header>
        <div class="body">
            <div class="menu">
                <ul>
                    <li title="메인"><a href="../index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                    <li title="신청 목록"><a href="../music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                    <li title="관리자 관리"><a href="../user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                    <li title="학생 관리"><a href="../student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                    <li title="글쓰기"><a href="../write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                    <li title="설정"><a href="../setting/index.php"><span style="color: gray;"><i class="fas fa-cogs fa-3x"></i></span></a></li>
                    <li title="로그아웃"><a href="../../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
                </ul>
            </div>
            <div class="userbox">
                <div class="usernum">
                    <i class="fas fa-user fa-2x"></i>
                    <h2><?php echo $_SESSION['snum']?>님</h2>
                    <h3><a href="../../logout.php">로그아웃</a></h3>
                </div>
                <br>
                <hr width="100%">
                <br>
                <div class="usermenu">
                    <p style="text-align: center;"><a href="../music/index.php">신청 목록</a> | <a href="../student/index.php">학생 관리</a> | <a href="../user/index.php">관리자 관리</a> | <a href="../write/index.php">글쓰기</a></p>
                </div>
            </div>
            <div class="content">
                <h1>글쓰기</h1>
                <hr width="60%">
                <br>
                <form action="write2.php" method="POST">
                <div class="module_small">
                    <label for="type">종류</label>
                    <input type="text" name="type" class="textbox3" id="type">
                    <br>
                    <label for="title">제목</label>
                    <input type="text" name="title" class="textbox4" id="title">
                </div>
                <br>
                <div class="module_small">
                    <textarea class="textarea1" name="content" id="content"></textarea>
                </div>
                <br>
                <div class="module_small">
                    <button type="submit" class="button3">게시</button>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>