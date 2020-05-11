<?php
/*
проверка авторизации
Проверка совпалдает ли ид предмета и ид в инвентаре

выдача предмета на сервер
если выдача прошла, то убрать предмет с инвентаря пользователя
*/
Auth::chek();
$id_op = $_GET['id'];
$coll_op = $_GET['col'];
$res1 = Inventar::ShowItem($id_op);
//print_r($res1);
if($res1['id'] != $id_op)
{
    echo "Предмет не найден!";
    exit();
}
if($res1['user_id'] != $_SESSION['id'])
{
    echo "не твоё!";
    exit();
}
if($res1['data_udaleniya'] != null)
{
    echo "Закончился!";
    exit();
}
if($coll_op > $res1['collich'])
{
    echo "У вас недостаточно предметов!";
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
    echo "Неизвестная ошибка, повторите попытку позже, или свяжитесь с админом!";
    exit();
  }
  //echo $res;
  $res_str = substr($res,0,4);
  //echo $res_str;
  if("Gave" == $res_str)
  {
      echo "Успешно!";
      Inventar::removeItem($id_op,$coll_op);
      exit();
  }
  elseif($res_str =="No p")
  {
    echo "Для получения предмета, вы должны быть на сервере!";
    exit();
  }
  elseif($res_str =="111")
  {
    exit();
      
  }
else
{
    echo "Неизвестная ошибка, повторите попытку позже, или свяжитесь с админом!";
    exit();
}
?>