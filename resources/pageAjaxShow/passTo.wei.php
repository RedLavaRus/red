<?php

Auth::chek();
if(!isset($_POST['pass1'])){ echo "Ошибка!"; exit();}
if(!isset($_POST['pass2'])){ echo "Ошибка!"; exit();}
if(!isset($_POST['pass3'])){ echo "Ошибка!"; exit();}

$resu = Auth::chekPass($_POST['pass1'],$_POST['pass2'],$_POST['pass3']);
if($resu == 'sys')
{
    $echo_mass = "Пароль успешно сменен";
}
else
{
    $echo_mass =  $resu;
}
echo '
<div class="action_fon_100x100_b9" id="shadA1">
  <div class="action_windows1" id="shadA">
<h3>'.$echo_mass.'</h3>
  </div>
</div>


';
?>