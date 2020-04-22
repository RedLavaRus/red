<?php
$fon_nam = rand(1,7);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <style>
        .line1{
            background: url("/thems/img/fon/fon<?php  echo $fon_nam;?>.png") no-repeat;
            background-size: cover, cover;
        }

    </style>
</head>

<body>

<div class="line1">
    <div class="line1_head_menu">
        <div class="line1_head_menu_logo"><a href="/">SkyVoxel</a></div>
        <div class="line1_head_menu_logo1"><a href="/shop/">Магазин</a></div>
        <div class="line1_head_menu_logo1"><a href="/servers/">Сервера</a></div>
        <div class="line1_head_menu_logo1"><a href="/trade/">Рынок</a></div>
        <div class="line1_head_menu_logo1"><a href="/banlist/">Бан лист</a></div>
        <div class="line1_head_menu_auth">
            <img src="/profile/avatar/default.jpeg" class="ava_l1" alt="avatarka">
            <div class="line1_head_menu_auth_text">

                Вы вошли как,<br>
                Логин<br>
                <div class="line1_head_menu_auth_text_1">Личный кабинет</div>
            </div>
        </div>
    </div>
    
    <div class="name_projekt_innmain">SkyVoxel</div>
    <div class="name_projekt_innmain_d">Мир в котором можно повеселиться!</div>
    <a href="/start/"><div class="name_projekt_innmain_b">Начать игру</div></a>
    
</div>
<div class="line_box"></div>

<?php echo $content ?>

<div class="line5"><br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <div class="footer_block">
            <div class="footer_block_left">
                2020 © SkyVoxel<br>
                Все права защещены.<br>
                Полное или частичное копирование запрещено.<br><br><br><br><br><br><br><br><br><br><br>
                Мы предоставляем ознакомительный<br>
                бесплатный вариант игры Minecraft<br>
                купить лицензионную версию игры можно здесь.<br>
            </div>
            <div class="footer_block_right">
                Главная<br>
                Магазин<br>
                Сервера<br>
                Рынок<br>
                Бан лист<br>
                <br>
                Личный кабинет<br>
                Регистрация<br>
                Авторизация<br>
            </div>
        </div>
    </div>
</div>

</body>
</html>