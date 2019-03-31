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
        <link rel="stylesheet" href="../../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body style="padding: 10px;">
        <h1 style="text-align: center;">관리자 추가</h1>
        <br>
        <form action="plus2.php" method="POST">
            <div class="textbox3">
                <label for="studentnum">학번</label>&nbsp;&nbsp;
                <input type="number" id="studentnum" name="studentnum">
            </div>
            <div class="textbox3">
                <label for="password">암호</label>&nbsp;&nbsp;
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="btn-2" style="font-size: 15px;">추가</button>
        </form>
    </body>
</html>