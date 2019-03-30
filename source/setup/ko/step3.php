<?php
    header('Content-Type: text/html; charset=utf-8');
    $is_file_exist = file_exists("../../dbinfo.php");

    if ($is_file_exist) {
        echo "
            <script>alert('이미 서비스가 설치되어 있습니다.')</script>
        ";
        exit;
    };
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 서비스 정보 입력</title>
    </head>
    <body>
        <div id="logo">
            <img src="../img/ko/step3.png">
        </div>
        <div id="info">
        <form action="step4.php" method="POST">
            <h2>본 서비스가 동작할 수 있도록 각종 DB 정보와 사전 정보를 입력하여 주시기 바랍니다.</h2>
            <h3>DB 정보 입력</h3>
            <label for="dburl">DB 주소</label>&nbsp;&nbsp;
            <input type="text" id="dburl" name="dburl" class="input" value="localhost">
            <br>
            <br>
            <label for="dbname">DB 이름</label>&nbsp;&nbsp;
            <input type="text" id="dbname" name="dbname" class="input">
            <br>
            <br>
            <label for="dbid">DB ID</label>&nbsp;&nbsp;
            <input type="text" id="dbid" name="dbid" class="input">
            <br>
            <br>
            <label for="dbpw">DB PW</label>&nbsp;&nbsp;
            <input type="password" id="dbpw" name="dbpw" class="input">
            <br>
            <br>
            <div id="plusinfo">
                <p>DB 주소는 보통 localhost로 입력하면 사용가능합니다. 사용이 불가능 할 경우 서버의 주소를 호스팅 업체에 문의해 보시기 바랍니다.</p>
                <p>DB 이름과 id, pw는 해당 호스팅 업체에 문의하여 보시기 바랍니다. 보통 호스팅 업체의 로그인 아이디, 비밀번호 입니다.</p>
            </div>
            <br>
            <h3>테스트용 관리자 / 학생 입력</h3>
            <label for="stnum">학생 학번</label>&nbsp;&nbsp;
            <input type="text" id="stnum" name="stnum" class="input">
            <br>
            <br>
            <label for="stname">학생 이름</label>&nbsp;&nbsp;
            <input type="text" id="stname" name="stname" class="input">
            <br>
            <br>
            <label for="manum">관리자 학번</label>&nbsp;&nbsp;
            <input type="text" id="manum" name="manum" class="input">
            <br>
            <br>
            <label for="mapw">관리자 비밀번호</label>&nbsp;&nbsp;
            <input type="password" id="mapw" name="mapw" class="input">
            <br>
            <br>
            <div id="plusinfo">
                <p>학생 학번과 이름은 신청 서비스가 정상 작동하는지 확인하기 위한 정보입니다.</p>
                <p>관리자 학번과 비밀번호는 각종 서비스에 접속할 수 있는 최고 관리자 정보입니다.</p>
                <p>모두 추후 변경 가능합니다.</p>
            </div>
            <br>
            <button type="submit">다음</button>
            </form>
        </div>
    </body>
</html>