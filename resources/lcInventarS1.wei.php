<?php

include CFG::adres()."/function/McServerConfig.php";

$invMasterArray = Inventar::ShowServerItem(1);
$contentItemsShow ='';
foreach($invMasterArray as $invMasteritem)
{
$timed_x = '<div class="lc_inventar_item" id="rar'.$invMasteritem['rar'].'">';
$timed_x1 = '<img src="/img/items/'.$invMasteritem['gl_id'].'.png">';
$timed_x2 = '<div class="lc_inventar_item_kol">'.$invMasteritem['collich'].'</div></div>';
$contentItemsShow = $contentItemsShow .$timed_x.$timed_x1.$timed_x2;
}

//$ttt=$_SESSION['id'];//3
$content = '
 <h3 class="lc_head_h3"> Инвентарь сервера '.$Servers_config[0][0].'</h3>
<div class="lc_inventar">
'.$contentItemsShow.'
</div>



';
?>