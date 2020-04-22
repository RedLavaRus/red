<?php
class Navigator
{
  //way($file = 'index',$lay = 'layout',$folder = 'resources')
  public function index(){
    Show::way('index','layout');
  }
  public function shop(){
    Show::way('shop','layout');
  }
  public function servers(){
    Show::way('servers','layout');
  }
  public function trade(){
    Show::way('trade','layout');
  }  
  public function banlist(){
    Show::way('banlist','layout');
  }
  public function lc(){
    Show::way('lc','layout');
  }
  public function start(){
    Show::way('start','layout');
  }
  public function test(){
    Show::way('test','layout');
  }
}


?>