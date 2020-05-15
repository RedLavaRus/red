<?php
class UrlBox{
    /*
    Напоминалка!
    Далее надо будет оптимизировать всю эту простыню.
    сохранить в фаил, и при редактирование бд, просто обновлять файлик, в противном случая, боюсь будет проседать сервак при ображение к каталогу.
    работае на вложение до 5 уровней. 
    Крайне не советую редактировать тут что либо.


    */
    
    public  static  function SeachMyDirect(){
        $type="direct";
        $dd=0;
        $sth = DB::pdo()->prepare("SELECT * FROM `urlDB` where type=? ");
        $sth->execute(array($type));
        while ($array = $sth->fetch(PDO::FETCH_ASSOC)) {
            $dir[$dd]['id'] = $array['id'];
            $dir[$dd]['idPar'] = $array['idPar'];
            $dir[$dd]['type'] = $array['type'];
            $dir[$dd]['gateID'] = $array['gateID'];
            $dir[$dd]['nameS'] = $array['nameS'];
            $dir[$dd]['name'] = $array['name'];
            $dd++;
        }
        //$direct['lvl1']
        $qq=0;
        $zz=0;
        while ($dd != $zz) {
            if ($dir[$zz]['idPar'] == 0) {
                $father['lvl1'][$qq] = 0;
                $direct['lvl1'][$qq] = $dir[$zz]['id'];
                $gateID['lvl1'][$qq] = $dir[$zz]['gateID'];
                $nameS['lvl1'][$qq] = $dir[$zz]['nameS'];
                $name['lvl1'][$qq] = $dir[$zz]['name'];
                $qq++;
            }
            $zz++;
        }
        //$direct['lvl2']
        $qq=0;
        $zz=0;
        $xx=0;
        while ($dd != $zz) {
            $xx=0;
            while ($dd != $xx) {
                if (isset($direct['lvl1'][$xx])) {
                    if ($dir[$zz]['idPar'] == $direct['lvl1'][$xx]) {
                        $father['lvl2'][$qq] = $dir[$zz]['idPar'];
                        $direct['lvl2'][$qq] = $dir[$zz]['id'];
                        $gateID['lvl2'][$qq] = $dir[$zz]['gateID'];
                        $nameS['lvl2'][$qq] = $dir[$zz]['nameS'];
                        $name['lvl2'][$qq] = $dir[$zz]['name'];
                        $qq++;
                    }
                }
                $xx++;
            }
            $zz++;
        }
        //$direct['lvl3']
        $qq=0;
        $zz=0;
        $xx=0;
        while ($dd != $zz) {
            $xx=0;
            while ($dd != $xx) {
                if (isset($direct['lvl2'][$xx])) {
                    if ($dir[$zz]['idPar'] == $direct['lvl2'][$xx]) {
                        $father['lvl3'][$qq] = $dir[$zz]['idPar'];
                        $direct['lvl3'][$qq] = $dir[$zz]['id'];
                        $gateID['lvl3'][$qq] = $dir[$zz]['gateID'];
                        $nameS['lvl3'][$qq] = $dir[$zz]['nameS'];
                        $name['lvl3'][$qq] = $dir[$zz]['name'];
                        $qq++;
                    }
                }
                $xx++;
            }
            $zz++;
        }
        //$direct['lvl4']
        $qq=0;
        $zz=0;
        $xx=0;
        while ($dd != $zz) {
            $xx=0;
            while ($dd != $xx) {
                if (isset($direct['lvl3'][$xx])) {
                    if ($dir[$zz]['idPar'] == $direct['lvl3'][$xx]) {
                        $father['lvl4'][$qq] = $dir[$zz]['idPar'];
                        $direct['lvl4'][$qq] = $dir[$zz]['id'];
                        $gateID['lvl4'][$qq] = $dir[$zz]['gateID'];
                        $nameS['lvl4'][$qq] = $dir[$zz]['nameS'];
                        $name['lvl4'][$qq] = $dir[$zz]['name'];
                        $qq++;
                    }
                }
                $xx++;
            }
            $zz++;
        }
        //$direct['lvl5']
        $qq=0;
        $zz=0;
        $xx=0;
        while ($dd != $zz) {
            $xx=0;
            while ($dd != $xx) {
                if (isset($direct['lvl4'][$xx])) {
                    if ($dir[$zz]['idPar'] == $direct['lvl4'][$xx]) {
                        $father['lvl5'][$qq] = $dir[$zz]['idPar'];
                        $direct['lvl5'][$qq] = $dir[$zz]['id'];
                        $gateID['lvl5'][$qq] = $dir[$zz]['gateID'];
                        $nameS['lvl5'][$qq] = $dir[$zz]['nameS'];
                        $name['lvl5'][$qq] = $dir[$zz]['name'];
                        $qq++;
                    }
                }
                $xx++;
            }
            $zz++;
        }


        $arrEnd['Par'] = $father;
        $arrEnd['id'] = $direct;
        $arrEnd['gateID'] = $gateID;
        $arrEnd['nameS'] = $nameS;
        $arrEnd['name'] = $name;
        $arrEnd['dd']=$dd;
        return $arrEnd;
    }
        public  static  function SeachMyDirectAll($array){
            $father=$array['Par'];
            $direct=$array['id'];
            $gateID=$array['gateID'];
            $nameS=$array['nameS'];
            $name=$array['name'];
            $dd=$array['dd'];
        //print_r($arrEnd);
       // echo "<br><br>";
        $zz=0;
        $zz1=0;
        $zz2=0;
        $zz3=0;
        $zz4=0;
        $Xline = 1;
        while($dd != $zz)
        {
            if(isset($father['lvl1'][$zz]) )
            {
                //echo $nameS['lvl1'][$zz] .'<br>';
                $table[$Xline][1] = $nameS['lvl1'][$zz];
                $tableN[$Xline][1] = $name['lvl1'][$zz];
                $tableD[$Xline][1] = $direct['lvl1'][$zz];
                $tableI[$Xline][1] = $gateID['lvl1'][$zz];
                $Xline++;
                $zz1=0;
                while($dd != $zz1)
                {
                    if (isset($father['lvl2'][$zz1]) && ($father['lvl2'][$zz1] == $direct['lvl1'][$zz])) 
                    {
                        //echo '--'.$nameS['lvl2'][$zz1] .'<br>';
                        $table[$Xline][2] = $nameS['lvl2'][$zz1];
                        $tableN[$Xline][2] = $name['lvl2'][$zz1];
                        $tableD[$Xline][2] = $direct['lvl2'][$zz1];
                        $tableI[$Xline][2] = $gateID['lvl2'][$zz1];
                        $Xline++;
                        $zz2=0;
                        while ($dd != $zz2) 
                        {
                            if (isset($father['lvl3'][$zz2]) && ($father['lvl3'][$zz2] == $direct['lvl2'][$zz1])) 
                            {
                                //echo '----'.$nameS['lvl3'][$zz2] .'<br>';
                                $table[$Xline][3] = $nameS['lvl3'][$zz2];
                                $tableN[$Xline][3] = $name['lvl3'][$zz2];
                                $tableD[$Xline][3] = $direct['lvl3'][$zz2];
                                $tableI[$Xline][3] = $gateID['lvl3'][$zz2];
                                $Xline++;
                                $zz3=0;
                                while ($dd != $zz3) 
                                {
                                    if (isset($father['lvl4'][$zz3]) && ($father['lvl4'][$zz3] == $direct['lvl3'][$zz2])) 
                                    {
                                        //echo '------'.$nameS['lvl4'][$zz3] .'<br>';
                                        $table[$Xline][4] = $nameS['lvl4'][$zz3];
                                        $tableN[$Xline][4] = $name['lvl4'][$zz3];
                                        $tableD[$Xline][4] = $direct['lvl4'][$zz3];
                                        $tableI[$Xline][4] = $gateID['lvl4'][$zz3];
                                        $Xline++;
                                            $zz4=0;
                                            while ($dd != $zz4) 
                                            {
                                                if (isset($father['lvl5'][$zz4]) && ($father['lvl5'][$zz4] == $direct['lvl4'][$zz3])) 
                                                {
                                                    //echo '--------'.$nameS['lvl5'][$zz3] .'<br>';
                                                    $table[$Xline][5] = $nameS['lvl5'][$zz4];
                                                    $tableN[$Xline][5] = $name['lvl5'][$zz4];
                                                    $tableD[$Xline][5] = $direct['lvl5'][$zz4];
                                                    $tableI[$Xline][5] = $gateID['lvl5'][$zz4];
                                                    $Xline++;
                                                }
                                                    
                                                $zz4++;
                                            }
                                    }
                                        
                                    $zz3++;
                                }
                            }
                                
                            $zz2++;
                        }
                    }
                    $zz1++;
                }
            }
            $zz++;
        }
        $arraW['table']=$table;
        $arraW['direct']=$tableD;
        $arraW['id']=$tableD;
        $arraW['name']=$tableN;
        return $arraW;
        /*
                                                    $table[$Xline][5] = $nameS['lvl5'][$zz4];
                                                    $tableD[$Xline][5] = $direct['lvl5'][$zz4];
                                                    $tableI[$Xline][5] = $gateID['lvl5'][$zz4];
        $fx=0;
        print_r($table);
        echo "<br>";
        while($fx != $dd)
        {
            if(isset($table[$fx][1])) echo "-".$table[$fx][1]."<br>";
            if(isset($table[$fx][2])) echo "--".$table[$fx][2]."<br>";
            if(isset($table[$fx][3])) echo "---".$table[$fx][3]."<br>";
            if(isset($table[$fx][4])) echo "----".$table[$fx][4]."<br>";
            if(isset($table[$fx][5])) echo "-----".$table[$fx][5]."<br>";
            $fx++;
        }
        

        //return $array;
        /*
        $res_url = explode('/',$_SERVER['REQUEST_URI']);
        print_r($res_url);

        Array ( [0] => [1] => articles [2] => 2121 [3] => ewqewq [4] => fdsfsd )
        http://adj/articles/2121/ewqewq/fdsfsd




        1) Разбить урл на части
        2) Проверить существует ли
        */
    }
}


?>