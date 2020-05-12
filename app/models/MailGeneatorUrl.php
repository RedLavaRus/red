<?php
class MailGeneatorUrl
{
    /*сгенерировать строку
    Добавить строку в бд
    вернуть строку для генерации письма

    */
    public static function gen($id = 0,$mail)
    {
        if($id == 0){$id = rand(0,999999);}
        $url = rand(0,999999);
        $url = md5($url.$id);
        MailGeneatorSys::addURL($url,$mail);
        return "http://".$_SERVER['HTTP_HOST']."/mailActivator/".$url."#target";
    }
}



?>