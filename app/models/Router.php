<?php
class Router
{
    public static function get($pattern,$func)
    {
      $res_url = $_SERVER['REQUEST_URI'];
      $pattern1 = $pattern.'/';
      
      if($pattern == $res_url || $pattern1 == $res_url ){
        $func = explode('@', $func);
        $cla_na = $func[0];
        $fun_na = $func[1];
        $cla_na::$fun_na();
      }

    }
   
}
?>