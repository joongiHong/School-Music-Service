<?php 
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 본인인증</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/order.css" type="text/css">
        <link rel="stylesheet" href="../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="../css/font/<?php echo $font ?>.css" type="text/css">
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
            <h1>음악 신청</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="div_2">
            <h1>학생 본인인증</h1>
            <p><?php echo $schoolname ?> 학생 여부를 확인하기 위해 학생 본인인증 절차를 진행합니다.</p>
            <br>
            <hr>
            <br>
            <h3>학생 개인정보</h3>
            <br>
            <form action="order2.php" method="POST">
                <div class="form_div">
                    <div class="textbox">
                        <label for="studentnum">학번</label>&nbsp;&nbsp;
                        <input type="number" id="studentnum" name="studentnum">
                    </div>
                    <div class="textbox">
                        <label for="studentname">이름</label>&nbsp;&nbsp;
                        <input type="text" id="studentname" name="studentname">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn-1">인증</button>
            </form>
        </div>
    </body>
</html>