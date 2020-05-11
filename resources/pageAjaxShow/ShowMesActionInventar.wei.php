<?php
$img =$_GET['img'];
$id_item=$_GET['id'];
$coll=$_GET['coll'];
$name=$_GET['name'];
echo '
<div class="action_fon_100x100_b9" id="shad1">
    <div class="action_windows" id="shad">
    
        <div class="action_windows_head">'.$name.'</div>
        <div class="action_windows_body">
            <div class="action_windows_body_l1">
                <img src="/img/items/'.$img.'.png">
            </div>
            <div class="action_windows_body_l3">
                <form method="get" action="'.$id_item.'">
                    <input type="text" class="action_windows_text_inp_big" value="'.$coll.'">
                    <input type="button" value="Вывести" class="action_windows_but_inp_big">

                </form>
            </div>
        </div>
    </div>


</div>



';


?>