<?php
$is_file_exist = file_exists("../dbinfo.php");

if ($is_file_exist) {
    echo "
        <script>window.location.href = 'index.php'</script>
    ";
    exit;
};

$dburl = $_POST['dburl'];
$dbname = $_POST['dbname'];
$dbid = $_POST['dbid'];
$dbpw = $_POST['dbpw'];
$stnum = $_POST['stnum'];
$stname = $_POST['stname'];
$manum = $_POST['manum'];
$mapw = $_POST['mapw'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

# dbinfo.php 생성

$newfile = fopen("../dbinfo.php", "w") or die("<script>alert('dbinfo.php 생성실패! 권환 확인 요망!')</script>");

$txt = '<?php';
fwrite($newfile, $txt);

$txt = ' header("Content-Type: text/html; charset=UTF-8");';
fwrite($newfile, $txt);

$txt = ' $con=mysqli_connect("'.$dburl.'", "'.$dbid.'", "'.$dbpw.'", "'.$dbname.'") or die("DB와 연결되지 않았습니다. 관리자에게 문의하세요.");';
fwrite($newfile, $txt);

$txt = ' ?>';
fwrite($newfile, $txt);

# 테이블 생성

$conn = mysqli_connect($dburl, $dbid, $dbpw, $dbname);
if (mysqli_connect_errno()){
echo "<script>alert('Mysql 접속 실패! db 접속 정보 확인 요망!')</script>";
exit;
};

# 1. board 테이블
$sql = "CREATE TABLE board
(
    num INT AUTO_INCREMENT,
    type VARCHAR(20),
    title VARCHAR(150),
    content TEXT,
    PRIMARY KEY(num)
);";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('테이블 생성 실패!')</script>";
exit;
};

# 2. master 테이블
$sql = "CREATE TABLE master
(
    num INT(10),
    pass VARCHAR(300),
    PRIMARY KEY(num)
);";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('테이블 생성 실패!')</script>";
exit;
};

# 3. music 테이블
$sql = "CREATE TABLE music
(
    number INT AUTO_INCREMENT,
    name VARCHAR(50),
    singer VARCHAR(50),
    album VARCHAR(50),
    sf VARCHAR(5),
    time TIMESTAMP DEFAULT NOW(),
    PRIMARY KEY(number)
);";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('테이블 생성 실패!')</script>";
exit;
};

# 4. studentdoc 테이블
$sql = "CREATE TABLE studentdoc
(
    snum INT(10),
    sname VARCHAR(15),
    PRIMARY KEY(snum)
);";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('테이블 생성 실패!')</script>";
exit;
};

# 인코딩 변경

$sql = "ALTER TABLE board CONVERT TO CHARACTER SET utf8;";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('인코딩 변경 실패!')</script>";
exit;
};

$sql = "ALTER TABLE master CONVERT TO CHARACTER SET utf8;";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('인코딩 변경 실패!')</script>";
exit;
};

$sql = "ALTER TABLE music CONVERT TO CHARACTER SET utf8;";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('인코딩 변경 실패!')</script>";
exit;
};

$sql = "ALTER TABLE studentdoc CONVERT TO CHARACTER SET utf8;";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('인코딩 변경 실패!')</script>";
exit;
};

# 임시 학생, 관리자 생성

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$sql ="INSERT INTO master VALUES(".$manum.", '".$mapw."');";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('에러 발생! 스크립트 수정 요망!')</script>";
exit;
};

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$sql ="INSERT INTO studentdoc VALUES(".$stnum.", '".$stname."');";
if (mysqli_query($conn,$sql)){
} else {
echo "<script>alert('에러 발생! 스크립트 수정 요망!')</script>";
exit;
};

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>서비스 설치 - 성공</title>
    </head>
    <body>
        <div id="logo">
            <img src="logo.png">
        </div>
        <div style="text-algin: center;">
            <h1>설치 완료!</h1>
            <h3>다음과 같은 작업을 완료하였습니다.</h3>
            <br>
            <p>1. dbinfo.php 생성 완료</p>
            <p>2. 테이블 생성 완료</p>
            <p>3. 테이블 인코딩 변경 완료</p>
            <p>4. 테스트 용 관리자, 학생 추가 완료</p>
        </div>
    </body>
</html>