<?php
class Auth
{

    public static function authriz($pdo, $login, $pass, $type='AuthME')
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `users` where (username = ? or realname=?) limit 1");
        $sth->execute(array($login,$login));
        $array = $sth->fetch(PDO::FETCH_ASSOC);

        $func = explode('$', $array['password']);

        $hashpass =  Guard::hashpassf($pass,4, $func['2']);
        if($hashpass == $func['3'] )
        {
            $_SESSION["id"]=$array['id'];
            echo "вы вошли!";
            return $array['id'];

        }
        else
        {
            return '';
        }
        //print_r($func);
        
    }
    public static function cheakLP($login, $pass, $type='AuthME')
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `users` where (username = ? or realname=?) limit 1");
        $sth->execute(array($login,$login));
        $array = $sth->fetch(PDO::FETCH_ASSOC);

        $func = explode('$', $array['password']);

        $hashpass =  Guard::hashpassf($pass,4, $func['2']);
        if($hashpass == $func['3'] )
        {
           
            return true;

        }
        else
        {
            return false;
        }
        //print_r($func);
        
    }
    public static function chek()
    {
        if(isset($_SESSION['id']) &&  $_SESSION['id']>= 1)
        {
            $status = true;
        }
        else
        {
            $status = false;
            Router::get('e428','Navigator@e428');
            exit();
        }
    }
    public static function showLogin($id)
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `users` where id = ? limit 1");
        $sth->execute(array($id));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        return $array["username"];
    }
    public static function chekPass($oldPass, $newPass1, $newPass2)
    {
        if($newPass1 != $newPass2) return "Пароли не совпадают!";

        $login = Auth::showLogin($_SESSION['id']);
        $statusOldP = Auth::cheakLP($login, $oldPass);
        if($statusOldP==false){return "не верный пароль!";}
        if(strlen($newPass1) <= 7 || strlen($newPass1) >= 15 )
        {
            return 'Длина пароля должна быть от 8 до 15 символов!';
        } 

        $salt = Guard::salt($login);
        $hashPass =  Guard::hashpassf($newPass1,4, $salt);
        $itPass='$SHA$'.$salt.'$'.$hashPass;

        $sth = DB::pdo()->prepare("UPDATE users set `password` = ? where id = ?");
        $sth->execute(array($itPass,$_SESSION['id']));
        return 'sys';
    }
}

?>