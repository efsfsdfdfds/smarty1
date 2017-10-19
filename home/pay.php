<?php 
$array=$_POST['pay'];
var_dump($array);
$nn=count($arary);
for($i=0;$i<$nn;$i++)
{
	if($array[$i]!="")
	{
		echo $array[$i];
	}
}