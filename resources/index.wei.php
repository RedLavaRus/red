<?php
//echo $on_col_server = 109;
$serv_echo1="
 
      
<script>  
    function show()  
    {  
        $.ajax({  
            url: '/function/online/',  
            cache: false,  
            success: function(html){  
                $('#content').html(html);  
            }  
        });  
    }  
  
    $(document).ready(function(){  
        show();  
        setInterval('show()',10000);  
    });  
</script>  

";
$content = '
 <div class="line2"><div id="content"></div> '.
  $serv_echo1.
        '

    </div>
    <div class="line3">
        <div class="line3_head">
            Боевой пропуск
        </div>
        <div class="news_baner">
            <div class="news_baner_item" >

                <div class="news_item"  id="news1" style="position: absolute;"><img src="/img/news/news.png"></div>


            </div>
        </div>
    </div>
    <div class="line4">
        <div class="line3_head">
            Голосуй
        </div>
        <div class="block_golosovaniya">
            <div class="block_golosovaniya_item">
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="name_top_gol_proj">McTop</div>
                <div class="name_top_gol_proj_button">Голосовать</div>
            </div>
            <div class="block_golosovaniya_item">
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="name_top_gol_proj">McTop</div>
                <div class="name_top_gol_proj_button">Голосовать</div>
            </div>
            <div class="block_golosovaniya_item">
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="name_top_gol_proj">McTop</div>
                <div class="name_top_gol_proj_button">Голосовать</div>
            </div>
            <div class="block_golosovaniya_item">
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="name_top_gol_proj">McTop</div>
                <div class="name_top_gol_proj_button">Голосовать</div>
            </div>
        </div>
        <div class="line3_head">
            ТОП Голосующих
        </div>
        <div class="block_golosovaniya_top">
            <div class="block_golosovaniya_top2">
                <div class="namber">#2</div>
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="namber">Sparkly</div>
            </div>
            <div class="block_golosovaniya_top1">
                <div class="namber">#1</div>
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="namber">JaligWei</div>
            </div>
            <div class="block_golosovaniya_top2">
                <div class="namber">#3</div>
                <div class="block_golosovaniya_item_img">
                    <img src="/profile/avatar/default.jpeg">
                </div>
                <div class="namber">Paver</div>
            </div>
        </div>
        <div class="block_golosovaniya_opisa">
            <p>
                Значимость этих проблем настолько очевидна, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Равным образом рамки и место обучения кадров играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации модели развития. С другой стороны рамки и место обучения кадров представляет собой интересный эксперимент проверки направлений прогрессивного развития. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.

                Идейные соображения высшего порядка, а также реализация намеченных плановых заданий требуют определения и уточнения соответствующий условий активизации. Разнообразный и богатый опыт реализация намеченных плановых заданий требуют определения и уточнения направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации форм развития.
            </p>
        </div>
    </div>
    ';
    
?>