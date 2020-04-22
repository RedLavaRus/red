<?php
class Show
{
    public function way($file = 'index',$lay = 'layout',$folder = 'resources')
    {
        $file = $file.'.wei.php';
        $lay = $lay.'.wei.php';
        
       
        include CFG::adres().$folder.'/'.$file;
        include CFG::adres().$folder.'/'.$lay;
        
        
        return true;
    }
}


?>