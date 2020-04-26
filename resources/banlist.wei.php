<?php
include CFG::adres()."/function/McBanList.php";
//print_r($ban_list);
$table_ban_list="";
foreach($ban_list as $ae){
    $table_ban_list = $table_ban_list .'
    <div class="tab_banlist_ln">
        <div class="tab_banlist_td1">'.$ae[0].'</div>
        <div class="tab_banlist_td2">'.$ae[1].'</div>
        <div class="tab_banlist_td3">'.$ae[2].'</div>
        <div class="tab_banlist_td4">'.$ae[3].'</div>
        <div class="tab_banlist_td5">'.$ae[4].'</div>
    </div>   ';
}

$content = '
<div class="tab_banlist">
    <div class="tab_banlist_head">БАН ЛИСТ</div>
    <div class="tab_banlist_ln">
        <div class="tab_banlist_td1">НикНейм</div>
        <div class="tab_banlist_td2">Забанен с</div>
        <div class="tab_banlist_td3">Забанен до</div>
        <div class="tab_banlist_td4">Причина</div>
        <div class="tab_banlist_td5">Кто забанил</div>
    </div>
'.$table_ban_list.'
</div>
';
?>