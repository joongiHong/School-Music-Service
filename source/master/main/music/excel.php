<?php
session_start();

header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = music.xls" ); 
header( "Content-Description: PHP4 Generated Data" );

$EXCEL_STR = "
<table border='1'>
<tr>
    <td>순번</td>
    <td>제목</td>
    <td>가수</td>
    <td>앨범</td>
</tr>";

$con =mysqli_connect("localhost", "joongi1978", "wnsqpdjtm2", "joongi1978") or die("Error! MySQL Not Connect [code : Mysql-1]");
mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
$sql = "SELECT * FROM music order by number desc";
$ret = $con->query($sql);
while ($row = $ret->fetch_assoc()) {
$EXCEL_STR .="
<tr>
    <td>".$row['number']."</td>
    <td>".$row['name']."</a></td>
    <td>".$row['singer']."</td>
    <td>".$row['album']."</td>
</tr>
";
}
$EXCEL_STR .= "</table>";
echo "<meta http-equiv:'Content-Type' content='text/html; charset=utf-8'>";
echo $EXCEL_STR;
?>