<?php
  $prevPage = $_SERVER['HTTP_REFERER'];
  session_start();
  $session_username = $_SESSION[ 'username' ];
  if ( is_null( $session_username ) ) {
    header( 'Location: login.php' );
  }
?>
<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <style>
    body {
        font-family: sans-serif;
        font-size: 14px;
    }

    input,
    button {
        font-family: inherit;
        font-size: inherit;
    }
    </style>
    <script>

    </script>
</head>

<body>
    <!-- <h1><?php echo $session_username; ?>님, 로그인 하셨습니다.</h1> -->
    <?php
      $st = "https://dev-hs.kro.kr/login/login.php?rurl=%2Fcommunity%2Fcommunity.php%3F";
      $st2 = "https://dev-hs.kro.kr/login/login.php?rurl=%2Fai_predict%2Fpredict.php%3F";
      $st3 = "https://dev-hs.kro.kr/login/login.php";
      if($prevPage == $st)
        echo "<script>location.href='https://dev-hs.kro.kr/community/community.php';</script>";
      else if($prevPage == $st2)
        echo "<script>location.href='https://dev-hs.kro.kr/ai_predict/predict.php';</script>";
      else if($prevPage == $st3)
        echo '<script>history.go(-4);</script>';
      else
        echo '<script>history.go(-2);</script>';
    ?>
</body>

</html>