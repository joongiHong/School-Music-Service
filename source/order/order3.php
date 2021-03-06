<!DOCTYPE html>
<?php
    Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
    session_start(); 
    header("Content-Type: text/html; charset=UTF-8");?>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 음악신청</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/order.css" type="text/css">
        <link rel="stylesheet" href="../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="../css/font/<?php echo $font ?>.css" type="text/css">
    </head>
    <body>
        <?php
            if(!isset($_SESSION['id'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = 'order1.html';</script>";
            }
        ?>
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
            <h1>음악 신청사항</h1>
            <p>음악을 신청하기 위하여 음악의 정보를 입력합니다.</p>
            <br>
            <hr>
            <br>
            <h3>음악 정보</h3>
            <br>
            <form action="order4.php" method="POST">
                <div class="form_div">
                    <div class="textbox">
                        <label for="search">음악 검색</label>&nbsp;&nbsp;
                        <a href="https://music.bugs.co.kr/" onclick="window.open(this.href, '_blank', 'width=500px,height=800px,toolbars=no,scrollbars=no'); return false;">벅스에서 음악검색</a>
                    </div>
                    <div class="textbox">
                        <label for="music">음악 제목</label>&nbsp;&nbsp;
                        <input type="text" id="music" name="music">
                    </div>
                    <div class="textbox">
                        <label for="singer">음악 가수</label>&nbsp;&nbsp;
                        <input type="text" id="singer" name="singer">
                    </div>
                    <div class="textbox">
                        <label for="album">음악 앨범</label>&nbsp;&nbsp;
                        <input type="text" id="album" name="album">
                    </div>
                    <p>※ 음악 앨범의 경우에는 필수 사항이 아닙니다.</p>
                </div>
                <br>
                <button type="submit" class="btn-1">신청</button>
            </form>
            <br>
            <h3>주의 사항</h3>
            <br>
            <p>1. 음악의 제목이나 가수가 음원 제공사(벅스)에서 검색되지 않을 경우 선정에서 제외됩니다.</p>
            <p>2. 음악 선정 규칙에 어긋나는 음악의 경우 선정에서 제외됩니다.</p>
            <p>3. 음악의 제목이나 가수를 정확하게 입력하지 않는 경우 선정에서 제외됩니다.</p>
            <p>4. 장난성 신청은 학교 서버에 무리를 줄 뿐 아니라 다른 학우의 신청을 힘들게 할 뿐입니다. 장난성 신청을 하지 말아주시기 바랍니다.</p>
        </div>
    </body>
</html>
