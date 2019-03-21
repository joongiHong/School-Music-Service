**본 프로그램에 적힌 학교 명이나 규칙은 모두 사실과 다릅니다.**

# 점심시간 음악 신청 
> 이것이 기존의 페이스북 정리 스트레스를 줄일것입니다.

점심시간에 음악을 틀어주는 경우 원하시는 음악을 신청할 수 있도록 제공해줍니다.<br>
제작자는 고창중학교 1학년 학생으로, 본 서비스의 저작권은 '본 서비스의 라이센스...' 문단을 참고하십시오.

<hr/>

## 구성된 기능
본 서비스에는 다음과 같은 기능이 포함되어 있습니다<br>
1. 학생 학적 등록을 통한 외부인의 신청을 제한
2. 학생들의 신청을 관리 시스템을 통해 깔끔하게 제공
3. 버튼 클릭만으로 모든 신청 업무 완료
4. 학교 별로 이미지나, 로고 등을 변경가능
5. 음악 블랙리스트 관리 가능

<hr/>

## 구축을 위하여...
본 '구축을 위하여...'는 본 서비스를 실제 학교 등지에 도입할 때 필요한 정보를<br>
가춘 것으로 도입을 원하는 경우 전문가와 함께 진행하십시오.

### 구축에 필요한 시스템
본 서비스를 구축하기 위해 필요한 시스템는 다음과 같습니다.<br>
*HTML **(구축 불필요)**<br>
*MySql **(구축 필요)**<br>
*충분한 호스팅 공간과 도메인 **(구축 필요)**

※ 여기서 구축 필요는 별도의 작업을 통해 구축하여야 하는 경우입니다. ※

### 구축 도움말
본 서비스의 구축은 많은 과정을 요하지 않습니다만<br>
전문가와 함께 진행하셔야 보다 빠르게 하실 수 있습니다.<br>

#### 1. 기본설치
※ 본 설치는 직접 서버 설치가 아닌, 호스팅 업체를 통한 서버 설치일 경우 필요 없습니다. ※<br>
※ 본 설치 방법은 우분투 서버 기준으로, 타 서버 OS이거나 버전에 따라 상이할 수 있습니다. ※<br>
※ 본 설치 과정은 모두 우분투의 터미널 기반으로 진행됩니다. 어려울 경우 대행사를 이용하십시오. ※<br>

1. Apache2 웹서버 설치
<pre><code>$ sudo apt update && sudo apt upgrade</code></pre>
패키지 설치를 시작하기 전에 저장소의 패키지 목록 업데이트와 업데이트 항목 존재시 업그레이드를 진행합니다.

<pre><code>$ sudo apt install apache2</code></pre>
본 명령어를 터미널에 입력하여 아파치2 설치를 진행합니다.

<pre><code>localhost</code></pre>
본 주소를 서버의 웹 브라우저 창에 입력하여 '아파치2 우분트 디폴트 페이지'가 나오는지 확인합니다.

<pre><code>$ sudo ufw enable</code></pre>
본 입력문은 방화벽을 설정합니다.<br>
이 외 설정은 직접 설정하시기 바랍니다.

※ 참고 사항 ※<br>
아파치2의 디폴트 도큐먼트 폴더는 /var/www/html 입니다.<br>
이 경로아래에 웹 페이지 파일을 생성하면 웹 페이지에 제공합니다.

<br>

2. Mysql 서버 설치
<pre><code>$ sudo apt install mysql-server</code></pre>
본 명령어는 Mysql을 우분투에 설치합니다.<br>
그 후 관리자 패스워드를 물어보는 창이 표시되는데 중요함으로 보안성이 높으면서 알기 좋은 비밀번호로 설정하십시오.

※ 참고 사항 ※<br>
Mysql의 root 암호는 추후 관리자 추가 등에 사용됩니다.
반드시 기억하십시오.

<br>

3. PHP 설치
<pre><code>$ sudo apt install php php-mysql</code></pre>
<pre><code>$ sudo apt install libapache2-mod-php7.0</code></pre>
<pre><code>$ sudo a2enmod php7.0</code></pre>
<pre><code>$ sudo systemctl restart apache2.service</code></pre>
본 명령어는 php을 우분투에 설치합니다.

<pre><code>$ sudo nano /var/www/html/info.php</code></pre>
본 명령어를 통해 info.php를 최상위 링크에서 엽니다.

<pre><code>&#60;?php phpinfo(); ?&#62;</code></pre>
본 명령어를 info.php에 입력하여 info.php에 php정보창을 띄웁니다.

#### 2. mysql 관리자 생성
본 단계를 통하여 각종 셀 입력용 관리자를 생성해야 서버 보안 관리에 안전합니다.<br>
본 과정에선 생성한 관리자는 추후에 생성(insert)와 삭제(delete)용도로 사용할 수 있도록 권환을 부여합니다.<br>
혹시 호스팅 업체에서 관리자 생성 권환 없이 계정 하나만을 제공할 경우 해당 계정과 비밀번호를 5단계에 입력하세요.

<pre><code>mysql -u root -p</code></pre>
본 명령어를 통해 mysql에 루트 권환으로 로그인 합니다.

<pre><code>USE mysql;</code></pre>
본 명령어를 통해 mysql의 각종 설정을 제어하는 mysql 데이터 베이스로 진입합니다.

<pre><code>CREATE user '아이디'@localhost identified by '비밀번호';</code></pre>
본 명령어를 통해 user 테이블에 아이디와 비밀번호를 가진 관리자를 생성합니다.

<pre><code>CREATE user '아이디'@'%' identified by '비밀번호';</code></pre>
본 명령어를 통해 방금 전에 생성한 관리자가 외부에서 접속할 수 있도록 설정을 변경합니다.
<br>

#### 3. mysql 테이블 생성
본 단계를 통하여 각종 정보를 업로드 할 테이블을 생성합니다.<br>
본 과정은 본 프로그램이 동작할 수 있는 배경을 제공하는 것으로 매우 중요하니 잘 따라주시기 바랍니다.<br>
<br>
※ 생성 안내 ※<br>
호스팅 업체를 통하여 서버를 제공받아 직접 mysql에 접근하기 어려운 경우 php 생성 도구에 있는 파일을<br>
호스팅 서버에 업로드 후 사용하여 생성하시기 바랍니다.<br>
(자세한 내용은 부록1을 참고하십시오.)

<pre><code>CRATE DATABASE broadcasting default CHARACTER SET UTF8;</code></pre>
본 명령어를 통해 mysql에 broadcasting이라는 이름을 가진 데이터베이스를 생성합니다.<br>
혹시 호스팅 업체에서 데이터베이스 생성 권환을 생성하지 않는 경우 기존에 생성되어 있는 데이터베이스를 사용하시기 바랍니다.

<pre><code>CRATE TABLE studentdoc (<br>
           snum INT(10),<br>
           sname VARCHAR(15),<br>
           PRIMARY KEY(snum)<br>
);</code></pre>
본 명령어를 통해 mysql에 학생 정보를 저장하는 studentdoc 테이블을 생성합니다.<br>
본 테이블에는 학생 정보가 저장됩니다. 기억하시기 바랍니다.

<pre><code>CRATE TABLE music (<br>
           number INT AUTO_INCREMENT,<br>
           name VARCHAR(50),<br>
           singer VARCHAR(50),<br>
           album VARCHAR(50),<br>
           sf VARCHAR(5),<br>
           time TIMESTAMP DEFAULT NOW(),<br>
           PRIMARY KEY(number)<br>
);</code></pre>
본 명령어를 통해 mysql에 학생들이 신청한 음악의 정보를 저장하는 music 테이블을 생성합니다.<br>
본 테이블에는 신청한 음악 정보가 저장됩니다. 기억하시기 바랍니다.

<pre><code>CRATE TABLE master (<br>
           num INT(10),
           pass VARCHAR(300),<br>
           PRIMARY KEY(num)<br>
);</code></pre>
본 명령어를 통해 mysql에 관리자 정보를 저장하는 master 테이블을 생성합니다.<br>
본 테이블에는 프로그램의 모든 기능을 관리하는 최고 관리자 등급의 유저 정보를 저장합니다.

<pre><code>CRATE TABLE board (<br>
           num INT AUTO_INCREMENT,<br>
           type VARCHAR(20),<br>
           title VARCHAR(150),<br>
           content TEXT,<br>
           PRIMARY KEY(num)<br>
);</code></pre>
본 명령어를 통해 mysql에 관리자가 작성한 글을 저장하는 board 테이블을 생성합니다.<br>
본 테이블에는 관리자가 작성한 글의 제목과 내용 등을 저장합니다.

#### 4. mysql 관리자 권환 부여
<pre><code>GRANT all privileges on broadcasting.* to id@'%' identified by 'password';</code></pre>
여기서 broadcasting에는 db 이름을, id에는 아이디를, password에는 비밀번호를 입력하시면 됩니다.

#### 5. 서버 접근을 위한 php 서버 접근 정보 수정
본 단계는 서비스가 작동하는 중요한 요소 중에 하나인 mysql 접속 정보를 수정합니다.<br>
최상위 디렉토리에 위치한 'dbinfo.php'를 알맞게 수정하시기 바랍니다.<br>
1. localhost -> 보통 가만히 두어도 되지만 에러시 127.0.0.1 등을 입력하여 보시기 바랍니다.<br>
2. db 로그인 아이디 -> 2번 항목에서 생성한 관리자의 아이디를 입력합니다.<br>
3. db 로그인 암호 -> 2번 항목에서 생성한 관리자의 암호를 입력합니다.<br>
4. db 이름 -> 3단계 테이블 생성에서 데이터베이스를 생성한 경우 broadcasting을 이외에 경우 해당 데이터베이스 이름을 입력하십시오.

#### 6. 각종 기본 기입 사항 변경
img/logo/logo.png<br>
500 X 150 사이지의 사진 파일로 변경하시기 바랍니다.<br>
본 서비스의 로고로 사용됩니다.<br><br>
order/index.html<br>
약관을 수정하시기 바랍니다.<br><br>
타이틀과 각종 안내 사항에 작성되어 있는 학교 이름을 수정하시기 바랍니다.

#### 7. 정상 작동 테스트
모든 기능들을 순차적으로 테스트하여 보시기 바랍니다.<br>
1. 학생 사용자의 입장에서 신청, 확인 가능 여부 체크<br>
2. 마스터페이지에 로그인하여 음악 신청 정보와 학생, 관리자 정보가 나오는지 체크<br>
3. 음악의 선정과 반려 처리 후 확인에서 정상 표시되는지 체크<br>
4. 학생 센터에 글 업로드 기능을 통해 정상 게시 및 확인 가능한지 체크<br>
5. 관리자, 학생 추가 가능 여부 

#### 부록1. 테이블 자동 생성 스크립트
파트 3에서 진행하는 테이블 생성이 어려우신 분들을 위한 스크립트입니다.<br>
사용 방법은 스크립트에 다음과 작성된 내용은 알맞게 수정하시기 바랍니다.<br>
<pre><code>$db_host = "localhost";<br>
$db_user = "db root 로그인 아이디";<br>
$db_passwd = "db root 로그인 패스워드";<br>
$db_name = "db 이름";<br>
</code></pre>
서버의 최상위 디렉토리(호스팅 업체가 알려주는 최상위 디렉토리)에 해당 폴더를 업로드 하신 후에<br>
<pre><code>(서버주소)/php</code></pre>
에 접속하시면 자동 생성이 가능하십니다.<br>
본 파일은 생성 후 제거하시는 것이 안전합니다.

#### 부록2. 테이블 인코딩 변경 스크립트
본 프로그램은 utf-8 환경에 최적화 되어 있음으로<br>
서버가 euckr 등을 서비스하는 경우 변경이 필요합니다.<br>
사용 방법은 부록1과 동일하여 다운로드 후 다음 내용을 알맞게 수정하시면 됩니다.<br>
<pre><code>$db_host = "localhost";<br>
$db_user = "db root 로그인 아이디";<br>
$db_passwd = "db root 로그인 패스워드";<br>
$db_name = "db 이름";<br>
</code></pre>
서버의 최상위 디렉토리(호스팅 업체가 알려주는 최상위 디렉토리)에 해당 폴더를 업로드 하신 후에<br>
<pre><code>(서버주소)/encoding</code></pre>
에 접속하시면 자동 변경이 가능하십니다.<br>
본 파일은 생성 후 제거하시는 것이 안전합니다.

#### 부록3. 테스트용 학생, 관리자 생성 스크립트
Mysql 커널에 진입하기가 어려워 직접 studentdoc, master 테이블에 테스트용 정보를<br>
기입하기 어려운 경우 학생, 관리자 생성 스크립트를 통해 자동 생성하십시오.<br>
방법은 부록1과 동일하게 각 스크립트의 최 상단에 적힌 다음과 같은 내용을 각 서버에 맞게<br>
수정하여 주시면 됩니다.
<pre><code>$db_host = "localhost";<br>
$db_user = "db root 로그인 아이디";<br>
$db_passwd = "db root 로그인 패스워드";<br>
$db_name = "db 이름";<br>
</code></pre>
서버의 최상위 디렉토리(호스팅 업체가 알려주는 최상위 디렉토리)에 해당 폴더를 업로드 하신 후에<br>
<pre><code>(서버주소)/testuser</code></pre>
에 접속하시면 자동 생성이 가능하십니다.<br>
본 파일은 생성 후 제거하시는 것이 안전합니다.

<hr/>

## 본 서비스를 제작하기 위하여...
본 '본 서비스를 제작하기 위하여...'에는 본 서비스를 제작하는데 사용된 모든 프로그래밍 코드와,<br>
서버 파일등을 담고 있습니다.<br>

### 프로그래밍 코드
<strong>! 본 내용은 깃허브 상단에 표시되는 프로그래밍 코드 비율에서도 확인하실 수 있습니다.</strong><br>
본 서비스를 제작하기 위해서는 다음과 같은 프로그래밍 코드가 사용되었습니다. (일부는 마크업 코드입니다.)<br>
1. HTML - 각종 정적인 페이지를 구성하기 위하여 사용되었습니다.<br>
2. CSS - HTML와 php 파일의 디자인을 위하여 사용되었습니다.<br>
3. php - 동적인 페이지나 서버로 전송하기 위하여 사용되었습니다.

### 프로그래밍시 사용된 환경
본 서비스를 제작하는데 사용된 환경은 다음과 같습니다.<br>
1. 웹서버 - 아파치<br>
2. 코딩 - 비쥬얼 스튜디오 코드<br>
3. Mysql - Mysql 4.8.4<br>
4. WAMP - Bitnami

<hr/>

## 본 서비스의 라이선스...
본 서비스의 라이선스는 다음과 같습니다.

### 라이선스 정보
<strong>CCL BY-NC-SA (크리에이티브 커먼즈 라이선스)</strong><br><br>
![b06](https://user-images.githubusercontent.com/23215270/54754020-ddc9c680-4c25-11e9-8d68-1ee357cd1a36.jpg)<br>
본 사진의 저작권은 CCKOREA의 것입니다.<br><br>
1. 저작자와 출처 등과 같은 저작자를 알 수 있는 정보를 게시하면 아래와 같은 사용이 가능합니다.<br>
2. 본 저작물의 변경이 가능합니다.<br>
3. 2차적 저작물의 작성을 포함한 자유 이용을 허락합니다.<br>
4. 영리적 이용을 허락하지 않습니다.<br>
5. 2차적 저작물은 본 CCL BY-NC-SA 라이선스를 적용하여야 합니다.

### 저작권 연락처
E-Mail : joongi1978@naver.com
