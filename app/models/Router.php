<?php
class Router
{
    public $status = false;
    public static function get($pattern,$func)
    {
      $res_url = $_SERVER['REQUEST_URI'];
      $pattern1 = $pattern.'/';
      
      if($pattern == 'e404')
      {
        Show::way('e404','layouterror');
        return;
      }
      if($pattern == $res_url || $pattern1 == $res_url ){
        $func = explode('@', $func);
        $cla_na = $func[0];
        $fun_na = $func[1];
        $cla_na::$fun_na();
        return "sys";
      }
      

    }
    public static function getVar($pattern,$func)
    {
      $res_url = $_SERVER['REQUEST_URI'];
      $pattern1 = $pattern.'/';
      
      if($pattern == 'e404')
      {
        Show::way('e404','layouterror');
        return;
      }
      $url = explode('/', $pattern);
      if($url[2] == '?')
      {
        $url = explode('/', $pattern);
        $res_url = explode('/',$_SERVER['REQUEST_URI']);
        $func = explode('@', $func);

        $cla_na = $func[0];
        $fun_na = $func[1];

        $cla_na::$fun_na($res_url[2]);
        return "sys";
      }
      

    }
   
}
?>