<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$fio = urldecode($fio);
$email = urldecode($phone);
$fio = trim($fio);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $phone;
if (mail("lopesdenis@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone ,"From: mimisushi@h303859220.nichost.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>