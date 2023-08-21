<?php
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  $password_confirm = $_POST[ 'password_confirm' ];

  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( 'localhost', 'web', 'web1324', 'member_management' );
    $jb_sql = "SELECT username FROM member WHERE username = '$username';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $username_e = $jb_row[ 'username' ];
    }
    if ( $username == $username_e ) {
      $wu = 1;
    } elseif ( $password != $password_confirm ) {
      $wp = 1;
    } else {
      
      $encrypted_password = password_hash( $password, PASSWORD_DEFAULT);
      $jb_sql_add_user = "INSERT INTO member ( username, password) VALUES ( '$username', '$encrypted_password');";
      mysqli_query( $jb_conn, $jb_sql_add_user );
      
      header( 'Location: register-ok.php' );
      }
}
?>
<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>회원 가입</title>
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
<script type=text/javascript src=../src/regist_main.js></script>
<link rel="stylesheet" href="../src/login_style.css" />

<body>
    <div class="user">
        <header class="user__header">
            <img src="../video/basketball-unscreen.gif" alt="" />
            <h1 class="user__title">회원 가입</h1>
        </header>
        <form class="form" action="register.php" method="POST" name="regiform" id="regist_form"
            onsubmit="return sendit()">
            <div class="form__group">
                <p><input type="text" name="username" placeholder="아이디" required></p>
            </div>
            <div class="form__group">
                <p><input type="password" name="password" placeholder="비밀번호" required></p>
            </div>
            <div class="form__group">
                <p><input type="password" name="password_confirm" placeholder="비밀번호 확인" required></p>
            </div>
            <p><input type="submit" value="회원 가입" class="regist1" style="cursor:pointer"></p>
            <p><input type="button" value="뒤로가기" onclick="history.go(-1)" class='regist' style="cursor:pointer"
                    style="background-color:lightgray"></p>
            <?php
        if ( $wu == 1 ) {
          echo "<p>아이디가 중복되었습니다.</p>";
        }
        if ( $wp == 1 ) {
          echo "<p>비밀번호가 일치하지 않습니다.</p>";
        }
      ?>
        </form>
    </div>
</body>

</html>