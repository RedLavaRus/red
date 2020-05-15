<?php
class UrlContent{
    public  static  function contentDirect($re_url,$table){
        /*
        определить текущую деректорию
        выгрузить всех потомков 1 колена.
        отсортировать на файлы и папки.
        вывести все.

        */
        //print_r($re_url);
        $x=1;
        $sth = DB::pdo()->prepare("SELECT * FROM `urlDB`");
        $sth->execute(array());
        while($array = $sth->fetch(PDO::FETCH_ASSOC))
        {
            $arr[$x] = $array;
            $x++;
        }
        
        //print_r($arr);
        
        if($re_url == null)
        {
            $y=0;
            $dd=0;
            while($y != $x)
            {
                if(isset($arr[$y]['idPar'])&&$arr[$y]['idPar'] == 0 )
                {
                    $retArr[$dd] =$arr[$y];
                    $dd++;
                }
                $y++;
            }
            $retArr['itog'] = $dd;
            return $retArr;
            
        }
        //print_r($re_url);
        if(isset($re_url[0])) $elementov=1;
        if(isset($re_url[1])) $elementov=2;
        if(isset($re_url[2])) $elementov=3;
        if(isset($re_url[3])) $elementov=4;
        if(isset($re_url[4])) $elementov=5;
        //echo '<br>';
        //print_r($arr);
        $chek = 1;
        $ddd=0;
        while($x != $ddd)
        {
            $chek=0;
            while($chek !=$elementov)
            {
                if(isset($arr[$ddd]['nameS']) && $re_url[0] == $arr[$ddd]['nameS'])
                {
                    $father['lvl1'] = $arr[$ddd];
                    $lastlvl = 1;
                }
                $chek++;
                //print_r($arr[$ddd]['nameS']);
            }
            $ddd++;
        }
        $chek = 1;
        $ddd=0;
        if (isset($re_url[1]) && $re_url[1]!='')
         {
            while ($x != $ddd) 
            {
                $chek=0;
                while ($chek !=$elementov) 
                {
                    if (isset($arr[$ddd]['nameS']) && $re_url[1] == $arr[$ddd]['nameS']) 
                    {
                        $father['lvl2'] = $arr[$ddd];
                        $lastlvl = 2;
                    }
                    $chek++;
                    //print_r($arr[$ddd]['nameS']);
                }
                $ddd++;
            }
        }
        $chek = 1;
        $ddd=0;
        if (isset($re_url[2]) && $re_url[2]!='')
         {
            while ($x != $ddd) 
            {
                $chek=0;
                while ($chek !=$elementov) 
                {
                    if (isset($arr[$ddd]['nameS']) && $re_url[2] == $arr[$ddd]['nameS']) 
                    {
                        $father['lvl3'] = $arr[$ddd];
                        $lastlvl = 3;
                    }
                    $chek++;
                    //print_r($arr[$ddd]['nameS']);
                }
                $ddd++;
            }
        }
        $chek = 1;
        $ddd=0;
        if (isset($re_url[3]) && $re_url[3]!='')
         {
            while ($x != $ddd) 
            {
                $chek=0;
                while ($chek !=$elementov) 
                {
                    if (isset($arr[$ddd]['nameS']) && $re_url[3] == $arr[$ddd]['nameS']) 
                    {
                        $father['lvl4'] = $arr[$ddd];
                        $lastlvl = 4;
                    }
                    $chek++;
                    //print_r($arr[$ddd]['nameS']);
                }
                $ddd++;
            }
        }
        $chek = 1;
        $ddd=0;
        if (isset($re_url[4]) && $re_url[4]!='')
         {
            while ($x != $ddd) 
            {
                $chek=0;
                while ($chek !=$elementov) 
                {
                    if (isset($arr[$ddd]['nameS']) && $re_url[4] == $arr[$ddd]['nameS']) 
                    {
                        $father['lvl5'] = $arr[$ddd];
                        $lastlvl = 5;
                    }
                    $chek++;
                    //print_r($arr[$ddd]['nameS']);
                }
                $ddd++;
            }
        }
        $lvl = "lvl".$lastlvl;
        $y=0;
        $dd=0;
        while($y != $x)
        {
            if(isset($arr[$y]['idPar'])&&$arr[$y]['idPar'] == $father[$lvl]['id'] )
            {
                $retArr[$dd] =$arr[$y];
                $dd++;
            }
            $y++;
        }
        $retArr['itog'] = $dd;
        return $retArr;


    }
}


?>