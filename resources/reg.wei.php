<?php 
$mms = '';
if(isset($_POST['login']) && isset($_POST['pass']) 
&& isset($_POST['pass2']) && isset($_POST['mail']))
{

    $reg_auth = Reg::registr(DB::pdo(), $_POST['login'], $_POST['pass'],$_POST['pass2'], $_POST['mail']);
    if ($reg_auth =="sys")
    {
        $mms = 'Успешно';
        $res_auth = Auth::authriz(DB::pdo(), $_POST['login'],$_POST['pass'],1);
        header('Location: /lc',true, 301);
    }
    else
    {
        $mms = $reg_auth;
    }
}













$content='<div class="auth_form">
    <div class="auth_form_head">
    <div class="auth_form_head_l"><a href="/login">Авторизация</a></div>
        <div class="auth_form_head_l_activ">Регистрация</div>
    </div>

    '.$mms.'
    <form class="login_form" method="post" action="/reg/">
        <input type="text" name="login" placeholder="Введите Логин" class="login_form_input"><br>
        <input type="password" name="pass" placeholder="Введите пароль" class="login_form_input"><br>
        <input type="password" name="pass2" placeholder="Повторите пароль" class="login_form_input"><br>
        <input type="text" name="mail" placeholder="Введите почту" class="login_form_input"><br>
        <p>
            Нажимая кнопку зарегестрироваться, вы соглашаетесь с лицензионым соглашением и правилами проекта
        
        </p>
        <input type="submit"  value="Зарегестрироваться" class="login_form_but">
    </form>
    </div>
    ';
    ?>