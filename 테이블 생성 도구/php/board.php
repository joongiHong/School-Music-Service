﻿<?php
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

// table 만들기
$sql = "CREATE TABLE board
(
    num INT AUTO_INCREMENT,
    type VARCHAR(20),
    tutle VARCHAR(150),
    content TEXT,
    PRIMARY KEY(num)
);";

if (mysqli_query($conn,$sql)){
echo "<script>alert('Mysql 테이블 생성 성공! 다음 테이블 생성 조치 바람!')</script>";
exit;
} else {
echo "<script>alert('에러 발생! 스크립트 수정 요망!')</script>";
exit;
}
?> 
