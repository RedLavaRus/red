<?php
/*
 * 1) Получить онаил
 * 2) --Записать в бд
 * 3) отобразить .



*/



include CFG::adres()."/function/McServerConfig.php";


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
       $total_onl_rec=ServerOnline::show();
           $tx++;
           $on_col_server--;
           $zz++;
       }
       $total_onl_tek=0;
       $xx=0;
       while($xx != 9)
       {
           if (!isset($Servers_config["$xx"][4])) 
           {
               $Servers_config["$xx"][4] = 0;
           }
           $total_onl_tek = $total_onl_tek + $Servers_config["$xx"][4];
           $xx++;

       }

   $serv_echo =$serv_echo .'</div>
   <div class="server_total">
       <div class="server_total_item">
       <div class="server_total_head">Общий онлаин:</div>
       <div class="server_total_text">'.$total_onl_tek .'</div>
       </div>
       <div class="server_total_item">
       <div class="server_total_head">Рекорд онлаин:</div>
       <div class="server_total_text">'.$total_onl_rec .'</div>
       </div>
   </div>
   
   
   ';
   $yy++;
}

    echo $serv_echo;
/*
Загрузка в бд.
*/
ServerOnline::add($Servers_config);

?>