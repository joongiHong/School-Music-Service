<?php
$music=$_POST['music'];
$singer=$_POST['singer'];

$con=mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="SELECT * FROM music WHERE name='".$music."' AND singer='".$singer."' AND sf='Y';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'check_y.html';</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}

$con=mysqli_connect("127.0.0.1", "root", "*******s", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="SELECT * FROM music WHERE name='".$music."' AND singer='".$singer."' AND sf='O';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'check_o.html';</script>";
        exit;
    }else{
        echo "<script>window.location.href = 'check_n.html';</script>";
        exit; 
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}
?>