<?php
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";

header("Content-Type: text/html; charset=UTF-8");
$snum=$_POST['studentnum'];
$sname=$_POST['name'];

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="INSERT INTO studentdoc VALUES(".$snum.", '".$sname."');";
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
