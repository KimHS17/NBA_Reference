<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>
<?php
  session_start();
  $session_username = $_SESSION[ 'username' ];
?>


<body>
    <style>
    @font-face {
        font-family: "Good-Brush";
        src: url("https://dev-hs.kro.kr/src/Good-Brush.woff") format("woff");
    }

    @font-face {
        font-family: 'Binggrae-Two';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_one@1.0/Binggrae-Bold.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    table {
        margin: 20px;
    }

    .topnav {
        /* overflow: hidden; */
        background-color: white;

        position: sticky;
        top: 0;
        min-height: 48px;
        font-family: Binggrae-Two;
    }

    .topnav a {
        list-style-type: none;
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .active {
        background-color: #04aa6d;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    .dropdown {
        float: left;
    }

    .dropdown .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        /* color: gray; */
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 10000000;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    #login {
        float: right;
    }

    @media screen and (max-width: 600px) {

        .topnav a:not(:first-child),
        .dropdown .dropbtn {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive .dropdown {
            float: none;
        }

        .topnav.responsive .dropdown-content {
            position: relative;
        }

        .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }

        .style-1 {
            margin: auto;
            font-family: "Good-Brush";
        }
    }
    </style>


    <div id="container">
        <h1 class="style-1" style="
    font-family: Good-Brush;">NBA Reference</h1>
    </div>

    <div class="topnav" id="myTopnav" style=" z-index: 2;">
        <a href="https://dev-hs.kro.kr/home.php">홈</a>
        <a href="https://dev-hs.kro.kr/news.php">최신뉴스</a>
        <a href="https://dev-hs.kro.kr/community/community.php">자유게시판</a>
        <div class="dropdown">
            <button class="dropbtn">2018-19
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://dev-hs.kro.kr/SR_DB/SR_18/sr_18home.php">일정/결과</a>
                <a href="https://dev-hs.kro.kr/Records/REC_18/rec_18_east.php">기록/순위</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">2019-20
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://dev-hs.kro.kr/SR_DB/SR_19/sr_19home.php">일정/결과</a>
                <a href="https://dev-hs.kro.kr/Records/REC_19/rec_19_east.php">기록/순위</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">2020-21
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://dev-hs.kro.kr/SR_DB/SR_20/sr_20home.php">일정/결과</a>
                <a href="https://dev-hs.kro.kr/Records/REC_20/rec_20_east.php">기록/순위</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">2021-22
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://dev-hs.kro.kr/SR_DB/SR_21/sr_21home.php">일정/결과</a>
                <a href="https://dev-hs.kro.kr/Records/REC_21/rec_21_east.php">기록/순위</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">2022-23
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://dev-hs.kro.kr/SR_DB/SR_22/sr_22home.php">일정/결과</a>
                <a href="https://dev-hs.kro.kr/Records/REC_22/rec_22_east.php">기록/순위</a>
            </div>
        </div>

        <a href="https://dev-hs.kro.kr/ai_predict/predict.php">승부예측</a>
        <a href="https://dev-hs.kro.kr/contact.php">Contact</a>

        <div id="login">
            <a id=lgnBtn href="https://dev-hs.kro.kr/login/login.php"> 로그인 </a>
            <a id=regBtn href="https://dev-hs.kro.kr/login/register.php"> 회원가입 </a>
        </div>

    </div>

    <br>

    <script>
    <?php
        echo "var newname = '$session_username';"
    ?>
    if ((newname.length)) {
        let name = document.getElementById('lgnBtn');
        name.innerHTML = newname + "님";
        name.href = "#";
        let logout = document.getElementById('regBtn');
        logout.innerHTML = '로그아웃';
        logout.href = "https://dev-hs.kro.kr/login/logout.php";
    }
    </script>