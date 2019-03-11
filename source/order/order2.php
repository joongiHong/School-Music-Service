<?php
$snum=$_POST['studentnum'];
$sname=$_POST['studentname'];

$con=mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
$sql ="SELECT * FROM studentdoc WHERE snum=".$snum." AND sname='".$sname."';";
$ret = mysqli_query($con, $sql);
if($ret) {
    $count = mysqli_num_rows($ret);
    if($count==1) {
        echo "<script>window.location.href = 'order3.html';</script>";
        exit;
    }else{
        echo "<script>alert('학번이나 이름이 등록되지 않았습니다.');</script>";
        echo "<script>history.back();</script>";
        exit;
    }
}else {
    echo "<script>alert('Error! MySQL unknow error [code : Mysql-3]');</script>";
    echo "<script>history.back();</script>";
    exit;
}
?>