<?php
class Migration
{
    public static function users($pdo,$type = 'create')
    {
        //$type = create || delete || rebuild 
        if($type == 'create')
        {
            $sql ='
        CREATE TABLE users1 (
            id 	mediumint(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL,
            realname VARCHAR(255)  NOT NULL,
            password VARCHAR(255)  NOT NULL,
            ip VARCHAR(40) ,
            lastlogin bigint(20),
            x double,
            y double,
            z double,
            world varchar(255) ,
            regdate bigint(20),
            regip VARCHAR(40) ,
            yaw float,
            pitch float,
            email  VARCHAR(255) ,
            isLogged smallint(6),
            hasSession smallint(6),
            totp VARCHAR(16) 
        )
        ';
        $sth1 = DB::pdo()->prepare("$sql");
        $sth1->execute(array());
        }
    }
}


?>