<?php  
 require_once('../DB/DB.class.php');
$id=$_GET['id'];
$sql="delete from tg_goods where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool)
{
	header("location:recycle.php?c=success");
}
else
{
	header("location:recycle.php?d=error");
}
?>