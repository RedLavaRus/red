<?php
class Show
{
    public  static  function way($file = 'index',$lay = 'layout',$folder = 'resources')
    {
        $file = $file.'.wei.php';
        $lay = $lay.'.wei.php';
        
        $seo = Seo::prints(DB::pdo());
        
        include CFG::adres().$folder.'/'.$file;
        include CFG::adres().$folder.'/'.$lay;
        
        
        return true;
    }
}


?>