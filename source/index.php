<?php 
Require $_SERVER["DOCUMENT_ROOT"]."/serviceinfo.php"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $schoolname ?> 음악 신청 서비스</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/all.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/button.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script>
            window.onload = function() {
                var layer = document.getElementById("popup");
                layer.style.visibility="visible";
            }

            function popup_close(){
                var layer = document.getElementById("popup");
                layer.style.visibility="hidden";
            }
        </script>
    </head>
    <body>
        <header>
            <ul>
                <li id="logo"><a href=""><img src="img/logo/logo.png" alt="고창중학교 방송부" width="350"/></a></li>
                <li id="menu"><a href="student/index.html">학생 센터</a></li>
                <li id="menu"><a href="check/index.html">선정 확인</a></li>
                <li id="menu"><a href="order/index.html">음악 신청</a></li>
            </ul>
        </header>
        <div id="mobile_menu">
            <ul>
                <li><a href="order/index.html">음악 신청</a></li>
                <li><a href="check/index.html">선정 확인</a></li>
                <li><a href="student/index.html">학생 센터</a></li>
            </ul>
        </div>
        <div id="body_1">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>원하시는 음악을<br>신청하세요!</h1>
            <a href="order/index.html"><button class="btn-1">지금 신청합니다!</button></a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="body_2">
            <h1>신청 안내</h3>
            <br>
            <p>음악 신청 방법에는 본 사이트를 이용하는 것과, 페이스북 페이지를 이용하는 방법 두 가지가 있습니다.</p>
            <p>신청시 필요한 내용은 이름과 학번, 신청할 음악의 제목과 가수 입니다.</p>
            <p>신청시 이름과 학번이 일치하지 않거나, 학적이 조회되지 않는 경우 신청이 불가능합니다.</p>
            <p>음원 제공자인 벅스뮤직에서 검색이 불가능 경우에도 선정이 어려울 수 있습니다.</p>
        </div>
        <div id="body_3">
            <h1>선정 규정</h3>
            <br>
            <p>음악 신청 시 다음 규정에 해당되는 음악은 가급적 신청 하지 말아주시기 바랍니다.</p>
            <p>혹시 접수되더라도 실제 선정시 불허될 예정입니다.</p>
            <br>
            <p>1. 제목이나 가사에 욕설이나 성적 언급, 과도한 비하적 표현 등이 포함된 경우</p>
            <p>2. 제목이나 가사가 '<?php echo $schoolname ?> 학생 생활 규정 (2019학년도)'을 위반하는 경우</p>
            <p>3. 내용이 <?php echo $schoolname ?> 학생들의 학습이나 올바른 관념 정착에 해를 줄 수 있는 경우</p>
            <p>4. 국가, 교육청, 학교 차원에서 금지되었거나 해를 줄 수 있을 것으로 보이는 경우</p>
            <p>5. 방송국 2곳 이상에서 금지된 경우</p>
            <br>
            <p>본 규칙은 언제나 바뀔 수 있음을 알립니다.</p>
            <p>모든 선정은 공정하게 진행됩니다.</p>
        </div>
        
        <!-- 레이어 팝업 -->
        <!--
        <div id="popup" style="padding: 10px; position: absolute; border:0; top: 100px; left: 100px; width: 500px; height: 600px; z-index: 1; visibility: hidden; background-color: #EAEAEA;">
            <h1 style="text-align: center;">전/입학생 신규 정보 등록 안내</h1>
            <hr/>
            <p>새로 입학하였거나, 타 학교에서 전학을 온 학생의 경우에는 학적 입력이 된지 5일 후에 등록이 진행됩니다.</p>
            <p>그 전에 음악을 신청하고자 하시는 경우 방송부로 내방하셔서 '전/입학에 따른 학번 등록 신청서'를 작성하시거나,</p>
            <p>담임 선생님이나 '2층 과학인문 교무실'에 방문하셔서 전/입학 사항을 알려주시기 바랍니다.</p>
            <p>위의 절차가 정상적으로 진행되지 않을 경우 본 서비스를 통한 신청이 어려울 수 있습니다.</p>
            <a href="javascript:void(0);" onclick="popup_close();"><p style="text-align: right;">닫기</p></a>
        </div>
        -->
    </body>
</html>
