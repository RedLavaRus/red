<?php
class Navigator
{
  //way($file = 'index',$lay = 'layout',$folder = 'resources')
  public static function index(){
    Show::way('index','layout');
  }
  public static  function shop(){
    Show::way('shop','layout');
  }
  public  static function servers(){
    Show::way('servers','layout');
  }
  public static  function trade(){
    Show::way('trade','layout');
  }  
  public static  function banlist(){
    Show::way('banlist','layout');
  }
  public static  function lc(){
    Show::way('lc','layoutlc');
  }
  public static  function lcinventar(){
    Show::way('lcinventar','layoutlc');
  }
  public  static function start(){
    Show::way('start','layout');
  }
  public static  function auth(){
    Show::way('auth','layoutauth');
  }
  public  static function reg(){
    Show::way('reg','layoutauth');
  }
  public static  function e404(){
    Show::way('e404','layouterror');
  }
  public static  function serversName($gets){
    Show::way('servers','layout',$gets);
  }

  public static  function servereOnline(){
    Show::way('onlineShow','layoutnone','','resources/pageAjaxShow');
  }
  
  










  public static  function test(){
    Show::way('test','layout');
  }
}


?>