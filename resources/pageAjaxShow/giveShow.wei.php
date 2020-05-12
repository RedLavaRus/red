<?php
/*
проверка авторизации
Проверка совпалдает ли ид предмета и ид в инвентаре

выдача предмета на сервер
если выдача прошла, то убрать предмет с инвентаря пользователя
*/
Auth::chek();
if(!isset($_POST['id'])){exit("error");}
if(!isset($_POST['coll'])){exit("error");}
$id_op = $_POST['id'];
$coll_op = $_POST['coll'];
$res1 = Inventar::ShowItem($id_op);
//print_r($res1);
if($res1['id'] != $id_op)
{
    $echo_mass = "Предмет не найден!";
    
}
if($res1['user_id'] != $_SESSION['id'])
{
  $echo_mass =  "не твоё!";
    
}
if($res1['data_udaleniya'] != null)
{
    $echo_mass =  "Закончился!";
    
}
if($coll_op > $res1['collich'])
{
    $echo_mass =  "У вас недостаточно предметов!";
      
}
if(isset($echo_mass))
{
  echo'
        <div class="action_fon_100x100_b9" id="shadA1">
          <div class="action_windows1" id="shadA">
    <h3>'.$echo_mass.'</h3>
          </div>
        </div>


  ';
  exit();
}
$res2 = Inventar::ShowItemID($res1['pred_id']);
//echo "<br>";
//print_r($res2);
$selectServer='s'.$res1["server"];
$uus_id=Auth::showLogin($_SESSION['id']);
$cmd = "give ".$uus_id." ".$res2[$selectServer]." ".$coll_op;
//echo $cmd ;

include CFG::adres()."/function/McServerConfig.php";
$ser_num_id = $res1['server']-1;
$rcon = new Rcon($Servers_config[$ser_num_id][1], $Servers_config[$ser_num_id][8], $Servers_config[$ser_num_id][9], 3);

  if ($rcon->connect())
  {
    $res = $rcon->sendCommand("$cmd");
  }
  else
  {
    $echo_mass =  "Неизвестная ошибка, повторите попытку позже, или свяжитесь с админом!";
    echo'
    <div class="action_fon_100x100_b9" id="shadA1">
      <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
      </div>
    </div>


';
exit();
  }
  //echo $res;
  $res_str = substr($res,0,4);
  //echo $res_str;
  if("Gave" == $res_str)
  {
      $echo_mass =  "Успешно!";
      echo'
      <div class="action_fon_100x100_b9" id="shadA1">
        <div class="action_windows1" id="shadA">
  <h3>'.$echo_mass.'</h3>
        </div>
      </div>
  
  
  ';
      Inventar::removeItem($id_op,$coll_op);
      exit();
  }
  elseif($res_str =="No p")
  {
    $echo_mass =  "Для получения предмета, вы должны быть на сервере!";
    echo'
    <div class="action_fon_100x100_b9" id="shadA1">
      <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
      </div>
    </div>


';
    exit();
  }
  elseif($res_str =="111")
  {
    exit();
      
  }
else
{
  $echo_mass =  "Неизвестная ошибка, повторите попытку позже, или свяжитесь с админом!"; 
  echo'
  <div class="action_fon_100x100_b9" id="shadA1">
    <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
    </div>
  </div>


';
    exit();
}
?>