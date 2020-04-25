<?php
if((isset($_POST['login']) && isset($_POST['pass']))&&($_POST['login']!='' && $_POST['pass']!="") )
{
    $res_auth = Auth::authriz(DB::pdo(), $_POST['login'],$_POST['pass'],1);
    if($_SESSION['id'] != ''){
        $mas="syspend";
    }
}
?>
<?php 
if((isset($_SESSION['id'])) && $_SESSION['id'] != ''){
    $content='
    
    <div class="auth_form">
    <div class="auth_form_head">
        <h3>Вы авторизованы!</h3>
    </div>
    </div>
    ';
    header('Location: /lc',true, 301);
}
else
{
    $content='<div class="auth_form">
    <div class="auth_form_head">
        <div class="auth_form_head_l_activ">Авторизация</div>
        <div class="auth_form_head_l"><a href="/reg">Регистрация</a></div>
    </div>


    <form class="login_form" method="post" action="/login/">
        <input type="text" name="login" placeholder="Введите Логин" class="login_form_input"><br>
        <input type="password" name="pass" placeholder="Введите пароль" class="login_form_input"><br>
        
        <input type="submit"  value="Войти" class="login_form_but">
    </form>
    </div>
    ';
};  ?>