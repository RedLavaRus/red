<?php
class UrlTextShow{
    public  static  function showFile($re_url,$table,$tl ){
        
        //print_r($tl);
        //echo "<br>";
        //print_r($table['id']);
        $x=0;
        $y=0;
        
        if($re_url == null)return null;
        while($x != $tl['dd'])
        {
            while ($y != $tl['dd']) {
                if(isset($table['table'][$y][1]) && $table['table'][$y][1] == $re_url[0] )
                {
                    $father['lvl1']['nameS']= $table['table'][$y][1];
                    $father['lvl1']['id']= $table['direct'][$y][1];
                    $lastlvl =1;
                }
                
                //echo 1;
                $y++;
            }
    
            $x++; 
        } 
        $x=0;
        $y=0;
        while($x != $tl['dd'])
        {
            while ($y != $tl['dd']) {
                if(isset($table['table'][$y][2]) && isset($re_url[1]) && $table['table'][$y][2] == $re_url[1] )
                {
                    $father['lvl2']['nameS']= $table['table'][$y][2];
                    $father['lvl2']['id']= $table['direct'][$y][2];
                    $lastlvl =2;
                }
                
                //echo 1;
                $y++;
            }
    
            $x++; 
        }
        $x=0;
        $y=0;
        while($x != $tl['dd'])
        {
            while ($y != $tl['dd']) {
                if(isset($table['table'][$y][3]) && isset($re_url[2]) && $table['table'][$y][3] == $re_url[2] )
                {
                    $father['lvl3']['nameS']= $table['table'][$y][3];
                    $father['lvl3']['id']= $table['direct'][$y][3];
                    $lastlvl =3;
                }
                
                //echo 1;
                $y++;
            }
    
            $x++; 
        }
        $x=0;
        $y=0;
        while($x != $tl['dd'])
        {
            while ($y != $tl['dd']) {
                if(isset($table['table'][$y][4]) && isset($re_url[3]) && $table['table'][$y][4] == $re_url[3] )
                {
                    $father['lvl4']['nameS']= $table['table'][$y][4];
                    $father['lvl4']['id']= $table['direct'][$y][4];
                    $lastlvl =4;
                }
                
                //echo 1;
                $y++;
            }
    
            $x++; 
        }

        $x=0;
        $y=0;
        while ($x != $tl['dd']) 
        {
            while ($y != $tl['dd']) 
            {
                if (isset($table['table'][$y][5]) && isset($re_url[4]) && $table['table'][$y][5] == $re_url[4]) 
                {
                    $father['lvl5']['nameS']= $table['table'][$y][5];
                    $father['lvl5']['id']= $table['direct'][$y][5];
                    $lastlvl =5;
                }
                
                //echo 1;
                $y++;
            }
            $x++;
        }
        //print_r( $father);
        if($lastlvl ==5){$lasttype = $father['lvl5']['id'];}
        if($lastlvl ==4){$lasttype = $father['lvl4']['id'];}
        if($lastlvl ==3){$lasttype = $father['lvl3']['id'];}
        if($lastlvl ==2){$lasttype = $father['lvl2']['id'];}
        if($lastlvl ==1){$lasttype = $father['lvl1']['id'];}
        //echo $lasttype;
        $eee=0;
        while($eee !=10)
        {
            if(isset($re_url[$eee])){$lsatlvlr =$eee+1;}
            $eee++;
        }
        //echo $lsatlvlr."----".$lastlvl;
        $cros = $lastlvl-1;
        $enc="";
        if($lsatlvlr == $lastlvl) {$type_op = 'direct';} else {$type_op = 'file';}
        //echo $type_op;
        
        if($type_op=='file')
        {
            $names=$re_url[$lastlvl];
            $sth = DB::pdo()->prepare("SELECT * FROM `urlDB` where (idPar=? and nameS =?)");
            $sth->execute(array($lasttype,$names));
            $array = $sth->fetch(PDO::FETCH_ASSOC);
            //echo $array['gateID'];
            if($array['gateID'] != null)
            {
                $sth1 = DB::pdo()->prepare("SELECT * FROM `urlArg` where id =?");
                $sth1->execute(array($array['gateID']));
                $array1 = $sth1->fetch(PDO::FETCH_ASSOC);
                $enc = "<h1>".$array1['h1']."/<h1>".$array1['text'];
            }
            else
            {
                $enc = "error404";
            }
        }
        $etc['text'] = $enc;
        $etc['type'] = $type_op;
        $ech =
        '
        <h1>name_stat</h1>
        <div class="catalog_zone_main_point">point 1</div>
        <div class="catalog_zone_main_point">point 1</div>
        <div class="catalog_zone_main_point">point 1</div>
        <div class="catalog_zone_main_point">point 1</div>
        <div class="catalog_zone_main_point">point 1</div>
        <h3>yewtruyewtruew</h3>
        <p>
fsdf sdf sdf sdfsdfkjs alkjj asdhf asdkf ahdslfjh dsahfuewy fhshdf shafjkas dhfahs dfjhsalf sadjfhsdajhflasdhfjsah l


        </p>
        <h3>yewtruyewtruew</h3>
        <p>
fsdf sdf sdf sdfsdfkjs alkjj asdhf asdkf ahdslfjh dsahfuewy fhshdf shafjkas dhfahs dfjhsalf sadjfhsdajhflasdhfjsah l


        </p>
        <h3>yewtruyewtruew</h3>
        <p>
fsdf sdf sdf sdfsdfkjs alkjj asdhf asdkf ahdslfjh dsahfuewy fhshdf shafjkas dhfahs dfjhsalf sadjfhsdajhflasdhfjsah l


        </p>
        ';
        return $etc;"";//$ech;
    }
}


?>