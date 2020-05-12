<?php
$img =$_GET['img'];
$id_item=$_GET['id'];
$coll=$_GET['coll'];
$name=$_GET['name'];
echo '
<div class="action_fon_100x100_b9" id="shad1">
    <div class="action_windows" id="shad">
    <div id="results"></div>
        <div class="action_windows_head">'.$name.'</div>
        <div class="action_windows_body">
            <div class="action_windows_body_l1">
                <img src="/img/items/'.$img.'.png">
            </div>
            <div class="action_windows_body_l3">
                <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
                    <input type="hidden" class="action_windows_text_inp_big" name="id" value="'.$id_item.'">
                    <input type="text" class="action_windows_text_inp_big" name="coll" value="'.$coll.'">
                    <input  type="submit" value="Вывести" class="action_windows_but_inp_big">

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
          url: "/function/rcom",
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