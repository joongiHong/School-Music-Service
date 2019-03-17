<?php
header("Content-Type: text/html; charset=UTF-8");
$num=$_POST['studentnum'];
$pass=$_POST['password'];

$con=mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="SELECT * FROM master WHERE num=".$num." AND pass='".$pass."';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        session_start();
        $_SESSION['snum'] = $num;
        echo "<script>window.location.href = 'main/index.php';</script>";
        exit;
    }else{
        echo "<script>alert('로그인에 실패하였습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}
?>
