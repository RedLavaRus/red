<?php
class MailGeneatorSys
{
    public static function addURL($url,$mail)
    {
        //Добавить урд в бд.
        if(!isset($_SESSION['id'])){exit();}
        $id_user = $_SESSION['id'];
        $status="NEW";
        $sth1 = DB::pdo()->prepare("INSERT INTO `mailActivator` SET 
        `id_user` = ?, 
        `urlKey` = ?,
        `status` = ?,
        `mailtemp` =?
        "
        );
        $sth1->execute(array($id_user,$url,$status,$mail));
    }
    public static function chek($key)
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `mailActivator` where urlKey = ? limit 1");
        $sth->execute(array($key));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        if($array['id']>= 1)
        {
            echo $array['mailtemp']." ".$array['id_user'];
            $sth = DB::pdo()->prepare("UPDATE users set email = ? where id = ?");
            $sth->execute(array($array['mailtemp'],$array['id_user']));


            return true;
        }
        else
        {
            return false;
        }
    }
}



?>