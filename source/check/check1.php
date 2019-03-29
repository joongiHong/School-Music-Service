<?php
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";
header("Content-Type: text/html; charset=UTF-8");
$music=$_POST['music'];
$singer=$_POST['singer'];

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="SELECT * FROM music WHERE name='".$music."' AND singer='".$singer."' AND sf='Y';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'check_y.php';</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="SELECT * FROM music WHERE name='".$music."' AND singer='".$singer."' AND sf='O';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'check_o.php';</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql ="SELECT * FROM music WHERE name='".$music."' AND singer='".$singer."' AND sf='N';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'check_n.php';</script>";
        exit;
    }else{
        echo "<script>window.location.href = 'check_f.php';</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}
?>
