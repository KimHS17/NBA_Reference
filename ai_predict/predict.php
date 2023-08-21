<?php include("../header.php");?>
<link rel="stylesheet" href="src/style.css" />
<title>AI 승부예측</title>
<?php
//현재 페이지 URL을 만듭니다.
//아래 결과 : /board/write.php?page=
$rurl = urlencode($_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
if(isset($_SESSION['username'])== false) {
  //로그인이 안된경우 로그인 페이지 이동
  echo "<script>location.href='https://dev-hs.kro.kr/login/login.php?rurl=$rurl';</script>";
  
}
?>
<?php 
$date = date("Y-m-d"); 
$one = date("Y-m-d", strtotime("+1 day", strtotime($date)));
$two = date("Y-m-d", strtotime("+1 day", strtotime($one)));
$three = date("Y-m-d", strtotime("+1 day", strtotime($two)));  
?>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>

    <div id="clock">
        <p class="date"></p>
        <p class="time"></p>
        <p class="follow">예측이 궁금한 날짜를 클릭하세요</p>
        <?php 
            echo "<button class='btn-hover color-8' onClick='location.href=`prediction/oneday.php`'>$one</button>";
            echo "<button class='btn-hover color-8'onClick='location.href=`prediction/twoday.php`'>$two</button>";
            echo "<button class='btn-hover color-8'onClick='location.href=`prediction/threeday.php`'>$three</button>";
        ?>
        <p class="follow">로지스틱 회귀 모델을 이용한 AI 머신러닝 기법을 이용합니다</p>
    </div>

    <script type="text/javascript" src="src/main.js"></script>


</body>