<?php 
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/master.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="../css/font/<?php echo $font ?>.css" type="text/css">
    </head>
    <body>
        <div id="box">
            <h1 style="text-align: center;">관리자 로그인</h1>
            <br>
            <hr width="50%">
            <br>
            <form action="login.php" method="POST">
                <div class="textbox2">
                    <label for="studentnum">학번</label>&nbsp;&nbsp;
                    <input type="number" id="studentnum" name="studentnum">
                </div>
                <div class="textbox2">
                    <label for="password">암호</label>&nbsp;&nbsp;
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit" class="btn-2" style="font-size: 15px;">로그인</button>
            </form>
        </div>
    </body>
</html>
