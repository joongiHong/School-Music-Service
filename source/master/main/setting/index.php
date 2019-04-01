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
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/example.css" type="text/css">
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
            <h2>폰트 설정</h2>
            <p>서비스에 적용될 폰트를 수정할 수 있습니다. 각 항목에 폰트별로 예시가 보여집니다.</p>
            <br>
            <form action="font.php" method="post">
                <select name="font" style="margin: 1px; padding: 5px 10px; background-color: #F29661; border: 1px solid gray;">
                    <option value="">폰트 선택 - 예시</option>
                    <option value="nanum" id="nanum">나눔글꼴 - 다람쥐 헌 쳇바퀴에 타고파</option>
                    <option value="jeju" id="jeju">제주명조 - 다람쥐 헌 쳇바퀴에 타고파</option>
                    <option value="deogyang" id="deogyang">고양덕양체 - 다람쥐 헌 쳇바퀴에 타고파</option>
                </select>
                <input type="submit" value="설정" style="background-color: #A566FF; border: 0; padding: 5px 10px;">
            </form>
        </div>
    </body>
</html>
