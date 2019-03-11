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
                width: 40%
            }

            td:nth-child(3) {
                width: 30%
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
            <h1 style="font-size: 70px;">학생 관리</h1>
            <br>
            <h3>음악을 신청할 수 있는 학생 관한을 가진 유저를 추가하고 삭제할 수 있습니다.</h3>
            <h3>Ctrl + F를 이용하여 찾는 것이 간편하고 빠릅니다.</h3>
            <br>
            <hr>
            <br>
            <table>
                <tr style="background-color: white;">
                    <td>학번</td>
                    <td>이름</td>
                    <td>관리</td>
                </tr>
                <?php
                $con =mysqli_connect("127.0.0.1", "root", "*******", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
                $sql = "SELECT * FROM studentdoc order by snum desc";
                $ret = $con->query($sql);
                while ($row = $ret->fetch_assoc()) {
                ?>
                
                <tr>
                    <td><?php echo $row['snum']?></td>
                    <td><?php echo $row['sname']?></td>
                    <td><a href="out.php?snum=<?php echo $row['snum']?>">삭제</a></td> 
                </tr>

                <?php
                }
                ?>
            </table>
            <a href="plus.php" onclick="window.open(this.href, '_blank', 'width=500px,height=320px,toolbars=no,scrollbars=no'); return false;"><button style="font-size:15px;">학생 추가</button></a>
        </div>
    </body>
</html>