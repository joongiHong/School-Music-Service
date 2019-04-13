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
        <link rel="stylesheet" href="../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../css/font/<?php echo $font ?>.css" type="text/css">
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
            <h1>스쿨뮤직 관리자</h1>
        </header>
        <div class="body">
            <div class="menu">
                <ul>
                    <li title="메인"><a href="index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                    <li title="신청 목록"><a href="music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                    <li title="관리자 관리"><a href="user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                    <li title="학생 관리"><a href="student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                    <li title="글쓰기"><a href="write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                    <li title="설정"><a href="setting/index.php"><span style="color: gray;"><i class="fas fa-cogs fa-3x"></i></span></a></li>
                    <li title="로그아웃"><a href="../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
                </ul>
            </div>
            <div class="userbox">
                <div class="usernum">
                    <i class="fas fa-user fa-2x"></i>
                    <h2><?php echo $_SESSION['snum']?>님</h2>
                    <h3><a href="../logout.php">로그아웃</a></h3>
                </div>
                <br>
                <hr width="100%">
                <br>
                <div class="usermenu">
                    <p style="text-align: center;"><a href="music/index.php">신청 목록</a> | <a href="student/index.php">학생 관리</a> | <a href="user/index.php">관리자 관리</a> | <a href="write/index.php">글쓰기</a></p>
                </div>
            </div>
            <div class="content">
                <h1>대시보드</h1>
                <hr width="60%">
                <br>
                <div class="count">
                    <span style="color: purple;"><i class="fas fa-pen-alt fa-5x"></i></span>
                    <br>
                    <br>
                    <p>신청한 음악 건수</p>
                    <h1>
                    <?php 
                     $query = "SELECT * FROM music";
                     $data = mysqli_query($con, $query);
                     $total_rows = mysqli_num_rows($data);

                     echo $total_rows;
                    ?>건</h1>
                </div>
                <div class="count">
                    <span style="color: purple;"><i class="fas fa-search fa-5x"></i></span>
                    <br>
                    <br>
                    <p>심사가 필요한 음악 건수</p>
                    <h1>
                    <?php 
                     $query = "SELECT * FROM music WHERE sf = 'O'";
                     $data = mysqli_query($con, $query);
                     $total_rows = mysqli_num_rows($data);

                     echo $total_rows;
                    ?>건</h1>
                </div>
                <div class="count">
                    <span style="color: purple;"><i class="fas fa-info fa-5x"></i></i></i></span>
                    <br>
                    <br>
                    <p>서비스 버전</p>
                    <h1>Beta 3</h1>
                </div>
                <br>
                <br>
                <div class="module">
                    <h1>서비스 상태</h1>
                    <hr>
                    <br>
                    <div class="server">
                        <p>학생 인증</p>
                        <?php $sql = "SHOW TABLES LIKE 'studentdoc'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: #5CD1E5" title="서비스가 정상적으로 작동하고 있습니다."><i class="fas fa-check-circle"></i></span>'; }else{echo '<span style="color: #FFA7A7" title="서비스에 문제가 발생하여 작동되지 않고 있습니다."><i class="fas fa-exclamation-circle"></i></span>'; }; ?>
                    </div>
                    <div class="server">
                        <p>관리자 인증</p>
                        <?php $sql = "SHOW TABLES LIKE 'master'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: #5CD1E5" title="서비스가 정상적으로 작동하고 있습니다."><i class="fas fa-check-circle"></i></span>'; }else{echo '<span style="color: #FFA7A7" title="서비스에 문제가 발생하여 작동되지 않고 있습니다."><i class="fas fa-exclamation-circle"></i></span>'; }; ?>
                    </div>
                    <div class="server">
                        <p>신청 서비스</p>
                        <?php $sql = "SHOW TABLES LIKE 'music'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: #5CD1E5" title="서비스가 정상적으로 작동하고 있습니다."><i class="fas fa-check-circle"></i></span>'; }else{echo '<span style="color: #FFA7A7" title="서비스에 문제가 발생하여 작동되지 않고 있습니다."><i class="fas fa-exclamation-circle"></i></span>'; }; ?>
                    </div>
                    <div class="server">
                        <p>게시판</p>
                        <?php $sql = "SHOW TABLES LIKE 'board'"; $ret = mysqli_query($con, $sql); $row = mysqli_fetch_array($ret); if($row == true){echo '<span style="color: #5CD1E5" title="서비스가 정상적으로 작동하고 있습니다."><i class="fas fa-check-circle"></i></span>'; }else{echo '<span style="color: #FFA7A7" title="서비스에 문제가 발생하여 작동되지 않고 있습니다."><i class="fas fa-exclamation-circle"></i></span>'; }; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>