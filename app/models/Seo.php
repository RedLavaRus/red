<?php
class Seo
{
    public static function prints($pdo)
    {
        $url = $_SERVER['REQUEST_URI'];
        $sth1 = $pdo->prepare("SELECT * FROM `seo` where `url` = ? limit 1");
        $sth1->execute(array($url));
        $array1 = $sth1->fetch(PDO::FETCH_ASSOC);
        if (isset($array1['title'])) 
        {
            if ($array1['title'] == null) 
            {
                $array1['title'] = "Default title";
            }
        }
        else
        {
            $array1['title'] = "Default title";
        }


        if (isset($array1['desk'])) 
        {
            if ($array1['desk'] == null) 
            {
                $array1['desk'] = "Default description";
            }
        }
        else
        {
            $array1['desk'] = "Default description";
        }


        if (isset($array1['keyw'])) 
        {
            if ($array1['keyw'] == null) 
            {
                $array1['keyw'] = "Default Keywords";
            }
        }
        else
        {
            $array1['keyw'] = "Default Keywords";
        }
        
        return $array1;
    }
}


?>