<?php
class Guard
{
    
    public  static  function hashpassf($pass='MySupperPa$$word',$type = 1, $salt = "genhaSH543", $login = "login")
    {
        if($type == 1)//sha256()
        {
            $hashpass = hash('sha256', $pass);
            return $hashpass;
        }
        if($type == 2)//sha256(sha256())
        {
            $hashpass = hash('sha256', $pass);
            $hashpass = hash('sha256', $hashpass);
            return $hashpass;
        }
        if($type == 3)
        {
            $hashpass = hash('sha256', $pass);
            $hashpass = hash('sha256',  $hashpass.$salt);
            $hashpass = hash('sha256',  $hashpass.$login);
            
            $strlenPass=strlen($hashpass);
            $strlenSalt=strlen($salt);
            $strlenLogin=strlen($login);
            
            $x=0;
            $y=0;
            $z=0;
            while($x >= $strlenPass)
            {
                if($x >= $strlenSalt)
                {
                    $z = $strlenSalt % $x;
                }
                else
                {
                    $z = $x % $strlenSalt;
                }

                if($x >= $strlenLogin)
                {
                    $y = $strlenLogin % $x;
                }
                else
                {
                    $y = $x % $strlenLogin;
                }
                
                if ($x >$strlenLogin.$strlenPass) 
                {
                    $hashpass = hash('sha256', $z.$hashpass.$y);
                }
                else
                {
                    $hashpass = hash('sha256', $z.$hashpass);
                    $hashpass = hash('sha256', $y.$hashpass);
                }

                $x++;
            }
            return $hashpass;

        }
        if ($type == 4) 
        {
            $hashpass = hash('sha256', $pass);
            $hashpass = hash('sha256', $hashpass.$salt);
            return $hashpass;
        }
    }
    public  static  function salt($login)
    {
        $saltLogin  = hash('sha256', $login);
        $num = rand(0,99999);
        $saltNum = hash('sha256', $num);
        $times= time();
        $saltTimes = hash('sha256', $times);
        $hash =  hash('sha256', $saltLogin.$saltNum.$saltTimes);
        $string = substr($hash, 0, 16);
        return $string;

    }
}






?>