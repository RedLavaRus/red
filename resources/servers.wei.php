<?php
include CFG::adres()."/function/McServerConfig.php";
$res_url = explode('/',$_SERVER['REQUEST_URI']);
$servres_opis_info_dd_r='';
if (isset($res_url[2]) && $res_url[2]!= '') 
{
    include CFG::adres()."/function/McServerOpis.php";
}
//echo $on_col_server = 109;
$serv_echo1="
<div id='content'></div>  
      
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

 $opisanie_servera = '';
$content = '
 <div class="line2">'.
  $serv_echo1.
        '

    </div>
    '.$opisanie_servera. 
    $servres_opis_info_dd_r
    .'

    ';
?>