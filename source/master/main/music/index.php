<!DOCTYPE HTML>
<?php 
session_start();
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $schoolname ?> 음악 신청 서비스 - 관리자</title>
        <link rel="stylesheet" href="../../../css/master.css" type="text/css">
        <link rel="stylesheet" href="../../../css/font/<?php echo $font ?>.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body onload="sf()">
        <?php
            header("Content-Type: text/html; charset=UTF-8");
            if(!isset($_SESSION['snum'])) {
                echo "<script>alert('비정상적 접속입니다. 로그인 하십시오.');</script>";
                echo "<script>window.location.href = '../../index.html';</script>";
            }else
        ?>
        <header>
            <h1>스쿨뮤직 관리자</h1>
        </header>
        <div class="body">
            <div class="menu">
                <ul>
                    <li title="메인"><a href="../index.php"><span style="color: gray;"><i class="fas fa-home fa-3x"></i></span></a></li>
                    <li title="신청 목록"><a href="../music/index.php"><span style="color: gray;"><i class="fas fa-music fa-3x"></i></span></a></li>
                    <li title="관리자 관리"><a href="../user/index.php"><span style="color: gray;"><i class="fas fa-user-check fa-3x"></i></span></a></li>
                    <li title="학생 관리"><a href="../student/index.php"><span style="color: gray;"><i class="fas fa-user-graduate fa-3x"></i></span></a></li>
                    <li title="글쓰기"><a href="../write/index.php"><span style="color: gray;"><i class="fas fa-pen fa-3x"></i></span></a></li>
                    <li title="설정"><a href="../setting/index.php"><span style="color: gray;"><i class="fas fa-cogs fa-3x"></i></span></a></li>
                    <li title="로그아웃"><a href="../../logout.php"><span style="color: gray;"><i class="fas fa-sign-out-alt fa-3x"></i></span></a></li>
                </ul>
            </div>
            <div class="userbox">
                <div class="usernum">
                    <i class="fas fa-user fa-2x"></i>
                    <h2><?php echo $_SESSION['snum']?>님</h2>
                    <h3><a href="../../logout.php">로그아웃</a></h3>
                </div>
                <br>
                <hr width="100%">
                <br>
                <div class="usermenu">
                    <p style="text-align: center;"><a href="../music/index.php">신청 목록</a> | <a href="../student/index.php">학생 관리</a> | <a href="../user/index.php">관리자 관리</a> | <a href="../write/index.php">글쓰기</a></p>
                </div>
            </div>
            <div class="content">
                <h1>신청 목록</h1>
                <hr width="60%">
                <br>
                <div class="module_small">
                    <table class="m_table">
                        <tbody>
                            <tr>
                                <td>순번</td>
                                <td>제목</td>
                                <td>가수</td>
                                <td>앨범</td>
                                <td>선정 여부</td>
                                <td>결과 전송</td>
                            </tr>
                        </tbody>
                        <tbody>
                        <?php
                        Require $_SERVER["DOCUMENT_ROOT"]."/dbinfo.php";
                        mysqli_query($con, "set session character_set_connection=utf8;");
                        mysqli_query($con, "set session character_set_results=utf8;");
                        mysqli_query($con, "set session character_set_client=utf8;");
                        $sql = "SELECT * FROM music order by number desc";
                        $ret = $con->query($sql);
                        while ($row = $ret->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['number']?></td>
                                <td><a href="https://music.bugs.co.kr/search/integrated?q=<?php echo $row['name']?>" target="_blank"><?php echo $row['name']?></a></td>
                                <td><?php echo $row['singer']?></td>
                                <td><?php echo $row['album']?></td>
                                <td><?php 
                                $sf = $row['sf']; 
                                if ( $sf == 'O' ) { 
                                    echo "심사중"; 
                                    } elseif ( $sf == 'y' ) {
                                        echo "선정";
                                    } else {
                                        echo "탈락";
                                    } 
                                    ?></td>
                                <td><a href="y.php?number=<?php echo $row['number']?>"><button class="button2">선정</button></a> <a href="n.php?number=<?php echo $row['number']?>"><button class="button2">탈락</button></a> <a href="delete.php?number=<?php echo $row['number']?>"><button class="button2">삭제</button></a></td> 
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
                <br>
                <div class="module_small">
                    <button class="button3" onclick="location.href = 'clean.php'">순번 초기화</button>
                    <p style="display: inline;">음악의 순번을 초기화 합니다. 신청된 음악이 모두 삭제 되어야 합니다.</p>
                    <br>
                    <br>
                    <button class="button3" onclick="location.href = 'excel.php'">엑셀 저장</button>
                    <p style="display: inline;">음악 신청목록을 엑셀로 저장합니다.</p>
                </div>
            </div>
        </div>
    </body>
</html>