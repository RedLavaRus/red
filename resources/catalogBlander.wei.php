
<?php
$addStartUrl = '/articles';
$res_url = explode('/',$_SERVER['REQUEST_URI']);
$ttr123qwe=0;
while ($ttr123qwe != 10)
 {
    $ttr123qwe1 = $ttr123qwe +2;
    if (isset($res_url[$ttr123qwe1]) &&($res_url[$ttr123qwe1] != '')) 
    {
        $re_url[$ttr123qwe]=$res_url[$ttr123qwe1];
    }
    $ttr123qwe++;
}
//print_r($re_url);
$timed = UrlBox::SeachMyDirect();
$menuTable= UrlBox::SeachMyDirectAll($timed);
$echo_menu ='';
$lastLvl1='';
$lastLvl2='';
$lastLvl3='';
$lastLvl4='';
$lastLvl5='';
$lts1='';
$lts2='';
$lts3='';
$lts4='';
$lts5='';
$fx=0;
        
        
        while($fx != $timed['dd'])
        {
            if(isset($menuTable['table'][$fx][1])) 
            {

                $lastLvl2="non";
                if( isset($re_url[0]) && ($menuTable['table'][$fx][1] ==$re_url[0]))
                {
                    $img ='papcaopen80blue';
                }
                else
                {
                    $img ='papkaclose80blue';
                }
                $echo_menu .= '<a href="'.$addStartUrl.'/'.$menuTable['table'][$fx][1].'/"><div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['table'][$fx][1]."</div></a>";
                if( isset($re_url[0]) && ($re_url[0] == $menuTable['table'][$fx][1]))
                {
                    $lastLvl1="start";
                    $lts1=$menuTable['table'][$fx][1];
                }
                else
                {
                    $lastLvl1="non";
                }
            }
            else
            {

            }
            if(!isset($re_url)){$fx++;continue;}
            if(isset($menuTable['table'][$fx][2])) 
            {
                

                if ($lastLvl1 == "start") 
                {
                    if( isset($re_url[1]) && ($menuTable['table'][$fx][2] == $re_url[1]))
                    {
                        
                        $img ='papcaopen80blue';
                    }
                    else
                    { 
                        $img ='papkaclose80blue';
                    }
                    $echo_menu .= '<a href="'.$addStartUrl.'/'.$lts1.'/'.$menuTable['table'][$fx][2].'"><div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['table'][$fx][2]."</div></a>";
                    if ( isset($re_url[1]) && ($re_url[1] == $menuTable['table'][$fx][2] ) &&($re_url[1] != ''))
                    {
                        $lastLvl2="start";
                        $lts2=$menuTable['table'][$fx][2];
                    }
                    else
                    {
                        $lastLvl2="non";
                    }
                }
            }
            else
            {
                
            }
            if(isset($menuTable['table'][$fx][3])) 
            {
                if ($lastLvl2 == "start") 
                {
                    if( isset($re_url[2]) && ($menuTable['table'][$fx][3] == $re_url[2]))
                    {
                        
                        $img ='papcaopen80blue';
                    }
                    else
                    { 
                        $img ='papkaclose80blue';
                    }
                    $echo_menu .= '<a href="'.$addStartUrl.'/'.$lts1.'/'.$lts2.'/'.$menuTable['table'][$fx][3].'"><div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['table'][$fx][3]."</div>";
                    if (isset($re_url[2]) && ($re_url[2] == $menuTable['table'][$fx][3])&&($re_url[2] != '')) 
                    {
                        $lastLvl3="start";
                    }
                    else
                    {
                        $lastLvl3="non";
                    }
                }
            }
            else
            {
                
            }
            if(isset($menuTable['table'][$fx][4])) 
            {
                if ($lastLvl3 == "start") 
                {
                    if(( isset($re_url[3]) && $menuTable['table'][$fx][4] == $re_url[3]))
                    {
                        
                        $img ='papcaopen80blue';
                    }
                    else
                    { 
                        $img ='papkaclose80blue';
                    }
                    $echo_menu .= '<div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['table'][$fx][4]."</div>";
                    if (isset($re_url[3]) && ($re_url[3] == $menuTable['table'][$fx][4]) )
                    {
                        $lastLvl4="start";
                    }
                    else
                    {
                        $lastLvl4="non";
                    }
                }
            }
            else
            {
                
            }
            if(isset($menuTable['table'][$fx][5])) 
            {
                if ($lastLvl4  == "start") 
                {
                    if($menuTable['table'][$fx][4] == $re_url[5])
                    {
                        
                        $img ='papcaopen80blue';
                    }
                    else
                    { 
                        $img ='papkaclose80blue';
                    }
                    $echo_menu .= '<div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['table'][$fx][5]."</div>";
                }
            }
            else
            {
                
            } 
            $fx++;
        }
$content = '
 <div class="catalog_zone">
    <div class="catalog_zone_menu">
    <div class="catalog_zone_menu_el_lvl0"> </div>
    '.$echo_menu.'
    
    </div>
    <div class="catalog_zone_main">
        <div class="catalog_zone_main_nmdir"><img src="/thems/img/ico/catalog/papkaclose80blue.png">Публикации41</div>
        <div class="catalog_zone_main_nmdir"><img src="/thems/img/ico/catalog/papkaclose80blue.png">Публикации42</div>
        <div class="catalog_zone_main_nmdir"><img src="/thems/img/ico/catalog/papkaclose80blue.png">Публикации43</div>
        <div class="catalog_zone_main_nmfile"><img src="/thems/img/ico/catalog/text80blue.png">Фаил41<p>Каждый из нас понимает очевидную вещь: разбавленное изрядной долей эмпатии, рациональное мышление предопределяет высокую востребованность переосмысления внешнеэкономических политик. </p></div>
        <div class="catalog_zone_main_nmfile"><img src="/thems/img/ico/catalog/text80blue.png">Фаил41<p>Каждый из нас понимает очевидную вещь: разбавленное изрядной долей эмпатии, рациональное мышление предопределяет высокую востребованность переосмысления внешнеэкономических политик. </p></div>
        <div class="catalog_zone_main_nmfile"><img src="/thems/img/ico/catalog/text80blue.png">Фаил41<p>Каждый из нас понимает очевидную вещь: разбавленное изрядной долей эмпатии, рациональное мышление предопределяет высокую востребованность переосмысления внешнеэкономических политик. </p></div>
        <hr>
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
    </div>
    <div class="catalog_zone_aside">
        <div class="banner"> </div>

        <div class="catalog_zone_menu_el_lvl1"><big>Похожие статьи</big></div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya1</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya2</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya3</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya4</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya1</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya2</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya3</div>
        <div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/text80blue.png">statiya4</div>
    </div>

 </div>
    ';
    
?>