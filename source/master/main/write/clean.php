<?php
    header("Content-Type: text/html; charset=UTF-8");
    session_start();

    if(!isset($_SESSION['snum'])) {
        echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
        echo "<script>window.location.href = '../../index.html';</script>";
    }
    $con =mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
    mysqli_query($con, "set session character_set_connection=utf8;");
    mysqli_query($con, "set session character_set_results=utf8;");
    mysqli_query($con, "set session character_set_client=utf8;");
    $sql = "SELECT num FROM board";
    $ret = $con->query($sql);
    if($ret) {
        if(1 < $row = $ret->fetch_assoc()) {
            echo "<script>alert('게시글이 모두 삭제되지 않았습니다.');</script>";
            echo "<script>self.close()</script>";
            exit;
        }
    }else{
        echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
        echo "<script>self.close()</script>";
        exit;
    }

    $con =mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
    mysqli_query($con, "set session character_set_connection=utf8;");
    mysqli_query($con, "set session character_set_results=utf8;");
    mysqli_query($con, "set session character_set_client=utf8;");
    $sql = "ALTER TABLE board AUTO_INCREMENT=1";
    $ret = $con->query($sql);
    if($ret) {
        echo "<script>alert('초기화를 성공하였습니다.');</script>";
        echo "<script>self.close()</script>";
        exit;
    }else{
        echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
        echo "<script>self.close()</script>";
        exit;
    }
?>
