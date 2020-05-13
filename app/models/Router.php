<?php
class Router
{
    public $status = false;
    public static function get($pattern,$func,$authR = 0)
    {

      $res_url = $_SERVER['REQUEST_URI'];
      $pattern1 = $pattern.'/';
      
      if($pattern == 'e404')
      {
        Show::way('e404','layouterror');
        return;
      }
      if($pattern == 'e428')
      {
        Show::way('e428','layouterror');
        return;
      }
      if($pattern == $res_url || $pattern1 == $res_url ){
        if($authR != 0 && (!isset($_SESSION['id'])))
        {
          Show::way('e428','layouterror');
          return;
        }
        $func = explode('@', $func);
        $cla_na = $func[0];
        $fun_na = $func[1];
        $cla_na::$fun_na();
        return "sys";
      }
      

    }
    public static function getVar($pattern,$func,$authR = 0)
    {
  
      $res_url = $_SERVER['REQUEST_URI'];
      $pattern1 = $pattern.'/';
      
      if($pattern == 'e404')
      {
        Show::way('e404','layouterror');
        return;
      }
      if($pattern == 'e428')
      {
        Show::way('e428','layouterror');
        return;
      }
      // надо сравнить $pattern и текущий параметр юрл.
      $url = explode('/', $pattern);
      $res_url = explode('/',$_SERVER['REQUEST_URI']);
      
      if(($url[1] ==  $res_url[1]) && $res_url[2] != '')
      {
        $url = explode('/', $pattern);
        if($url[2] == '?')
          {
            
        if($authR != 0 && (!isset($_SESSION['id'])))
        {
          Show::way('e428','layouterror');
          return;
        }
            $func = explode('@', $func);

            $cla_na = $func[0];
            $fun_na = $func[1];

            $cla_na::$fun_na($res_url[2]);
            return "sys";
          }
      }
    }
    public static function ajax($pattern,$func,$sl = 0,$col = 0,$authR = 0)
    {
          $res_url = explode('/',$_SERVER['REQUEST_URI']);
          $funct_names = explode('?', $res_url[2]);
          
          if ($res_url[1] == 'function' && $funct_names[0]==$sl) 
          {

        if($authR != 0 && (!isset($_SESSION['id'])))
        {
          Show::way('e428','layouterror');
          return;
        }

              $func = explode('@', $func);

              $cla_na = $func[0];
              $fun_na = $func[1];

              $cla_na::$fun_na();
      
          
      
              return "sys";
          }
    }
    public static function catalog($pattern,$func,$authR = 0)
    {
      
      $rdd= "";
      $xz = 0;
      $res_url = explode('/',$_SERVER['REQUEST_URI']);
      $pat = explode('/',$pattern);
      foreach($pat as $pt)
      {
        if($pat[$xz] != $res_url[$xz]) $rdd = "error";
        $xz++;
      }
      if($rdd == "")
      {
        if($authR != 0)
        {
          Show::way('e428','layouterror');
          return;
        }

        $func = explode('@', $func);

        $cla_na = $func[0];
        $fun_na = $func[1];

        $cla_na::$fun_na();
        return "sys";

      }
    }
}
?>