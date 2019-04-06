<?php
header('Content-Type: text/html; charset=utf-8');

$is_file_exist = file_exists("../../serviceinfo.php");

if ($is_file_exist) {
    echo "
        <script>alert('이미 서비스가 설치되어 있습니다.')</script>
    ";
    exit;
};

$schoolname = $_POST['schoolname'];
$pp = $_POST['pp'];

# serviceinfo.php 생성

$newfile = fopen("../../serviceinfo.php", "w") or die("<script>alert('serviceinfo.php 생성실패! 권환 확인 요망!')</script>");

$txt = '<?php';
fwrite($newfile, $txt);

$txt = ' Require $_SERVER["DOCUMENT_ROOT"]."/font.php";';
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
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 서비스 정보 입력</title>
        <style>
            textarea {
                width: 500px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div id="logo">
            <img src="../img/ko/step3.png">
        </div>
        <div id="info">
        <form action="step6.php" method="POST" enctype="multipart/form-data">
            <h2>본 서비스에 입력될 학교 정보와 각종 약관을 입력하여 주시기 바랍니다.</h2>
            <label for="file">학교 사진</label>&nbsp;&nbsp;
            <input type="file" name="myfile">
            <br>
            <br>
            <div id="plusinfo">
                <p>학교 로고는 500 X 150 사이즈가 적합하며, png 형식의 파일로 업로드 하셔야 합니다.</p>
            </div>
            <br>
            <button type="submit">완료</button>
        </form>
        </div>
    </body>
</html>
