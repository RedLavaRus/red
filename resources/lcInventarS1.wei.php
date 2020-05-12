<?php

include CFG::adres()."/function/McServerConfig.php";
$ajaxEcho="<script>
$(document).ready(function(){
";
$invMasterArray = Inventar::ShowServerItem(1);
$contentItemsShow ='';
foreach($invMasterArray as $invMasteritem)
{
$timed_x = '<a  id="sen'.$invMasteritem['id_item_inventar'].'"><div class="lc_inventar_item" id="rar'.$invMasteritem['rar'].'">' ;
$timed_x1 = '<img src="/img/items/'.$invMasteritem['gl_id'].'.png">';
$timed_x2 = '<div class="lc_inventar_item_kol">'.$invMasteritem['collich'].'</div></div></a>';
$contentItemsShow = $contentItemsShow .$timed_x.$timed_x1.$timed_x2;

$ajaxEcho=$ajaxEcho."
$('#sen".$invMasteritem['id_item_inventar']."').click(function(){  
    $.ajax({  
        url:'/function/ShowMesActionInventar?class=action&id=".$invMasteritem['id_item_inventar']."&img=".$invMasteritem['gl_id']."&name=".$invMasteritem['gl_name']."&coll=".$invMasteritem['collich']."&idr=".$invMasteritem['id_Rcom']."', 
        cache: false,  
        success: function(html){  
            $('#content1').html(html);  
        }  
    });  
});  
  

";
}
$ajaxOff="
$(document).mouseup(function (e)
{
    var container = $('#shad');
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $('#shad1').fadeOut(600, function(){});
    }
});
$(document).mouseup(function (e)
{
    var container = $('#shadA');
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $('#shadA1').fadeOut(600, function(){});
    }
});
";
//$ttt=$_SESSION['id'];//3
$content = '<div class="answer" id="content1"></div>
 <h3 class="lc_head_h3"> Инвентарь сервера '.$Servers_config[0][0].'</h3>
<div class="lc_inventar">
'.$contentItemsShow.'
</div>



'.$ajaxEcho." }); ".$ajaxOff." </script>";
?>