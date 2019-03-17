<?php
    header("Content-Type: text/html; charset=UTF-8");
    session_start();

    if(!isset($_SESSION['snum'])) {
        echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
    }

    $number = $_GET['number'];

    $con=mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
    mysqli_query($con, "set session character_set_connection=utf8;");
    mysqli_query($con, "set session character_set_results=utf8;");
    mysqli_query($con, "set session character_set_client=utf8;");
    $sql ="UPDATE music SET sf='n' WHERE number=".$number.";";
    $ret = mysqli_query($con, $sql);
    if($ret) {
        echo "<script>alert('정상적으로 변경하였습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }else {
        echo "<script>alert('변경에 실패하였습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }
?>
