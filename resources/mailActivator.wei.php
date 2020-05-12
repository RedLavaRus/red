<?php

$kesThisMass = explode('#', $keysPage);
$res123 =  MailGeneatorSys::chek($kesThisMass[0]);
if($res123 == true )
{
    //syspend
    $echo_d = '
        <div class="mail_sys_res_box" id="target">
            <div class="mail_sys_res_box_mas_s">
            Вы успешно подтвердили почту!
            </div>

        </div>
    ';
}
else
{
    $echo_d = '
    <div class="mail_sys_res_box" id="target">
        <div class="mail_sys_res_box_mas_r">
        Ошибка при подтверждение почты!
        </div>

    </div>
    
    ';
}
$content = $echo_d;
?>