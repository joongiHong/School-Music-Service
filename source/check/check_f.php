<?php 
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 선정 확인</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/order.css" type="text/css">
        <link rel="stylesheet" href="../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <ul>
                <li id="logo"><a href="../index.html"><img src="../img/logo/logo.png" alt="고창중학교 방송부" width="350"/></a></li>
                <li id="menu"><a href="../student/index.html">학생 센터</a></li>
                <li id="menu"><a href="../check/index.html">선정 확인</a></li>
                <li id="menu"><a href="../order/index.html">음악 신청</a></li>
            </ul>
        </header>
        <div id="mobile_menu">
            <ul>
                <li><a href="../order/index.html">음악 신청</a></li>
                <li><a href="../check/index.html">선정 확인</a></li>
                <li><a href="../student/index.html">학생 센터</a></li>
            </ul>
        </div>
        <div id="div_1">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>선정 확인</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="div_2" style="text-align: center;">
            <span style="color: gray;"><i class="fas fa-question-circle fa-9x"></i></i></span>
            <br>
            <br>
            <h1>음악이 접수되지 않았습니다.</h1>
            <br>
            <p>입력하신 음악이 접수되지 않은 것으로 보입니다.</p>
            <p>신청 당시 입력한 음악 제목과 가수와 정확히 일치하는지 확인하여 주시고,</p>
            <p>혹시 서버에 문제가 생겨 정상 접수 되지 않은 것인지 확인하여 주십시오.</p>
        </div>
    </body>
</html>
