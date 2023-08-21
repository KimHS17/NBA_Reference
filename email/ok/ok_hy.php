<?php 
$username = $_POST['name'];


$to ="hyj78396@naver.com";// 받는사람
$title = $_POST['title'];
$title_encode = "=?utf-8?B?".base64_encode($title)."?=\n"; //제목 인코딩

$contents = $_POST['content'];

$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; //헤더인코딩
$headers .= "From: $username\r\n"; //보내는 사람

$send_mail = mail($to, $title_encode, $contents, $headers); //메일보내기

if($send_mail){
    echo "<script>
    alert('메일을 성공적으로 보냈습니다.');
    location.href='../../contact.php';</script>";
}else{
    echo "<script>
    alert('메일 발송에 실패했습니다.');
    history.back();</script>";
}

?>