<?php
Auth::chek();
$mail_user=$_POST['mail'];
$text_mas="Ghbdtn!";
$mailSMTP = new MailSmtp('ya@ya.ru', '****', 'ssl://smtp.yandex.ru', 465, "UTF-8");
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'порт', 'кодировка письма');


// от кого
$from = array(
    "myName", // Имя отправителя
    "ya@ya.ru" // почта отправителя
);
// кому отправка. Можно указывать несколько получателей через запятую
$to = $mail_user;


// отправляем письмо
$result =  $mailSMTP->send($to, 'Подтверждение почты на проекте SkyVoxel', $text_mas, $from); 
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Отправитель письма');

if($result === true){
    echo "Done";
}else{
    echo "Error: " . $result;
}

?>