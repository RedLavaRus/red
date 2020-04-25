<?php
class Reg
{
    public static function registr($pdo, $login, $pass,$pass2, $email, $type='AuthME')
    {
        if(strlen($login) <= 3 || strlen($login) >= 15 )
        {
            return 'Длина логина должна быть от 4 до 15 символов!';
        } 
        $sth = $pdo->prepare("SELECT * FROM `users` where (username = ? or realname=?) limit 1");
        $sth->execute(array($login,$login));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        if($array['id'] >=1 )
        {
            return 'Логин занят!';
        }
        if (preg_match("[aA-zZ0-9\-_]",$login)) 
        {
            return 'логин содержит недопустимые символы!';
        } 
        if(strlen($pass) <= 7 || strlen($pass) >= 15 )
        {
            return 'Длина пароля должна быть от 8 до 15 символов!';
        } 
        if($pass != $pass2)
        {
            return 'Пароли не совпадают!';
        } 
        if (strlen($email) <= 5) 
        {
            return 'Введите корректную почту!';
        } 
        $salt = Guard::salt($login);
        $hashPass =  Guard::hashpassf($pass,4, $salt);
        $itPass='$SHA$'.$salt.'$'.$hashPass;
        $rgTime = time().'000';
        $rgIp=$_SERVER['REMOTE_ADDR'];
        $sth1 = $pdo->prepare("INSERT INTO `users` SET 
        `username` = ?, 
        `realname` = ?,
        `password` = ?,
        `email` = ?,
        `regdate` = ?,
        `regip` = ?"
        );
        $sth1->execute(array($login,$login,$itPass,$email,$rgTime,$rgIp));
        return 'sys';
    }
}


?>