<?php 
require_once('../DB/DB.class.php');
$id=$_GET['id'];
$sql="update tg_goods set status=1 where id={$id}";
$bool=DB::getDB()->query($sql);
//var_dump($bool);
if($bool)
{
	header("location:goodslist.php?c=success");
}
else
{
	header("location:recycle.php?b=error");
}
?>