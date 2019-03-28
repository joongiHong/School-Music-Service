<?php
    $is_file_exist = file_exists("../dbinfo.php");

    if ($is_file_exist) {
        echo "
            <script>window.location.href = 'index.php'</script>
        ";
        exit;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - Step1</title>
    </head>
    <body>
        <div id="logo">
            <img src="logo.png">
        </div>
        <div style="text-algin: left;">
        <form action="step2.php" method="POST">
            <h1 style="font-size: 50px;">Step1</h1>
            <h1>DB와 연동</h1>
            <hr>
            <h2>DB 정보 입력</h2>
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
            <h2>테스트용 관리자 / 학생 입력</h2>
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
            <button type="submit">완료</button>
        </form>
        </div>
    </body>
</html>