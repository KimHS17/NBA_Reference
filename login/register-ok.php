<!doctype html>
<html lang="ko">
<link rel="stylesheet" href="../src/login_style.css" />

<head>
    <meta charset="utf-8">
    <title>회원 가입</title>
    <style>
    body {
        font-family: sans-serif;
        font-size: 14px;
    }

    button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 30px;
        font-weight: bold;
        width: 500px;
        text-align: center;
        background: linear-gradient(45deg, #d53369 10%, #cbad6d 90%);
    }

    p {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>
</head>

<body>
    <button class="button" onClick="location.href='https://dev-hs.kro.kr/login/login.php' " style="cursor:pointer">회원
        가입이
        완료되었습니다.</button>
    <p>위 버튼을 클릭하면 로그인 화면으로 이동합니다.</p>
</body>

</html>