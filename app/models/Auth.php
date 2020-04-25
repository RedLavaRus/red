<?php
class Auth
{

    public static function authriz($pdo, $login, $pass, $type='AuthME')
    {
        $sth = $pdo->prepare("SELECT * FROM `users` where (username = ? or realname=?) limit 1");
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

}

?>