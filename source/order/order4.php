<?php
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";

header("Content-Type: text/html; charset=UTF-8");
$music=$_POST['music'];
$singer=$_POST['singer'];
$album=$_POST['album'];

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="INSERT INTO music (name, singer, album, sf, time) VALUES ('".$music."','".$singer."','".$album."','O', DEFAULT);";
$ret = mysqli_query($con, $sql);

if($ret) {
    session_start();
    session_destroy();
    echo "<script>window.location.href = 'order5.html';</script>";
}
else {
    echo "<script>alert('Error! MySQL Fail [code : Mysql-2]');</script>";
}
?>
