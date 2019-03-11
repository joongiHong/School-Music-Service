<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
    <head>
        <title>고창중학교 음악 신청 서비스 - 관리자</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../../css/button.css" type="text/css">
        <link rel="stylesheet" href="../../../css/order.css" type="text/css">
        <link rel="stylesheet" href="../../../css/textbox.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <style>
            table {
                width: 100%;
                border-top: 1px solid gray;
                border-collapse: collapse;
            }

            th, td {
                border-bottom: 1px solid gray;
                padding: 5px;
            }

            td:nth-child(1) {
                width: 5%
            }

            td:nth-child(2) {
                width: 35%
            }

            td:nth-child(3) {
                width: 25%
            }
            
            td:nth-child(4) {
                width: 25%
            }
            
            td:nth-child(5) {
                width: 10%
            }
        </style>
    </head>
    <body>
        <?php
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../../index.html';</script>";
            }
        ?>
        <header>
            <ul>
                <li title="메인"><a href="../index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                <li title="신청 목록"><a href="../music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                <li title="관리자 관리"><a href="../user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                <li title="학생 관리"><a href="../student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                <li title="글쓰기"><a href="../write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                <li title="로그아웃"><a href="../../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
            </ul>
        </header>
        <div id="main">
            <h1 style="font-size: 70px;">신청 목록</h1>
            <br>
            <h3>학생들이 신청한 음악 목록으로 음악 정보와 선정 여부를 선택할 수 있습니다.</h3>
            <br>
            <hr>
            <br>
            <table>
                <tr style="background-color: white;">
                    <td>순번</td>
                    <td>제목</td>
                    <td>가수</td>
                    <td>앨범</td>
                    <td>결과 전송</td>
                </tr>
                <?php
                $con =mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
                $sql = "SELECT * FROM music order by number desc";
                $ret = $con->query($sql);
                while ($row = $ret->fetch_assoc()) {
                ?>
                
                <tr>
                    <td><?php echo $row['number']?></td>
                    <td><a href="https://music.bugs.co.kr/search/integrated?q=<?php echo $row['name']?>" target="_blank"><?php echo $row['name']?></a></td>
                    <td><?php echo $row['singer']?></td>
                    <td><?php echo $row['album']?></td>
                    <td><a href="y.php?number=<?php echo $row['number']?>">선정</a> | <a href="n.php?number=<?php echo $row['number']?>">탈락</a></td> 
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>