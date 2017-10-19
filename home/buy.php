<?php
if(isset($_GET['s']))
{
	echo "<script>alert('加入成功');</script>";
}
require_once('config.php');
//var_dump($_POST);
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='POST')
{
	$goodsid=$_POST['ids'];
	$goodsnum=$_POST['num'];
	$goodsprice=$_POST['price'];
	$addr=$_POST['address'];
	$address=implode('.',$_POST['address']);
	if(isset($_POST['style']))
	{
		$goodsstyle=implode('.',$_POST['style']);
        if(isset($_SESSION['userid']))
        {
        	$userid=$_SESSION['userid'];
        	$sql="insert into tg_buy(goodsID,goodsnum,userid,address,goodsstyle)values({$goodsid},{$goodsnum},{$userid},'{$address}','{$goodsstyle}')";
        	$bool=DB::getDB()->query($sql);
        	if($bool)
        	{
        		
        		header('location:buy.php?s=success');
        	}
        	else
        	{
        		echo "<script>alert('加入失败');</script>";
        	}
        }
        else
        {
        	
        	header('location:login.php?f=ddd');
        }
	}
	else
	{
		
		header("location:goodsinfo.php?id={$goodsid}&address={$addr[3]}&e=error");
		return false;
	}
}
else{
	if(isset($_SESSION['userid']))
	{
		$userid=$_SESSION['userid'];
		$sql="select tg_buy.id,tg_buy.goodsID,tg_buy.goodsnum,tg_buy.userid,tg_buy.address,tg_buy.goodsstyle,tg_goods.name,tg_goods.price,tg_goods.pic from tg_buy inner join tg_goods on tg_buy.goodsID=tg_goods.id where userid={$userid}";
		$buyArr=DB::getDB()->sel($sql);
		$smarty->assign('buyArr',$buyArr);
	}
	else{
		echo "<script>alert('亲，你还没有登录,请登录');window.history.back();</script>";
	}
	$smarty->display('buy.tpl');
}