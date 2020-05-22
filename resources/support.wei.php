<?php
$msg=Functions::showSuppordZDAll();
$content = '
<div class="main_support_block">
    <div class="support_new_box">
    <div id="results"> </div>
                <form method="POST" action="/function/supportTo" enctype="multipart/form-data">
                Вид заявки<br>
                <select class="sup_it_sel" name="types">
                <option>Баг в лаунчере</option>
                <option>Баг в сайте</option>
                <option>Баг в игре</option>
                <option>Жалоба на читера</option>
                <option>Идеи и предложения</option>
                </select><br>
                Текст репорта<br>
                <textarea name="text" class="sup_it_text"></textarea><br>
                Ваши контакты(Вк, дискорд, скайп и т.д.)<br>
                <textarea name="contact" class="sup_it_text1"></textarea><br>
                Скриншот (при необходимлсти)<br>
                <input type="file"  id="inputfile" name="inputfile" class="sup_it_file">
                    <input  type="submit" value="Создать заявку" class="sup_it_but">

                </form>
    </div>
    <div class="support_old_box">
        '.$msg.'
    </div>

</div>



';
?>