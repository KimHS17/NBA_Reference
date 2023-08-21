<?php include("header.php"); ?>
<link rel="stylesheet" href="src/news_style.css" />
<script type=text/javascript>
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({
        'padding-right': scrollWidth
    });
}).resize();
</script>
<?php //네이버 뉴스 API로 가져오기
  $client_id = "xRHUYe4fZm2h3lKr9pvA";
  $client_secret = "1y7v_cZSV6";
  $encText = urlencode("NBA");
  $url = "https://openapi.naver.com/v1/search/news?query=".$encText."&sort=sim"."&display=30"; // json 결과
  $is_post = false;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close ($ch);
  echo
  "<div class='tbl-header'>
  <table class='tbl-h'>
    <thead>
      <tr>
        <th class='list'>순서</th>
        <th class='title-h'>제목</th>
        <th class='content-h'>내용</th>
      </tr>
    </thead>
  </table>
</div>";
  echo "<div class='tbl-content'><table class='news'>";
  if($status_code == 200) {
    $result = json_decode($response, true);
    $count=0;
    $total = $result['total'];
    while($count<30){
      $temp = "<tr><td class='num'>";
      $temp = $temp.$count+1;
      $link = $result['items'][$count]['link'];//제목에 링크걸기
      $temp = $temp."</td><td class='title' onClick=\"window.open('$link','','')\"style=\"cursor:pointer\">";
      $temp = $temp.$result['items'][$count]['title'];
      $temp = $temp."</td><td>";
      $temp = $temp.$result['items'][$count]['description'];
      $temp = $temp."</td></tr>";
      echo $temp;
      $count++;
    }
  }
  echo "</table></div>";
?>
<title>News</title>