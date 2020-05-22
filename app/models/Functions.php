<?php
class Functions{
    public  static  function showInsupport($time,$col)
    {
        $user_id=$_SESSION['id'];
        $sth = DB::pdo()->prepare("SELECT * FROM `support` where (date_create = ? and user_id=?)");
        $dd=0;
        $sth->execute(array($time,$user_id));
        while($array = $sth->fetch(PDO::FETCH_ASSOC))
        {
            $dd++;
        }
        if($dd >= $col)
        {
            return 'full';
        }
        else
        {
            return 'ok';
        }
        
    }
    public  static  function validFile($file = NULL)
    {
        if(!is_file($file)) return false;
 
        if(!$data = getimagesize($file) or !$filesize = filesize($file)) return false;
     
        $extensions = array(1 => 'gif',     2 => 'jpg',
                            3 => 'png',     4 => 'swf',
                            5 => 'psd',     6 => 'bmp',
                            7 => 'tiff',    8 => 'tiff',
                            9 => 'jpc',     10 => 'jp2',
                            11 => 'jpx',    12 => 'jb2',
                            13 => 'swc',    14 => 'iff',
                            15 => 'wbmp',   16 => 'xbmp');
     
        $result = array('width'     =>  $data[0],
                        'height'    =>  $data[1],
                        'extension' =>  $extensions[$data[2]],
                        'size'      =>  $filesize,
                        'mime'      =>  $data['mime']);
     
        return $result;
    }
    public  static  function createSuppordZD($time,$type_zd,$text,$contacts,$filename)
    {

        $user_id=$_SESSION['id'];
        $status='new';
        $comments ='Создана '.$time;
        //INSERT INTO `support` (`id`, `user_id`, `date_create`, `type_zd`, `text`, `contacts`, `file`, `status`, `comments`) VALUES (NULL, '', '', '', '', NULL, NULL, 'new', NULL)
        $sth1 = DB::pdo()->prepare("INSERT INTO `support` SET 
        `user_id` = ?, 
        `date_create` = ?,
        `type_zd` = ?,
        `text` = ?,
        `file` = ?,
        `contacts` = ?,
        `status` = ?,
        `comments` =?
        "
        );
        $sth1->execute(array($user_id,$time,$type_zd,$text,$filename,$contacts,$status,$comments));
    }
    public  static  function showSuppordZDAll($max = 30)
    {
        $msg = '';
        $ajs ='';
        $dd=0;
        $user_id = $_SESSION['id'];
        $sth = DB::pdo()->prepare("SELECT * FROM `support` where (user_id = ? and status!=?)");
        $sth->execute(array($user_id,"delete"));
        while($array = $sth->fetch(PDO::FETCH_ASSOC))
        {

            if($array['id']<100000) $dl='0';
            if($array['id']<10000) $dl='00';
            if($array['id']<1000) $dl='000';
            if($array['id']<100) $dl='0000';
            if($array['id']<10) $dl='00000';
            $namber_zd ='A-'.$dl.$array['id'];
            $msg .='<div class="support_blo_zd_box">';
            $msg .='<div class="support_blo_zd_title">Заявка номер ['.$namber_zd.'] <a id="open'.$array['id'].'">(Открыть)</a><a id="delete'.$array['id'].'"> (Удалить)</a></div>';
            $msg .='<div class="support_blo_zd_thems">'.$array['type_zd'].'.</div>';
            $msg .='<div class="support_blo_zd_text">'.$array['text'].'</div>';
            $msg .='<div class="support_blo_zd_thems">'.$array['status'].'.</div>';
            $msg .='</div>';
            $ajs .='
            $("#open'.$array['id'].'").click(function() {    
                $.ajax({
                    url: "/function/supportOpen/?id='.$array['id'].'",
                    cache: false,
                    success: function(html){
                        $("#results").html(html);
                    }
                });
            });
            $("#delete'.$array['id'].'").click(function() {    
                $.ajax({
                    url: "/function/supportDelete/?id='.$array['id'].'",
                    cache: false,
                    success: function(html){
                        $("#results").html(html);
                    }
                });
                window.location.reload();
            });
';
            $dd++;
            if($dd == $max) break;
        }
        $adj='<script type="text/javascript" language="javascript">'. $ajs."</script>";
        $msg.=$adj;
        if ($dd!=0) 
        {
            return $msg;
        }
        else
        {
            return 'История обращений пуста!';
        }
    }
}


?>