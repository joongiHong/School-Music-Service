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
        <link rel="stylesheet" href="../../../css/write.css" type="text/css">
        <link rel="stylesheet" href="../../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body id="write">
        <?php
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../../index.html';</script>";
            }
        ?>
        <div id="main">
            <h1 style="font-size: 70px;">글쓰기</h1>
            <br>
            <h3>학생센터에 글을 작성합니다.</h3>
            <br>
            <hr>
            <br>
            <form action="write2.php" method="POST">
                <div class="textbox">
                    <label for="type">종류</label>&nbsp;&nbsp;
                    <input type="text" id="type" name="type">
                </div>
                <div class="textbox">
                    <label for="title">제목</label>&nbsp;&nbsp;
                    <input type="text" id="title" name="title">
                </div>
                <div class="textbox">
                    <label for="content">내용</label>&nbsp;&nbsp;
                    <textarea id="content" name="content"></textarea>
                </div>
                <button type="submit" class="btn-1" style="font-size: 15px;">작성</button>
            </form>
        </div>
    </body>
</html>
