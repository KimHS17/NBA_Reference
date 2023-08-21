<?php

	$connect = mysqli_connect ('localhost', 'web', 'web1324');   
	mysqli_select_db ($connect, 'rec_19_20');          // 질의 수행

	/* ---------- 한글 깨짐 방지 코드 -----------------*/
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

	$sql = "select *from player";                      // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);          // 질의 수행
	$count = mysqli_num_fields ($result);             // 필드의 개수 구하기
?>


<table>
    <thead>
        <tr>
            <th><B> 순위 </B></th>
            <th><B> 선수 </B></th>
            <th><B> 경기수 </B></th>
            <th><B> 득점 </B></th>
            <th><B> 어시스트</B></th>
            <th><B> 리바운드</B></th>
            <th><B> 스틸</B></th>
            <th><B> 블락슛 </B></th>
            <th><B> 야투 </B></th>
            <th><B> 3점슛</B></th>
            <th><B> 자유투</B></th>
            <th><B> 야투성공률</B></th>
            <th><B> 3점슛성공률</B></th>
            <th><B> 자유투성공률 </B></th>
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
					echo "<td class='$a'> $rows[$a] </td>";
				}
            
				echo "</tr>";
			}
		?>
    </table>
</div>
<div style="margin:50px;">&nbsp;</div>