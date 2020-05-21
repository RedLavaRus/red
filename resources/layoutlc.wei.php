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

<div class="line1_lc">
    <?php include CFG::adres()."resources/box/header.php"; ?>
    
    
    
</div>
<div class="lc_box">
    <div class="lc_box_menu">
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element"><a href="/lc/">Основное</a></div>
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
        <div class="lc_box_menu_element"><a href="/lc/support">Тех.поддержка</a></div>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Прокачка</div>
        <div class="lc_box_menu_element">Фермы</div>
        <div class="lc_box_menu_el1"> </div>
        <div class="lc_box_menu_element">Выход</div>
    </div>
    <div class="lc_box_mine"><?php echo $content; ?></div>
</div>

<?php include CFG::adres()."resources/box/footer.php"; ?>


</body>
</html>