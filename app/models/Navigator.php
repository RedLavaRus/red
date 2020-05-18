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

  public static  function lcInventarItem(){
    Show::way('lcInventarItem','layoutlc');
  }
  public static  function lcInventarMoney(){
    Show::way('lcInventarMoney','layoutlc');
  }
  public static  function lcInventarS1(){
    Show::way('lcInventarS1','layoutlc');
  }
  public static  function lcInventarS2(){
    Show::way('lcInventarS2','layoutlc');
  }
  public static  function lcInventarS3(){
    Show::way('lcInventarS3','layoutlc');
  }
  public static  function lcInventarS4(){
    Show::way('lcInventarS4','layoutlc');
  }
  public static  function lcInventarS5(){
    Show::way('lcInventarS5','layoutlc');
  }
  public static  function lcInventarS6(){
    Show::way('lcInventarS6','layoutlc');
  }
  public static  function lcInventarS7(){
    Show::way('lcInventarS7','layoutlc');
  }
  public static  function lcInventarS8(){
    Show::way('lcInventarS8','layoutlc');
  }
  public static  function lcInventarS9(){
    Show::way('lcInventarS9','layoutlc');
  }
  public static  function lcInventarS10(){
    Show::way('lcInventarS10', 'layoutlc');
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
  public static  function e428(){
    Show::way('e428','layouterror');
  }
  public static  function rss(){
    Show::way('rss','layoutnone');
  }
  public static  function serversName($gets){
    Show::way('servers','layout',$gets);
  }
  public static  function mailActivator($gets){
    Show::way('mailActivator','layout',$gets);
  }

  public static  function servereOnline(){
    Show::way('onlineShow','layoutnone','','resources/pageAjaxShow'); 
  }
  public static  function servereShowMesActionInventar(){
    Show::way('ShowMesActionInventar','layoutnone','','resources/pageAjaxShow'); 
  }
  public static  function servereRcom(){
    Show::way('giveShow','layoutnone','','resources/pageAjaxShow');
  }
  public static  function servereShowMesActionMail(){
    Show::way('ShowMesActionMail','layoutnone','','resources/pageAjaxShow');
  }
  public static  function serveremailTo(){
    Show::way('mailTo','layoutnone','','resources/pageAjaxShow');
  }
  public static  function servereShowMesActionPassword(){
    Show::way('ShowMesActionPassword','layoutnone','','resources/pageAjaxShow');
  }
  public static  function serverepassTo(){
    Show::way('passTo','layoutnone','','resources/pageAjaxShow');
  }
  
  
  public static  function catalogBlander(){
    Show::way('catalogBlander','layoutcatalog');
  }
  










  public static  function test(){
    Show::way('test','layout');
  }
}


?>