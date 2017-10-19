<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/20
 * Time: 10:59
 */
if(isset($_GET['e']))
{
	echo "<script>alert('请选择属性');</script>";
}
require_once('config.php');
$id=$_GET['id'];
$sql="select * from tg_goods where id={$id}";
$sql2="select * from tg_style where class_id={$id}";
$goods=DB::getDB()->login($sql);
$style=DB::getDB()->sel($sql2);
if(isset($_GET['address']))
{
	$address=$_GET['address'];
    $smarty->assign('address',$address);
    $smarty->assign('goods',$goods);
	$smarty->assign('style',$style);
	$url="../";
	$smarty->assign('url',$url);
	$smarty->display('goodsinfo.tpl');
}
else
{
	$address='';
	$smarty->assign('address',$address);
    $smarty->assign('goods',$goods);
	$smarty->assign('style',$style);
	$url="../";
	$smarty->assign('url',$url);
	$smarty->display('goodsinfo.tpl');
}
