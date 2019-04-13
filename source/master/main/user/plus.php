<?php
    header("Content-Type: text/html; charset=UTF-8");
    session_start();

    if(!isset($_SESSION['snum'])) {
        echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
    }

    Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>

<html>
    <head>
        <title>관리자 추가</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body style="padding: 10px; backgroun-color: gray;">
        <h1 style="text-align: center;">관리자 추가</h1>
        <br>
        <form action="plus2.php" method="POST">
            <input type="number" id="studentnum" name="studentnum" class="textbox2" placeholder="학번" title="학번"><br>
            <input type="password" id="password" name="password" class="textbox2" placeholder="비밀번호" title="비밀번호"><br>
            <button type="submit" class="button3" style="float: right;">추가</button>
        </form>
    </body>
</html>