<?php

include_once '../app/core.php';


$gl='';
$gl=$gl . Router::get('/','Navigator@index');
$gl=$gl . Router::get('/shop','Navigator@shop');
$gl=$gl . Router::get('/servers','Navigator@servers');
$gl=$gl . Router::get('/trade','Navigator@trade');
$gl=$gl . Router::get('/banlist','Navigator@banlist');
$gl=$gl . Router::get('/lc','Navigator@lc');
$gl=$gl . Router::get('/start','Navigator@start');

$gl=$gl . Router::get('/login','Navigator@auth');
$gl=$gl . Router::get('/reg','Navigator@reg');


$gl=$gl . Router::get('/test','Navigator@test');

$gl=$gl . Router::getVar('/servers/?','Navigator@serversName');



if ($gl !="sys") 
{
    $gl=$gl . Router::ajax('/function/online', 'Navigator@servereOnline', 'online', '1');
}
if($gl != "sys"){Router::get('e404','Navigator@e404');}
?>
