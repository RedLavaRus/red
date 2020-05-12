<?php
include_once '../app/core.php';


$gl='';
$gl=$gl . Router::get('/','Navigator@index');
$gl=$gl . Router::get('/shop','Navigator@shop');
$gl=$gl . Router::get('/servers','Navigator@servers');
$gl=$gl . Router::get('/trade','Navigator@trade');
$gl=$gl . Router::get('/banlist','Navigator@banlist');
$gl=$gl . Router::get('/lc','Navigator@lc');

$gl=$gl . Router::get('/lc/inventar/items','Navigator@lcInventarItem');
$gl=$gl . Router::get('/lc/inventar/money','Navigator@lcInventarMoney');
$gl=$gl . Router::get('/lc/inventar/s1','Navigator@lcInventarS1');
$gl=$gl . Router::get('/lc/inventar/s2','Navigator@lcInventarS2');
$gl=$gl . Router::get('/lc/inventar/s3','Navigator@lcInventarS3');
$gl=$gl . Router::get('/lc/inventar/s4','Navigator@lcInventarS4');
$gl=$gl . Router::get('/lc/inventar/s5','Navigator@lcInventarS5');
$gl=$gl . Router::get('/lc/inventar/s6','Navigator@lcInventarS6');
$gl=$gl . Router::get('/lc/inventar/s7','Navigator@lcInventarS7');
$gl=$gl . Router::get('/lc/inventar/s8','Navigator@lcInventarS8');
$gl=$gl . Router::get('/lc/inventar/s9','Navigator@lcInventarS9');
$gl=$gl . Router::get('/lc/inventar/s10','Navigator@lcInventarS10');



$gl=$gl . Router::get('/start','Navigator@start');

$gl=$gl . Router::get('/login','Navigator@auth');
$gl=$gl . Router::get('/reg','Navigator@reg');


$gl=$gl . Router::get('/test','Navigator@test');

$gl=$gl . Router::getVar('/servers/?','Navigator@serversName');
$gl=$gl . Router::getVar('/mailActivator/?','Navigator@mailActivator');



if ($gl !="sys") 
{
    $gl=$gl . Router::ajax('/function/online', 'Navigator@servereOnline', 'online', '1');
    $gl=$gl . Router::ajax('/function/rcom', 'Navigator@servereRcom', 'rcom', '1');
    $gl=$gl . Router::ajax('/function/ShowMesActionInventar', 'Navigator@servereShowMesActionInventar', 'ShowMesActionInventar', '1');
    $gl=$gl . Router::ajax('/function/ShowMesActionMail', 'Navigator@servereShowMesActionMail', 'ShowMesActionMail', '1');
    $gl=$gl . Router::ajax('/function/mailTo', 'Navigator@serveremailTo', 'mailTo', '1');
}
if($gl != "sys"){Router::get('e404','Navigator@e404');}
?>
