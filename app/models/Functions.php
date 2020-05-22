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
}


?>