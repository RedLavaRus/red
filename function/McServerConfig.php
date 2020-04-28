<?php
$Servers_config = array(
    //array('НАЗВАНИЕ','ИП','ПОРТ','СТАТУС','ОНЛАИН',"НАКРУТКА",'max online',"img")
    array('ANARHIYA','pandamc.ru','25565','status','0','0','100','serv1.png'),
    array('ClanWars','s2.topmc.site','25565','status','0','0','100','serv1.png')
  );
  $i=0;
  $on_total=0;
  foreach ($Servers_config as $s) {
      
      $Server_full = new McStatusServer($s[1], $s[2]);
      $s[3] = $Server_full->Online;
      if ($Server_full->Online) {
          $s[3] = "online";
      } else {
          $s[3] = "offline";
      }
      $Servers_config["$i"][3] = $s[3];
      $s[4]=$Server_full->CurPlayers + $s[5];
      //echo $s[4];
      $on_total = $on_total + $s[4];
      $Servers_config["$i"][4] = $s[4];
      //print_r($s);
      $i++;
  }
  $on_col_server = $i;
 /* 
  echo "server 1:".$Servers_config['0'][4].'<br>';
  echo "server 2:".$Servers_config['1'][4].'<br>';
  echo "server 3:".$Servers_config[2][4].'<br>';
  echo $on_total;
  */

?>