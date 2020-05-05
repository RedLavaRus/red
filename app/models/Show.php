<?php
class Show
{
    public  static  function way($file = 'index',$lay = 'layout',$gets ='',$folder = 'resources',$folderLayout = 'resources')
    {
        if ($gets =='') 
        {
            $file = $file.'.wei.php';
            $lay = $lay.'.wei.php';        
            $seo = Seo::prints(DB::pdo());        
            include CFG::adres().$folder.'/'.$file;
            include CFG::adres().$folderLayout.'/'.$lay;         
            return true;
        }
        else
        {
            $file = $file.'.wei.php';
            $lay = $lay.'.wei.php';        
            $seo = Seo::prints(DB::pdo()); 
            $keysPage = $gets;
            include CFG::adres().$folder.'/'.$file;
            include CFG::adres().$folderLayout.'/'.$lay;         
            return true;

        }
    }
}


?>