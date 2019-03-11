<?php
    session_start();

    if(!isset($_SESSION['snum'])) {
        echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
    }

    $snum = $_GET['snum'];

    $con=mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
    $sql ="DELETE FROM studentdoc WHERE snum=".$snum.";";
    $ret = mysqli_query($con, $sql);
    if($ret) {
        echo "<script>alert('정상적으로 처리하였습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }else {
        echo "<script>alert('처리에 실패하였습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }
?>