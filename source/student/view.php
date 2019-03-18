<?php
    header("Content-Type: text/html; charset=UTF-8");
    $num=$_GET['num'];
?>
    <!DOCTYPE html>
<html>
    <head>
        <title>고창중학교 음악 신청 서비스 - 학생 센터</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/button.css" type="text/css">
        <link rel="stylesheet" href="../css/order.css" type="text/css">
        <link rel="stylesheet" href="../css/textbox.css" type="text/css">
    </head>
    <body>
        <header>
            <ul>
                <li id="logo"><a href="../index.html"><img src="../img/logo/logo.png" alt="고창중학교 방송부" width="350"/></a></li>
                <li id="menu"><a href="../student/index.html">학생 센터</a></li>
                <li id="menu"><a href="../check/index.html">선정 확인</a></li>
                <li id="menu"><a href="../order/index.html">음악 신청</a></li>
            </ul>
        </header>
        <div id="mobile_menu">
            <ul>
                <li><a href="../order/index.html">음악 신청</a></li>
                <li><a href="../check/index.html">선정 확인</a></li>
                <li><a href="../student/index.html">학생 센터</a></li>
            </ul>
        </div>
        <div id="div_1">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>학생센터</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="div_2">
            <?php
                $con =mysqli_connect("127.0.0.1", "root", "*********", "broadcasting") or die("Error! MySQL Not Connect [code : Mysql-1]");
                mysqli_query($con, "set session character_set_connection=utf8;");
                mysqli_query($con, "set session character_set_results=utf8;");
                mysqli_query($con, "set session character_set_client=utf8;");
                $sql = "SELECT * FROM board WHERE num=".$num."";
                $ret = $con->query($sql);
                while ($row = $ret->fetch_assoc()) {
            ?>
            <h1>공지 사항 및 사용안내</h1>
            <p>서비스와 관련한 공지 사항과 서비스 사용 방법에 대한 안내가 수록되어 있습니다.</p>
            <br>
            <hr>
            <br>
            <h3>제목&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $row['title']?></h3>
            <br>
            <div style="white-space:pre;">
<?php echo $row['content']?>
            </div>
                <?php } ?>
            <br>
        </div>
    </body>
</html>
