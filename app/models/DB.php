<?php
class DB{
    public  static  function pdo(){
        $connect_url="mysql:host=".CFG::DBhost().";dbname=".CFG::DBname().';charset=UTF8';    
        $PDO = new PDO($connect_url, CFG::DBuser(), CFG::DBpass());
        return $PDO;
    }
}


?>