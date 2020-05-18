<header>
<nav class="line1_head_menu">
        <div class="line1_head_menu_logo"><a href="/">SkyVoxel</a></div>
        <div class="line1_head_menu_logo1"><a href="/shop/">Магазин</a></div>
        <div class="line1_head_menu_logo1"><a href="/servers/">Сервера</a></div>
        <div class="line1_head_menu_logo1"><a href="/trade/">Рынок</a></div>
        <div class="line1_head_menu_logo1"><a href="/banlist/">Бан лист</a></div>
 
                <?php
                    if(isset($_SESSION["id"]))
                    {
                ?>
        <div class="line1_head_menu_auth">
            <img src="/profile/avatar/default.jpeg" class="ava_l1" alt="avatarka">
            <div class="line1_head_menu_auth_text">
                Вы вошли как,<br>
                Логин<br>
                <div class="line1_head_menu_auth_text_1">Личный кабинет</div>

                </div>
        </div>
                <?php
                    }else{
                ?>
          <div class="line1_head_menu_auth">
            <div class="line1_head_menu_auth_text">

                <div class="line1_head_menu_auth_text_1"><a href="/login">Войти</a></div>
                
                <div class="line1_head_menu_auth_text_1"><a href="/reg">Регистрация</a></div>

                </div>
        </div>              

                <?php
                    }
                ?>
    </div>
    </header>