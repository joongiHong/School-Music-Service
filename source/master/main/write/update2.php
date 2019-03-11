<?php
session_start();

if(!isset($_SESSION['snum'])) {
    echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
    echo "<script>window.location.href = '../../index.html';</script>";
}


$type=$_POST['type'];
$title=$_POST['title'];
$content=$_POST['content'];
$num=$_POST['num'];

$con=mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="UPDATE board SET type='".$type."',title='".$title."',content='".$content."' WHERE num=".$num." LIMIT 1;";
$ret = mysqli_query($con, $sql);

if($ret) {
    session_start();
    session_destroy();
    echo "<script>alert('정상 게시되었습니다.');</script>";
    echo "<script>self.close()</script>";
}
else {
    echo "<script>alert('Error! MySQL Fail [code : Mysql-2]');</script>";
    echo "<script>self.close()</script>";
}
?>