<?php
header("Content-Type: text/html; charset=UTF-8");
$db_host = "localhost"; 
$db_user = "db 로그인 아이디"; 
$db_passwd = "db 로그인 비밀번호";
$db_name = "db 이름"; 

// MySQL - DB 접속.
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno()){
echo "<script>alert('Mysql 접속 실패! db 접속 정보 확인 요망!')</script>";
exit;
}

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

// table 만들기
$sql ="INSERT INTO master VALUES(12345, 'test');";
if (mysqli_query($conn,$sql)){
echo "<script>alert('테스트 용 관리자 추가 성공!')</script>";
exit;
} else {
echo "<script>alert('에러 발생! 스크립트 수정 요망!')</script>";
exit;
}
?> 