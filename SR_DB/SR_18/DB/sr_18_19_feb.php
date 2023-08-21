<link rel="stylesheet" href="../../src/SR.css" />
<?php include("../../../header.php");?>
<?php include("../sr_18menu.php");?>
<?php

	$connect = mysqli_connect ('localhost', 'web', 'web1324');   
	mysqli_select_db ($connect, 'nba_18_19');          // 질의 수행

	/* ---------- 한글 깨짐 방지 코드 -----------------*/ 
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

	$sql = "select *from feb";                      // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);          // 질의 수행
	$count = mysqli_num_fields ($result);             // 필드의 개수 구하기
?>

<table>
    <thead>
        <tr>
            <th><B> 날짜 </B></th>
            <th><B> 시간 </B></th>
            <th><B> 홈팀 </B></th>
            <th><B> 점수 </B></th>
            <th><B> 원정팀 </B></th>
            <th><B> 구장 </B></th>
        </tr>
    </thead>
</table>
<div class="tbl-content">
    <table>
        <?php
			while ($rows=mysqli_fetch_row($result))     // 레코드의 개수만큼 반복
			{
				echo "<tr>";
				for ($a = 0; $a < $count; $a++)          // 필드의 수만큼 반복
				{
					echo "<td> $rows[$a] </td>";
				}
				echo "</tr>";
			}
		?>
    </table>
</div>