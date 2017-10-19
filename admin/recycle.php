<?php 
	
	if(isset($_GET['b']))
	{
		echo "<script>alert('还原失败')</script>";
	} 
	if(isset($_GET['c']))
	{
		echo "<script>alert('清空成功')</script>";
	} 
	if(isset($_GET['d']))
	{
		echo "<script>alert('清空失败')</script>";
	} 
  require_once('config.php');
  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.address,tg_goods.content,tg_goods.pic,tg_goods.pic2,tg_goods.classid,tg_goods.times,tg_goods.status,tg_class.title,tg_class.pid from tg_goods inner join tg_class on tg_goods.classid=tg_class.id where status=0 order by tg_goods.id asc";
  $arr=DB::getDB()->sel($sql);
  $smarty->assign('arr',$arr);
  $smarty->display('recycle.tpl');
?>