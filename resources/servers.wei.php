<?php
include CFG::adres()."/function/McServerConfig.php";
$res_url = explode('/',$_SERVER['REQUEST_URI']);
$servres_opis_info_dd_r='';
if (isset($res_url[2]) && $res_url[2]!= '') 
{
    include CFG::adres()."/function/McServerOpis.php";
}
//echo $on_col_server = 109;

 $yacheek_serverov = $on_col_strok_ost = $on_col_server % 3;
 
 if ($on_col_strok_ost != 0){$dd =1;}else {$dd=0;}
 $strok_serverov = (($on_col_server - $on_col_strok_ost) / 3) + $dd;
$yy = 0;
$zz = 0;
$serv_echo='';
 while($strok_serverov != $yy)
 {
    $serv_echo =$serv_echo .'<div class="golos_block">';
        $tx = 0;
        while($on_col_server != 0 && $tx != 3)
        {
            $img_server_ico = '/img/'.$Servers_config["$zz"]['7'];
            if($Servers_config["$zz"][3] == "online")
            {
                $onl_serv_ehc = $Servers_config["$zz"][4]. ' из ' .$Servers_config["$zz"][6];
            }
            else
            {
                $onl_serv_ehc = 'offline';
            }
            $serv_echo = $serv_echo .
            '<div class="server_block">
            <div class="server_spawn_img">
                <div class="server_spawn_nameserver">'.$Servers_config["$zz"]['0'].'</div>
                <div class="server_spawn_serverico_block">
                    <img src="'.$img_server_ico .'">
                </div>
                <div class="server_spawn_server_string">'. $onl_serv_ehc.'</div>
                <div class="server_spawn_server_string">ip: '.$Servers_config["$zz"]['1'].'</div>
                <div class="server_spawn_server_string">Магазин</div>
                <div class="server_spawn_server_button"><a href="/servers/'.$Servers_config["$zz"]['0'].'/#server">О сервере</a></div>
            </div>
        </div>';

            $tx++;
            $on_col_server--;
            $zz++;
        }


    $serv_echo =$serv_echo .'</div>';
    $yy++;
 }

 $opisanie_servera = '';
$content = '
 <div class="line2">'.
  $serv_echo.
        '

    </div>
    '.$opisanie_servera. 
    $servres_opis_info_dd_r
    .'

    ';
?>