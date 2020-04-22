<?php

    $connect_url="mysql:host=".CFG::DBhost().";dbname=".CFG::DBname();    
    $PDO = new PDO($connect_url, CFG::DBuser(), CFG::DBpass());

?>