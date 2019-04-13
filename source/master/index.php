<?php 
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/master.css" type="text/css">
        <link rel="stylesheet" href="../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body id="login_body">
        <div id="login" style="text-align: center;">
            <span style="color: white;"><i class="fas fa-key fa-5x"></i></span>
            <form action="login.php" method="POST">
            <br>
                <input type="number" name="studentnum" class="textbox1" placeholder="학번" title="학번">
                <input type="password" name="password" class="textbox1" placeholder="비밀번호" title="비밀번호"><br>
                <button type="submit" class="button1">로그인</button>
            </form>
        </div>
    </body>
</html>
