<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <title><?php echo $seo['title'];?></title>
    <meta name="description" content="<?php echo $seo['desk'];?>"> 
    <meta name="Keywords" content="<?php echo $seo['keyw'];?>"> 
</head>
<body>
<div class="line1">
<?php include CFG::adres()."resources/box/header.php"; ?>
    
    <?php echo $content;?>
    
</div>
</body>
</html>
<?php exit;?>