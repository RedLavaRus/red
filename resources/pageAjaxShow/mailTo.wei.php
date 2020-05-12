<?php
Auth::chek();
$echo_mass="Письмо отправлено, проверьте почту!";
$mail_user=$_POST['mail'];
$text_mas="
Вы попытались активировать учетную запись.
Если это сделали вы, то перейдите по ссылке!

".MailGeneatorUrl::gen('',$mail_user)."
Если это действие делали не вы, то просто проигнорируйте это письмо.
";
$mailSMTP = new MailSmtp(CFG::mailAdres(), CFG::mailPass(), 'ssl://smtp.yandex.ru', 465, "UTF-8");
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'порт', 'кодировка письма');


// от кого
$from = array(
    CFG::mailName(), // Имя отправителя
    CFG::mailAdres() // почта отправителя
);
// кому отправка. Можно указывать несколько получателей через запятую
$to = $mail_user;


// отправляем письмо
$result = $mailSMTP->send($to, 'Подтверждение почты на проекте SkyVoxel', $text_mas, $from); 
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Отправитель письма');

if($result === true){
    echo '
    <div class="action_fon_100x100_b9" id="shadA1">
      <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
      </div>
    </div>


';
}else{
    $echo_mass = "Error: " . $result;
    echo '
    <div class="action_fon_100x100_b9" id="shadA1">
      <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
      </div>
    </div>


';
}

?>