<?php
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
    <title>비밀번호 변경</title>
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
</head>

<body>
    <h1><?php echo $session_username; ?>님, 비밀번호가 변경되었습니다.</h1>
</body>

</html>