<?php
$num=$_POST['studentnum'];
$pass=$_POST['password'];

$con=mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="INSERT INTO master VALUES(".$num.", '".$pass."');";
$ret = mysqli_query($con, $sql);
if($ret) {
    echo "<script>alert('정상적으로 추가되었습니다.');</script>";
    echo "<script>self.close()</script>";
    exit;
}else {
    echo "<script>alert('추가를 실패하였습니다.');</script>";
    echo "<script>self.close()</script>";
    exit;
}
?>