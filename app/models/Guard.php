<?php
class Guard
{
    public $hashpass;
    public function hashpassf($pass='MySupperPa$$word',$type = 1, $salt = "genhaSH543", $login = "login")
    {
        if($type == 1)//sha256()
        {
            $this->hashpass = hash('sha256', $pass);
            return $this->hashpass;
        }
        if($type == 2)//sha256(sha256())
        {
            $this->hashpass = hash('sha256', $pass);
            $this->hashpass = hash('sha256', $this->hashpass);
            return $this->hashpass;
        }
        if($type == 3)
        {
            $this->hashpass = hash('sha256', $pass);
            $this->hashpass = hash('sha256',  $this->hashpass.$salt);
            $this->hashpass = hash('sha256',  $this->hashpass.$login);
            
            $strlenPass=strlen($this->hashpass);
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
                    $this->hashpass = hash('sha256', $z.$this->hashpass.$y);
                }
                else
                {
                    $this->hashpass = hash('sha256', $z.$this->hashpass);
                    $this->hashpass = hash('sha256', $y.$this->hashpass);
                }

                $x++;
            }
            return $this->hashpass;

        }
        if ($type == 4) 
        {
            $this->hashpass = hash('sha256', $pass);
            $this->hashpass = hash('sha256', $this->hashpass.$salt);
            return $this->hashpass;
        }
    }
}






?>