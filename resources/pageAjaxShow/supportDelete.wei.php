<?php

Auth::chek();
$name = "Смена пароля";

$id_user=$_SESSION['id'];
$id_zd=$_GET['id'];
        $sth = DB::pdo()->prepare("SELECT * FROM `support` where (id = ? and user_id=?) LIMIT 1");
        $sth->execute(array($id_zd,$id_user));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        if($array['id']>=1)
        {
            $sth = DB::pdo()->prepare("UPDATE `support` SET status = ? WHERE id = ?");        
            $sth->execute(array("delete",$id_zd));   
        }



?>