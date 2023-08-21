<?php
	include "db.php";
	
	$bno = $_GET['idx'];
	$sql3 = mq("select * from board where idx='$bno';");
	$sql = mq("delete from board where idx='$bno';");
	$mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
    $mq2= mq("SET @COUNT = 0");
    $mq3 = mq("UPDATE board SET idx = @COUNT:=@COUNT+1"); ?>
<script type="text/javascript">
alert("삭제되었습니다.");
</script>
<meta http-equiv="refresh" content="0 url=community.php" />