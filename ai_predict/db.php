<?php

	$connect = mysqli_connect ('localhost', 'web', 'web1324');   
	mysqli_select_db ($connect, 'predict_22_23');          // 질의 수행

	/* ---------- 한글 깨짐 방지 코드 -----------------*/ 
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

	
?>