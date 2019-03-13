**본 프로그램에 적힌 학교 명이나 규칙은 모두 사실과 다릅니다.**

# 점심시간 음악 신청 
> 이것이 기존의 페이스북 정리 스트레스를 줄일것입니다.

점심시간에 음악을 틀어주는 경우 원하시는 음악을 신청할 수 있도록 제공해줍니다.<br>
제작자는 고창중학교 1학년 학생으로, 본 서비스의 저작권은 별로 신경쓰지 않습니다.

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
※ 본 설치는 직접 서버 설치가 아닌, 호스팅 업체를 통한 서버 설치일 경우 필요 없습니다. ※
※ 본 설치 방법은 우분투 서버 기준으로, 타 서버 OS이거나 버전에 따라 상이할 수 있습니다. ※
※ 본 설치 과정은 모두 우분투의 터미널 기반으로 진행됩니다. 어려울 경우 대행사를 이용하십시오. ※

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

<pre><code><?php phpinfo(); ?></code></pre>
본 명령어를 info.php에 입력하여 info.php에 php정보창을 띄웁니다.

#### 2. mysql 관리자 생성
본 단계를 통하여 각종 셀 입력용 관리자를 생성해야 서버 보안 관리에 안전합니다.<br>
본 과정에선 생성한 입력(insert) 권환 관리자와 출력(select) 관한 관리자를 추후 4단계에서 권환을 제공합니다.

<pre><code>mysql -u root -p</code></pre>
본 명령어를 통해 mysql에 루트 권환으로 로그인 합니다.

<pre><code>USE mysql;</code></pre>
본 명령어를 통해 mysql의 각종 설정을 제어하는 mysql 데이터 베이스로 진입합니다.

<pre><code>CREATE user '아이디'@localhost identified by '비밀번호';</code></pre>
본 명령어를 통해 user 테이블에 아이디와 비밀번호를 가진 관리자를 생성합니다.

<pre><code>CREATE user '아이디'@% identified by '비밀번호';</code></pre>
본 명령어를 통해 방금 전에 생성한 관리자가 외부에서 접속할 수 있도록 설정을 변경합니다.
