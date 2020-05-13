<?php

Auth::chek();
$name = "Смена пароля";
echo '
<div class="action_fon_100x100_b9" id="shad1">
    <div class="action_windows_h1" id="shad">
    <div id="results"></div>
        <div class="action_windows_head">'.$name.'</div>
        <div class="action_windows_body">
            
            
                <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
                    <input type="password" class="action_windows_text_inp_big2" name="pass1" value="" placeholder="Старый пароль">
                    <input type="password" class="action_windows_text_inp_big2" name="pass2" value="" placeholder="Новый пароль">
                    <input type="password" class="action_windows_text_inp_big2" name="pass3" value="" placeholder="Новый пароль">
                    <input  type="submit" value="Сменить" class="action_windows_but_inp_big1">

                </form>
            
        </div>
    </div>


</div>

<script type="text/javascript" language="javascript">
 	function call() {
 	  var msg   = $("#formx").serialize();
        $.ajax({
          type: "POST",
          url: "/function/passTo",
          data: msg,
          success: function(data) {
            $("#results").html(data);
          },
          error:  function(xhr, str){
	    alert("Возникла ошибка: " + xhr.responseCode);
          }
        });
 
    }
</script>

';



?>