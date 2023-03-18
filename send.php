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
if (mail("ortik.umida82@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone ,"From: mimi@mimi-sushi.space \r\n"))
 {     echo "<p style='font-size: 55px;'>сообщение успешно отправлено </p>"; 
      
echo "<p style='text-align:center;'><button style='width:600px;height:200px;font-size:55px;'><a href='https://mimi-sushi.space'>Вернуться на сайт</a></button></p>";
} else { 
    echo "<p style='font-size: 55px;'>при отправке сообщения возникли ошибки</p>";
}?>