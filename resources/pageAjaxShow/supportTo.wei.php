<?php

Auth::chek();
if(!isset($_POST['types']) or $_POST['types'] == ''){ echo "Ошибка!"; exit();}
if(!isset($_POST['text']) or $_POST['text'] == ''){ echo "Ошибка!"; exit();}
if(!isset($_POST['contact']) or $_POST['contact'] == ''){ echo "Ошибка!"; exit();}
/*
сгенерировать дату

проверить если ли заявки от пользователя за 1 не превышен ли лимит
Проверить файл
если все ок, сохранить фаил 
создать заявку


*/

$massg ='';
$col_day = CFG::sizeZDinDay();
$today = date("m.d.y"); 
$res = Functions::showInsupport($today,$col_day);
if($res == 'full')
{ 
    $massg =  "Превышен лимит заявок в день! Приходите завтра, в день доступно создание ".$col_day." заявок"; 
    echo '
<div class="action_fon_100x100_b9" id="shadA1">
  <div class="action_windows1" id="shadA">
<h3>';
echo $massg;
echo '</h3>
  </div>
</div>';    
    exit();
}
$filename= rand(1,99999);
$filename=md5($filename);
$upload_folder = "update/zd";

$valid_extensions = array('gif', 'jpg', 'png','bmp'); 

if(!$image_info = Functions::validFile($_FILES['inputfile']['tmp_name']) or !in_array($image_info['extension'], $valid_extensions))
{
    $massg =  "Ошибка, загрузите файл следующих расширений: ".'gif, jpg, png,bmp' ; 
    echo '
<div class="action_fon_100x100_b9" id="shadA1">
  <div class="action_windows1" id="shadA">
<h3>';
echo $massg;
echo '</h3>
  </div>
</div>';    
    exit();
}
else
{
   
    $upload_file_name = uniqid(NULL, true).'.'.$image_info['extension']; 
    if(!@move_uploaded_file($_FILES['inputfile']['tmp_name'],CFG::adres().'public/'.$upload_folder.'/'.$filename.'.'.$image_info['extension'])); 
}
$type_zd=$_POST["types"] ;
$text=$_POST["text"] ;
$contacts=$_POST["contact"] ;
$filename=$filename.'.'.$image_info['extension'];
Functions::createSuppordZD($today,$type_zd,$text,$contacts,$filename);
$massg =  "Заявка успешно созданна!" ; 
echo '
<div class="action_fon_100x100_b9" id="shadA1">
<div class="action_windows1" id="shadA">
<h3>';
echo $massg;
echo '</h3>
</div>
</div>';    
exit();
?>