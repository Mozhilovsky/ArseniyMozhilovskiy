<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$token = "5045221347:AAHb9nvaHpG9_HZcvQaXMYzi69cgmGwURLQ";
$chat_id = "-668351238";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  
}

{
$email="gadalkasp@yandex.ru"; // ----------------------------------------- почта, куда отправляем письмо
$headers  =  'MIME-Version: 1.0' . "\r\n";
$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .=  'From: zakaz@'.$_SERVER['HTTP_HOST'] . "\r\n"; // ---------------------- адрес отправителя, это заголовок письма, менять не обязательно
$subject    = "[Новый заказ] "; // ----------------------------------------- тема письма
$message    = "
<b>Клиент:</b>
<br>Имя: ".$Name."
<br>Телефон: ".$Phone."

<hr>
<br>Ссылка: ".@$_SERVER['HTTP_REFERER']."
<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
";
$mail=mail($email, $subject, $message, $headers);
if($mail==true){
?>
<html><center>
<img src="/spasibo.png" alt="" >
</center>

<meta http-equiv='refresh' content='5; url=/'>



</html>
<?
}else{
    echo "no";
}
}