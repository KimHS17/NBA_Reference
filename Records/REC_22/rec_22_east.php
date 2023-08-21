<link rel="stylesheet" href="../src/rec_style.css" />
<?php include("../../header.php");?>
<?php include("rec_22_menu.php");?>
<?php

	$connect = mysqli_connect ('localhost', 'web', 'web1324');   
	mysqli_select_db ($connect, 'rec_22_23');          // 질의 수행

	/* ---------- 한글 깨짐 방지 코드 -----------------*/
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

	$sql = "select *from east";                      // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);          // 질의 수행
	$count = mysqli_num_fields ($result);             // 필드의 개수 구하기
?>
<div class="personal" style="margin-bottom: 20px; 
color: white; font-size: 16pt; font-weight: bold;">
    동부 컨퍼런스 팀 순위</div>
<table>
    <thead>
        <tr>
            <th><B> 순위 </B></th>
            <th><B> 팀 </B></th>
            <th><B> 디비전 </B></th>
            <th><B> 경기수 </B></th>
            <th><B> 승 </B></th>
            <th><B> 패 </B></th>
            <th><B> 승률 </B></th>
            <th><B> 승차 </B></th>
            <th><B> 홈승 </B></th>
            <th><B> 홈패</B></th>
            <th><B> 원정승</B></th>
            <th><B> 원정패</B></th>
            <th><B> 디비전승</B></th>
            <th><B> 디비전패 </B></th>
            <th><B> 연속</B></th>
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
<div class="personal" style="margin-top: 50px; margin-bottom: 20px; 
color: white; font-size: 16pt; font-weight: bold;">
    NBA 개인별 순위</div>
<?php include('rec_22_player.php');?>