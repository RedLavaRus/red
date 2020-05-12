<?php

Auth::chek();
$name = "Подтверждение электронной почты";
$mail="mail@mail.com";
echo '
<div class="action_fon_100x100_b9" id="shad1">
    <div class="action_windows" id="shad">
    <div id="results"></div>
        <div class="action_windows_head">'.$name.'</div>
        <div class="action_windows_body">
            
            <div class="action_windows_body_l3">
                <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
                    <input type="text" class="action_windows_text_inp_big1" name="mail" value="'.$mail.'">
                    <input  type="submit" value="Подтвердить" class="action_windows_but_inp_big">

                </form>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript" language="javascript">
 	function call() {
 	  var msg   = $("#formx").serialize();
        $.ajax({
          type: "POST",
          url: "/function/mailTo",
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