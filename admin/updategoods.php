<?php
if(isset($_GET['f']))
{
  echo "<script>alert('修改成功');</script>";
}   
if(isset($_GET['s']))
{
	echo "<script>alert('删除属性成功')</script>";
}
if(isset($_GET['e']))
{
	echo "<script>alert('删除属性失败')</script>";
}
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET')
{
	$sql="select id,title,pid from tg_class";
	$arr=DB::getDB()->select($sql);
	$id=$_GET['id'];
	$sqls="select * from tg_goods where id={$id}";
	$arr1=DB::getDB()->login($sqls);
	$sql2="select * from tg_style where class_id= {$id}";
	$arr2=DB::getDB()->sel($sql2);
	//var_dump($arr1);
	      //var_dump($arr);
		  //die;
    //echo "<br>";
	$add=explode('.', $arr1['address']);
	$smarty->assign('arr',$arr);
	$smarty->assign('arr1',$arr1);
	$smarty->assign('arr2',$arr2);
	$smarty->assign('add',$add);
	$smarty->display('updategoods.tpl');
}
else
{
	$id=$_POST['id'];
	//var_dump($_FILES);
	   if($_FILES['idcard']['name'][0]!='' && $_FILES['idcard']['name'][1]==""){
                
                   //$arrInt=count($_FILES['idcard']['name']);
				   for ($i=0; $i <1 ; $i++) { 

					$name=$_FILES['idcard']['name'][$i];
					$namefile=$_FILES['idcard']['tmp_name'][$i];
				    $arr1=explode('.', $name);
				    $imgname[$i]=time().mt_rand(1,100000).'.'.$arr1[1];
				    //echo $imgname[$i];
				    //die;

				    $bool=move_uploaded_file($namefile,"../upload/".$imgname[$i]);
				     
				       }
				       $sql3="update tg_goods set pic='{$imgname[0]}' where id = {$id}";
                     DB::getDB()->query($sql3);
				   }
				   else if($_FILES['idcard']['name'][0]=='' && $_FILES['idcard']['name'][1]!="")
				   {
					   	   //$arrInt=count($_FILES['idcard']['name']);
						   for ($i=1; $i <2 ; $i++) { 

							$name=$_FILES['idcard']['name'][$i];
							$namefile=$_FILES['idcard']['tmp_name'][$i];
						    $arr=explode('.', $name);
						    //var_dump($arr);
						    $imgname[$i]=time().mt_rand(1,100000).'.'.$arr[1];

					        $bool=move_uploaded_file($namefile,"../upload/".$imgname[$i]);

					        
                     }
                     $sql3="update tg_goods set pic2='{$imgname[1]}' where id = {$id}";
	                        DB::getDB()->query($sql3);
				   }
				   else if($_FILES['idcard']['name'][0]!='' && $_FILES['idcard']['name'][1]!="")
				   {
					   	   $arrInt=count($_FILES['idcard']['name']);
						   for ($i=0; $i <$arrInt ; $i++) { 

							$name=$_FILES['idcard']['name'][$i];
							$namefile=$_FILES['idcard']['tmp_name'][$i];
						    $arr=explode('.', $name);
						    $imgname[$i]=time().mt_rand(1,100000).'.'.$arr[1];
                             //var_dump($arr);
					        $bool=move_uploaded_file($namefile,"../upload/".$imgname[$i]);
                        
					        
                     }
                     $sql3="update tg_goods set pic='{$imgname[0]}',pic2='{$imgname[1]}' where id = {$id}";
	                        DB::getDB()->query($sql3);
				   }
				   else{
				   	      /*$arrInt=count($_FILES['idcard']['name']);
						   for ($i=0; $i <$arrInt ; $i++) { 

							$name=$_FILES['idcard']['name'][$i];
							$namefile=$_FILES['idcard']['tmp_name'][$i];
						    $arr=explode('.', $name);
						    $imgname[$i]=time().mt_rand(1,100000).'.'.$arr[1];
                             //var_dump($arr);
					        $bool=move_uploaded_file($namefile,"../upload/".$imgname[$i]);
					    }*/
				   }
	$name=$_POST['user'];
	$price=$_POST['price'];
	$mun=$_POST['mun'];
	$address=implode('.',$_POST['address']) ;
	//$pic=$_POST;
	//$pic2=$_POST;
	$class_id=$_POST['class'];
	if(isset($_POST['style'])){
       $style=$_POST['style'];
       foreach ($style as $key => $value) {
       	$sql="insert into tg_style (stylename,class_id)values('{$value}',{$id})";
       	DB::getDB()->query($sql);
       }
	}
	  
	 if(!empty($_POST['styleup']))
	 {
	 	 $styleup=$_POST['styleup'];
		 $styleid=$_POST['styleid'];
		 //var_dump($styleup);
		 //var_dump($styleid);
		 for($i=0;$i<count($styleup);$i++)
		 {
		 	$sqlstyle="update tg_style set stylename='{$styleup[$i]}' where id={$styleid[$i]}";
		 	//echo $sql;
		 	DB::getDB()->query($sqlstyle);
		 }
	 }
	$content=$_POST['content'];
	$time=time();
	$sql2="update tg_goods set name='{$name}',price={$price},mun={$mun},address='{$address}',classid={$class_id},content='{$content}',uptimes={$time} where id={$id}";
    //var_dump($sql2);
	DB::getDB()->query($sql2);
	//echo "<script>alert('修改成功');</script>";
	header("location:updategoods.php?f=success&id={$id}");
}


/*$smarty->assign('arr1',$arr1);
$smarty->display('updategoods.tpl');*/

?>