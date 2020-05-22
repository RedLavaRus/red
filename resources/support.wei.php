<?php
$msg=Functions::showSuppordZDAll();
$content = '
<div class="main_support_block">
    <div class="support_new_box">
    <div id="results"> </div>
                <form method="post" enctype="multipart/form-data" id="simplecheckout_form">
                Вид заявки<br>
                <select class="sup_it_sel" name="types">
                <option>Баг в лаунчере</option>
                <option>Баг в сайте</option>
                <option>Баг в игре</option>
                <option>Жалоба на читера</option>
                <option>Идеи и предложения</option>
                </select><br>
                Текст репорта<br>
                <textarea name="text" id="text" class="sup_it_text"></textarea><br>
                Ваши контакты(Вк, дискорд, скайп и т.д.)<br>
                <textarea name="contact" id="contact" class="sup_it_text1"></textarea><br>
                Скриншот (при необходимлсти)<br>
                <input type="file"  id="inputfile" name="inputfile" class="sup_it_file">
                    

                </form>
                <input  type="submit" value="Создать заявку" class="sup_it_but" id="go_on">
    </div>
    <div class="support_old_box">
        '.$msg.'
    </div>

</div>

<script type="text/javascript" language="javascript">
$(function() {
    $("#go_on").click(function(){
 
        var data = jQuery("#simplecheckout_form").find("input,select,textarea").serialize();
 
//--console.debug(data);
 
 
        var fd = new FormData();
        fd.append("types", $("#contact")[0].value);
        fd.append("text", $("#text")[0].value);
        fd.append("contact", $("#contact")[0].value);
        fd.append("inputfile", $("#inputfile")[0].files[0]);
              $.ajax({
                type: "POST",
                url:  "/function/supportTo", 
                data: fd,
                processData: false,
                contentType: false,
                dataType: "text",             
                success: function(data){
                    $("#results").html(data);
                }
              });
            });
          });    
          
          $(document).mouseup(function (e)
{
    var container = $("#shadA");
   
        if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $("#shadA1").fadeOut(600, function(){window.location.reload();});
        
        
        
        
        
    }
});
        
</script>
';
?>