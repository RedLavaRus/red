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
    public  static  function conDirectOrFile($re_url,$table){
        //print_r($re_url);
        //echo "<br>";
        //print_r($table);
        //echo "<br>";
        $x = 0;
        $y=0;
        while($x != 10)
        {
            if(isset($re_url[$x])) 
            {
                $last = $re_url[$x];
                $y++;
            }

            $x++;
        }
        $father = 0;
        $z =0;
        $res['lvl0']['father'] = 0;
        $res['lvl0']['id'] = 0;
        $res['lvl0']['name'] = 0;
        $res['lvl0']['names'] = 0;
        /*while($z != $y)
        {
            $d=$z+1;
            $ds=$z+2;
            $r='lvl'.$d;
            $rs='lvl'.$ds;
            if(($table['Par'][$rs] == $table['id'][$r]) &&($table['nameS'][$rs] == $re_url[$d])){echo $re_url[$d];}
            print_r( $table['nameS'][$rs]);
            $res[$rs]['father'] = 1;
            $res[$rs]['id'] = 1;
            $res[$rs]['name'] = 1;
            $res[$rs]['s'] = 1;




                $z++;
        }
        */
        //echo $table['dd'];
        $ch=0;
        while($table['dd'] != $ch)
        {
            if(isset($table['nameS']['lvl1'][$ch])&&isset($re_url[2])&&$table['nameS']['lvl1'][$ch] == $re_url[2] ){
                
                $resulted['lvl1']['nameS'] = $table['nameS']['lvl1'][$ch];
                $resulted['lvl1']['name'] = $table['name']['lvl1'][$ch];
                $resulted['lvl1']['id'] = $table['id']['lvl1'][$ch];
                $resulted['lvl1']['father'] = $table['Par']['lvl1'][$ch];            
            }
            $ch++;
        }
        $ch=0;
        while($table['dd'] != $ch)
        {
            if(isset($table['nameS']['lvl2'][$ch]) && isset($re_url[3]) && $table['nameS']['lvl2'][$ch] == $re_url[3] && $table['Par']['lvl2'][$ch] ==$resulted['lvl1']['id'] ){
               
                $resulted['lvl2']['nameS'] = $table['nameS']['lvl2'][$ch];
                $resulted['lvl2']['name'] = $table['name']['lvl2'][$ch];
                $resulted['lvl2']['id'] = $table['id']['lvl2'][$ch];
                $resulted['lvl2']['father'] = $table['Par']['lvl2'][$ch];            
            }
            $ch++;
        }
        $ch=0;
        while($table['dd'] != $ch)
        {
            if(isset($table['nameS']['lvl3'][$ch]) && isset($re_url[4]) && $table['nameS']['lvl3'][$ch] == $re_url[4] && $table['Par']['lvl3'][$ch] ==$resulted['lvl2']['id']  ){
               
                $resulted['lvl3']['nameS'] = $table['nameS']['lvl3'][$ch];
                $resulted['lvl3']['name'] = $table['name']['lvl3'][$ch];
                $resulted['lvl3']['id'] = $table['id']['lvl3'][$ch];
                $resulted['lvl3']['father'] = $table['Par']['lvl3'][$ch];            
            }
            $ch++;
        }
        $ch=0;
        while($table['dd'] != $ch)
        {
            if(isset($table['nameS']['lvl4'][$ch]) && isset($re_url[5]) && $table['nameS']['lvl4'][$ch] == $re_url[5] && $table['Par']['lvl4'][$ch] ==$resulted['lvl3']['id']  ){
               
                $resulted['lvl4']['nameS'] = $table['nameS']['lvl4'][$ch];
                $resulted['lvl4']['name'] = $table['name']['lvl4'][$ch];
                $resulted['lvl4']['id'] = $table['id']['lvl4'][$ch];
                $resulted['lvl4']['father'] = $table['Par']['lvl4'][$ch];            
            }
            $ch++;
        }
        if(!isset($resulted))return null;
        return $resulted;
    }
}


?>