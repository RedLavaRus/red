<?php

include_once '../app/core.php';


Router::get('/','Navigator@index');
Router::get('/shop','Navigator@shop');
Router::get('/servers','Navigator@servers');
Router::get('/trade','Navigator@trade');
Router::get('/banlist','Navigator@banlist');
Router::get('/lc','Navigator@lc');
Router::get('/start','Navigator@start');


Router::get('/test','Navigator@test');
?>
