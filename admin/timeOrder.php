<?php  
 require_once('config.php');
 $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.address,tg_goods.content,tg_goods.pic,tg_goods.pic2,tg_goods.classid,tg_goods.times,tg_goods.status,tg_class.title,tg_class.pid from tg_goods inner join tg_class on tg_goods.classid=tg_class.id where status=1 order by tg_goods.times desc";
 $arr=DB::getDB()->sel($sql);
  $smarty->assign('arr',$arr);
  $smarty->display('goodslist.tpl');
?>