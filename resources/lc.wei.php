<?php
$content = '
<div class="answer" id="content1"></div>
<h2>Управление акаунтом</h2>

<div class="lc_main_content_box">


    <div class="lc_main_content_el">
    <div class="lc_main_content_el_head">Баланс</div>
    <div class="nlc_main_content_el_button">Пополнить</div>  
    </div>


    <div class="lc_main_content_el">
    <div class="lc_main_content_el_head">Почта</div>
    <a id="senMail"><div class="nlc_main_content_el_button">Подтвердить</div>   </a>   
    </div>


    <div class="lc_main_content_el">
    <div class="lc_main_content_el_head">Пароль</div>
    <div class="nlc_main_content_el_button">Сменить</div>    
    </div>
</div>



<h2>Сервера</h2>
<div class="lc_main_content_box">
    <div class="lc_main_content_el">
        <div class="lc_main_content_el_head">Name_server</div>
        <div class="lc_main_content_el_text">Уровень: 7</div>
        <div class="lc_main_content_el_text">Клан: Admin</div>
        <div class="lc_main_content_el_text">Убийств: 8</div>
        <div class="lc_main_content_el_text">Времени на сервере:<br> 7 часов</div>
        <div class="nlc_main_content_el_button">Телепорт на спавн</div>
    </div>


    <div class="lc_main_content_el">
        <div class="lc_main_content_el_head">Name_server</div>
        <div class="lc_main_content_el_text">Уровень: 7</div>
        <div class="lc_main_content_el_text">Клан: Admin</div>
        <div class="lc_main_content_el_text">Убийств: 8</div>
        <div class="lc_main_content_el_text">Времени на сервере:<br> 7 часов</div>
        <div class="nlc_main_content_el_button">Телепорт на спавн</div>
    </div>



    <div class="lc_main_content_el">
        <div class="lc_main_content_el_head">Name_server</div>
        <div class="lc_main_content_el_text">Уровень: 7</div>
        <div class="lc_main_content_el_text">Клан: Admin</div>
        <div class="lc_main_content_el_text">Убийств: 8</div>
        <div class="lc_main_content_el_text">Времени на сервере:<br> 7 часов</div>
        <div class="nlc_main_content_el_button">Телепорт на спавн</div>
    </div>


    <div class="lc_main_content_el">
        <div class="lc_main_content_el_head">Name_server</div>
        <div class="lc_main_content_el_text">Уровень: 7</div>
        <div class="lc_main_content_el_text">Клан: Admin</div>
        <div class="lc_main_content_el_text">Убийств: 8</div>
        <div class="lc_main_content_el_text">Времени на сервере:<br> 7 часов</div>
        <div class="nlc_main_content_el_button">Телепорт на спавн</div>

    </div>





</div>
<script>
$("#senMail").click(function(){  
    $.ajax({  
        url:"/function/ShowMesActionMail", 
        cache: false,  
        success: function(html){  
            $("#content1").html(html);  
        }  
    });  
});  
$(document).mouseup(function (e)
{
    var container = $("#shad");
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $("#shad1").fadeOut(600, function(){});
    }
}); 
$(document).mouseup(function (e)
{
    var container = $("#shadA");
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $("#shadA1").fadeOut(600, function(){});
    }
});


</script>
';
?>