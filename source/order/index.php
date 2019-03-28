<!DOCTYPE html>
<html>
    <head>
        <title>고창중학교 음악 신청 서비스 - 음악신청</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/order.css" type="text/css">
        <script language="JavaScript" type="text/JavaScript">
            function agree(){
                var yn=window.confirm('개인정보 처리 방침에 동의하신 것으로 간주하고\n가입을 진행합니다.');
                if(yn==true) {
                    location.href="order1.html";
                }
                else {
                    alert("미 동의시 본인인증이 불가능하여\n신청이 어렵습니다.")
                }
            }
        </script>
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
            <p>고창중 학생 여부를 확인하기 위해 학생 본인인증 절차를 진행합니다.</p>
            <br>
            <hr>
            <br>
            <h3>개인정보 처리 방침</h3>
            <br>
            <textarea readonly style="width: 100%; height: 300px; resize: none;">
<?php
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php";

echo $pp
?>
            </textarea>
            <button class="btn-1" onclick="agree()">인증하기 (동의)</button>
        </div>
    </body>
</html>