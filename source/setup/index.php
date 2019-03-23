<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치</title>
    </head>
    <body>
        <div id="logo">
            <img src="logo.png">
        </div>
        <div id="info">
        <?php
        $is_file_exist = file_exists("../dbinfo.php");

        if ($is_file_exist) {
            echo "
                <h1>이미 dbinfo.php가 설치되어 있는 것 같습니다.</h1>
                <p>만약에 정상적으로 작동하지 않다면 서버에서 dbinfo.php를 제거한 후 다시 해 보세요.</p>
            ";
            exit;
        }else {
            echo "
                <h1>스쿨뮤직 서비스의 설치를 시작합니다!</h1>
                <p>본 작업은 스쿨뮤직이 동작할 수 있도록 하는 대부분의 설정을 담당합니다.</p>
                <p>본 자동 설치를 통해 생성된 dbinfo.php가 모든 서버에서 정상 작동하지 않을 수 있습니다.</p>
                <p>가장 좋은 것은 직접 dbinfo.php를 생성하시는 것입니다.</p>
            ";
        };
        ?>
            <button onclick="window.location.href = 'step1.php'">자동설치</button>
            <button onclick="window.location.href = 'https://github.com/joongiHong/School-Music-Service/'">수동설치</button>
        </div>
    </body>
</html>