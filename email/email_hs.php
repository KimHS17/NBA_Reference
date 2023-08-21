<?php include("../header.php");?>
<!doctype html>
<title>Email</title>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../community/src/style.css" />
</head>

<body>
    <div id="board_write">
        <h1>Message</h1>
        <h4>개발자에게 이메일을 보내는 공간입니다.</h4>
        <div id="write_area">
            <form action="ok/ok_hs.php" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100"
                        required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="보낸 이(이메일 형식)" maxlength="100"
                        required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                </div>
                <div class="bt_se">
                    <input type="submit" value="보내기">
                </div>
            </form>
        </div>
    </div>
</body>

</html>