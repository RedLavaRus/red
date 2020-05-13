<?php
$fon_nam = rand(1,7);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $seo['title'];?></title>
    <meta name="description" content="<?php echo $seo['desk'];?>"> 
    <meta name="Keywords" content="<?php echo $seo['keyw'];?>"> 
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .line1{
            background: url("/thems/img/fon/fon<?php  echo $fon_nam;?>.png") no-repeat;
            background-size: cover, cover;
        }

    </style>
</head>

<body>


    <?php include CFG::adres()."resources/box/header.php"; ?>
    
    
    


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