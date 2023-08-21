<?php
include "db.php";
$bno = $_GET['idx'];
$sql = mq("select * from board where idx='$bno';");
$board = $sql->fetch_array();

$pwk = $_POST['pw'];
$bpw = $board['pw'];

$bno = $_GET['idx'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
if(password_verify($pwk, $bpw)){
$sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>

<script type="text/javascript">
alert("게시글이 수정되었습니다.");
</script>
<meta http-equiv="refresh" content="0 url=read.php?idx=<?php echo $bno; ?>">
<?php
}

else{ ?>
<script type="text/javascript">
alert("비밀번호가 틀립니다.");
history.back();
</script>
<?php } ?>