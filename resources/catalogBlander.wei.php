
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
//print_r($timed);
$menuTable= UrlBox::SeachMyDirectAll($timed);
//print_r($menuTable);
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
                $echo_menu .= '<a href="'.$addStartUrl.'/'.$menuTable['table'][$fx][1].'/"><div class="catalog_zone_menu_el_lvl1"><img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['name'][$fx][1]."</div></a>";
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
                    $echo_menu .= '<a href="'.$addStartUrl.'/'.$lts1.'/'.$menuTable['table'][$fx][2].'/"><div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['name'][$fx][2]."</div></a>";
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
                    $echo_menu .= '<a href="'.$addStartUrl.'/'.$lts1.'/'.$lts2.'/'.$menuTable['table'][$fx][3].'/"><div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['name'][$fx][3]."</div>";
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
                    $echo_menu .= '<div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['name'][$fx][4]."</div>";
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
                    $echo_menu .= '<div class="catalog_zone_menu_el_lvl1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/thems/img/ico/catalog/'.$img.'.png">'.$menuTable['name'][$fx][5]."</div>";
                }
            }
            else
            {
                
            } 
            $fx++;
        }
        if(!isset($re_url))$re_url=null;
        $res_con_box = UrlContent::contentDirect($re_url,$menuTable);
        $der=0;
        $echo_main_box_f='';
        //print_r($res_con_box);
        if (isset($res_con_box[$der]['type']) && $res_con_box[$der]['idPar'] == 0) 
        {
            $addurl = $_SERVER['REQUEST_URI'];
        }
        else
        {
            $addurl=$_SERVER['REQUEST_URI'];
        }
            while ($res_con_box['itog'] != $der) 
            {
                if (isset($res_con_box[$der]['type']) && $res_con_box[$der]['type']=='direct') 
                {
                    
                    $echo_main_box_f .= '<a href="'.$addurl.$res_con_box[$der]['nameS'].'/"><div class="catalog_zone_main_nmdir"><img src="/thems/img/ico/catalog/papkaclose80blue.png">'.$res_con_box[$der]['name'].'</div></a>';
                    
                }
                $der++;
            }
            $der=0;
            
            while ($res_con_box['itog'] != $der) 
            {
                if ($res_con_box[$der]['type']=='file') 
                {
                    $echo_main_box_f .= '<a href="'.$addurl.$res_con_box[$der]['nameS'].'/"><div class="catalog_zone_main_nmdir"><img src="/thems/img/ico/catalog/text80blue.png">'.$res_con_box[$der]['name'].'<p>Каждый из нас понимает очевидную вещь: разбавленное изрядной долей эмпатии, рациональное мышление предопределяет высокую востребованность переосмысления внешнеэкономических политик. </p></div></a>';
                }
                $der++;
            }

            $arr_Dr=UrlContent::conDirectOrFile($res_url,$timed);
            
            $hleb_kr = '<a href="/articles/">Каталог / </a>';
            if(isset($res_url[2]) && $arr_Dr['lvl1']['nameS']==$res_url[2] && isset($arr_Dr['lvl1']['nameS'])) 
            {
                $hleb_kr.='<a href="/articles/'.$arr_Dr['lvl1']['nameS'].'/">'.$arr_Dr['lvl1']['name'].' / </a>' ;
            }
            if(isset($res_url[3]) &&isset($arr_Dr['lvl2']['nameS'])&& $res_url[3] != '' && $arr_Dr['lvl2']['nameS']==$res_url[3]) 
            {
                $hleb_kr.='<a href="/articles/'.$arr_Dr['lvl1']['nameS'].'/'.$arr_Dr['lvl2']['nameS'].'/">'.$arr_Dr['lvl2']['name'].' / ' ;
            }
            if(isset($res_url[4]) &&isset($arr_Dr['lvl3']['nameS'])&& $res_url[4] != '' && $arr_Dr['lvl3']['nameS'] == $res_url[4]) 
            {
                $hleb_kr.='<a href="/articles/'.$arr_Dr['lvl1']['nameS'].'/'.$arr_Dr['lvl2']['nameS'].'/'.$arr_Dr['lvl3']['nameS'].'/">'.$arr_Dr['lvl3']['name'].' / ' ;
            }
            if(isset($res_url[5]) &&isset($arr_Dr['lvl4']['nameS'])&& $res_url[5] != '' && $arr_Dr['lvl4']['nameS'] == $res_url[5]) 
            {
                $hleb_kr.=$arr_Dr['lvl4']['name'].' / ' ;
            }
            if(isset($res_url[6]) &&isset($arr_Dr['lvl5']['nameS'])&& $res_url[6] != '' && $arr_Dr['lvl5']['nameS'] == $res_url[6]) 
            {
                $hleb_kr.=$arr_Dr['lvl5']['name'].' / ' ;
            }
            
            $echo_main_box_f .= UrlTextShow::showFile($re_url,$menuTable);
$content = '
<div class="url_bord">
'.$hleb_kr.'
</div>
 <div class="catalog_zone">
    <div class="catalog_zone_menu">
    <div class="catalog_zone_menu_el_lvl0"> </div>
    '.$echo_menu.'
    
    </div>
    <div class="catalog_zone_main">
        '.$echo_main_box_f.'<hr>
        
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