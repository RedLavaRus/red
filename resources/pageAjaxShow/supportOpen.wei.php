<?php

Auth::chek();
$id_user=$_SESSION['id'];
$id_zd=$_GET['id'];
        $sth = DB::pdo()->prepare("SELECT * FROM `support` where (id = ? and user_id=?) LIMIT 1");
        $sth->execute(array($id_zd,$id_user));
        $array = $sth->fetch(PDO::FETCH_ASSOC);

        if($array['id']<100000) $dl='0';
        if($array['id']<10000) $dl='00';
        if($array['id']<1000) $dl='000';
        if($array['id']<100) $dl='0000';
        if($array['id']<10) $dl='00000';
        $namber_zd ='A-'.$dl.$array['id'];
        $msg ='<div class="action_fon_100x100_b9" id="shadA1">';
        $msg .='<div class="support_blo_zd_box1" id="shadA">';
        $msg .='<div class="support_blo_zd_title">Заявка номер ['.$namber_zd.'] </div>';
        $msg .='<div class="support_blo_zd_thems">'.$array['type_zd'].'.</div>';
        $msg .='<div class="support_blo_zd_text">'.$array['text'].'</div>';
        $msg .='<div class="support_blo_zd_thems">'.$array['status'].'.</div>';
        $msg .='<h3>Процесс</h3>';
        $msg .='<div class="support_blo_zd_thems">'.$array['comments'].'.</div>';
        $msg .='</div>';
        $msg .='</div>';
        $msg .='
        <script type="text/javascript" language="javascript">
$(document).mouseup(function (e)
{
    var container = $("#shadA");
    if ((!container.is(e.target) && container.has(e.target).length === 0) ) {
        $("#shadA1").fadeOut(600, function(){});
    }
});
        
</script>     ';

        echo $msg;

?>