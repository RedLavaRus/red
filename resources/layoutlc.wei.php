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
    <style>
        .line1{
            background: url("/thems/img/fon/fon<?php  echo $fon_nam;?>.png") no-repeat;
            background-size: cover, cover;
        }

    </style>
</head>

<body>

<div class="line1_lc">
    <?php include CFG::adres()."resources/box/header.php"; ?>
    
    
    
</div>
<div class="lc_box">
    <div class="lc_box_menu">
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Основное</div>
        <div class="lc_box_menu_element">Скин и плащ</div>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Инвентарь частей</div>
        <div class="lc_box_menu_element">Инвентарь монет</div>

        <?php
        $num_times = 1;
        include CFG::adres()."/function/McServerConfig.php";
        foreach($Servers_config as $item)
        {
            echo '<div class="lc_box_menu_element">'.'<a href="/lc/inventar/s'.$num_times.'">Инвентарь сервера '.$item[0].'</a></div>';
            $num_times++;
        }
        unset($num_times);
        ?>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Тех.поддержка</div>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Прокачка</div>
        <div class="lc_box_menu_element">Фермы</div>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Выход</div>
    </div>
    <div class="lc_box_mine"><?php echo $content; ?></div>
</div>


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