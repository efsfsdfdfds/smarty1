<?php 
  require_once('libs/Smarty.class.php');
  require_once('DB/DB.class.php');
  $smarty=new Smarty();
  session_start();
  $sqlgoods="select * from tg_goods where status=1 order by times desc limit 0,6";
  $goods=DB::getDB()->sel($sqlgoods);
  //var_dump($goods);
  $smarty->template_dir='web';
  $smarty->assign('url','');
  $smarty->assign('goods',$goods);
  $smarty->display('index.tpl');
 ?>