<?php 
require_once('config.php');
echo $gid=$_GET['gid'];
echo $id=$_GET['id'];
$sql="delete from tg_style where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool)
{
	header("location:updategoods.php?id={$gid}&s=success");
}
else{
	header("location:updategoods.php?e=error");
}
?>