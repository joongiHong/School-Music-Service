<?php
header('Content-Type: text/html; charset=utf-8');

$is_file_exist = file_exists("../serviceinfo.php");

if ($is_file_exist) {
    echo "
        <script>window.location.href = 'index.php'</script>
    ";
    exit;
};

$schoolname = $_POST['schoolname'];
$pp = $_POST['pp'];

# serviceinfo.php 생성

$newfile = fopen("../serviceinfo.php", "w") or die("<script>alert('serviceinfo.php 생성실패! 권환 확인 요망!')</script>");

$txt = '<?php';
fwrite($newfile, $txt);

$txt = ' $schoolname="'.$schoolname.'";';
fwrite($newfile, $txt);

$txt = ' $pp="'.$pp.'";';
fwrite($newfile, $txt);

$txt = ' ?>';
fwrite($newfile, $txt);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - Step3</title>
    </head>
    <body>
        <div id="logo">
            <img src="logo.png">
        </div>
        <div style="text-algin: left;">
        <form action="step4.php" method="POST" enctype="multipart/form-data">
            <h1 style="font-size: 50px;">Step3</h1>
            <h1>사진 파일 변경</h1>
            <hr>
            <h2>방송부 로고 업로드</h2>
            <label for="file">학교 사진</label>&nbsp;&nbsp;
            <input type="file" name="myfile">
            <br>
            <br>
            <button type="submit">완료</button>
        </form>
        </div>
    </body>
</html>