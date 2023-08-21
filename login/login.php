<?php

  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( 'localhost', 'web', 'web1324', 'member_management' );
    $jb_sql = "SELECT password FROM member WHERE username = '" . $username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'password' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( password_verify( $password, $encrypted_password ) ) {
        session_start();
        $_SESSION[ 'username' ] = $username;
        header( 'Location: login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
?>
<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">

    <title>로그인</title>
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

    input[type=password] {
        font-family: "sans-serif";
    }

    ::placeholder {
        font-family: 'Binggrae-Two';
        opacity: 1;
    }
    </style>
</head>

<body>
    <link rel="stylesheet" href="../src/login_style.css" />

    <div class="user">

        <header class="user__header">
            <img src="../video/basketball-unscreen.gif" alt="" />
            <h1 class="user__title">로그인</h1>
        </header>
        <form class="form" action="login.php" method="POST">
            <div class="form__group">
                <p><input type="text" name="username" placeholder="아이디" required></p>
            </div>
            <div class="form__group">
                <p><input type="password" name="password" placeholder="비밀번호" required></p>
            </div>
            <p><input type="submit" value="로그인" class='regist' style="cursor:pointer"></p>
            <p><input type="button" value="회원 가입" class='regist1' onclick="location.href='register.php'"
                    style="cursor:pointer"></p>
            <p><input type="button" value="뒤로가기" onclick="history.go(-1)" class='regist' style="cursor:pointer"
                    style="background-color:lightgray"></p>
            <?php
        if ( $wu == 1 ) {
            echo "<p>아이디가 존재하지 않습니다.</p>";
          }
          if ( $wp == 1 ) {
            echo "<p>비밀번호가 틀렸습니다.</p>";
          }
            ?>

        </form>

    </div>

</body>


</html>