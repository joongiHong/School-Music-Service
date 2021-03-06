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
            <h1>선정 확인</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="div_2">
            <h1>신청 정보 입력</h1>
            <p>음악의 선정 여부를 확인하기 위해 신청 정보를 입력합니다.</p>
            <br>
            <hr>
            <br>
            <h3>음악 신청 정보</h3>
            <br>
            <form action="check1.php" method="POST">
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
                </div>
                <br>
                <button type="submit" class="btn-1">확인</button>
            </form>
            <br>
            <h3>주의 사항</h3>
            <br>
            <p>1. 동일 차수에 동일 음악이 신청된 경우 1개만 송출합니다.</p>
            <p>2. 확인 결과 선정이어도 취소 될 수 있습니다. 학생센터를 참고해 주세요.</p>
            <p>3. 전산 실수로 선정이나 탈락으로 표시될 수 있습니다. 자세한 선정 정보는 학생센터를 참고해 주세요.</p>
            <p>4. 신청시 입력한 정보와 지금 입력하는 정보가 일치하지 않는 경우 에러가 표시될 수 있습니다.</p>
        </div>
    </body>
</html>
