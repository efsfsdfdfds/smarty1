<?php
/* Smarty version 3.1.30, created on 2017-09-22 16:09:48
  from "D:\phpStudy\WWW\smarty1\web\buy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c4c54c57d955_67289168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a87e61cfa96535307aa1fb8619a4772643adcef0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\buy.tpl',
      1 => 1506053916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c4c54c57d955_67289168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_389859c4c54c56d6e1_13534672', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2250759c4c54c57a1e7_38679616', "js");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_389859c4c54c56d6e1_13534672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<table class="table">
		<tr align="center">
			<td style="width:5%">全选<input type="checkbox" name="" class="all"></td>
			<td style="width:25%">商品的名称</td>
			<td style="width:20%">型号</td>
			<td style="width:10%">商品的单价</td>
			<td style="width:10%">商品的数量</td>
			<td style="width:10%">商品的图片</td>
			<td style="width:10%">用户的地址</td>
			<td style="width:10%">合计的价格</td>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buyArr']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
           <tr align="center">
			<td class="success" ><input style="display:block;margin-top:25px;" class="ss" type="checkbox" name="" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"></td>
			<td class="warning" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
||<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
</td>
			<td class="success" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['goodsstyle'];?>
</td>
			<td class="active" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['price'];?>
</td>
			<td class="success"><a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jian()">-&nbsp;</a><input style="display:block;margin-top:20px;"  type="text" name="num" class="num1" onchange="updete(<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
,this.value,<?php echo $_smarty_tpl->tpl_vars['vv']->value['price'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['goodsnum'];?>
" size="1"><a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jia()">+</a></td>
			<td class="warning" ><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['vv']->value['pic'];?>
" width="70px" height="70px"></td>
			<td class="danger"><?php echo $_smarty_tpl->tpl_vars['vv']->value['address'];?>
</td>
			<td class="info" id="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['price']*$_smarty_tpl->tpl_vars['vv']->value['goodsnum'];?>
</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<p>总价格</p>
	<input type="button" name="" value="去结算">
</div>
<?php
}
}
/* {/block "content"} */
/* {block "js"} */
class Block_2250759c4c54c57a1e7_38679616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function jian(i)
        {
            var aa=document.getElementsByClassName("num1");
            for(var i=0;i<aa.length;i++)
            {
                document.getElementsByClassName("num1")[i].value=aa[i].value-=1;
            }
           //alert(typeof(aa));
           /*num.value-=1
           if(num.value<1)
           {
            num.value=1;
           }*/
        }
        
        function jia()
        {
            var aa=document.getElementsByClassName("num1");
            for(var i=0;i<aa.length;i++)
            {
                var dd=parseInt(aa[i].value)+1;
                document.getElementsByClassName("num1")[i].value=dd;
            }

        }
    	function updete(id,value,price)
    	{     
    		$.ajax({
    			type:'post',
    			url:'updatebuy.php',
                data:{
                	ids:id,
                	values:value,
                	prices:price
                },
                success:function(data)
                {
                	var num=JSON.parse(data);
                	//window.location.assign('buy.php');
                	$("#"+id).html(num);
                },
                beforeSend:function()
                {
                	var r=/^\+?[1-9][0-9]*$/;
                	var flog=r.test(value);
                	if(flog)
                	{
                		return true;
                	}
                	else{
                		alert('商品数量出错');
                		return false;
                	}
                }
    		});
    	}
        
        //全选和反选
        function aa()
        {
            var all = document.getElementsByClassName('all');
            var sss = document.getElementsByClassName('ss');
            for(var i=0;i<sss.length;i++)
            {
                if(sss['i'].checked==false)
                {
                    sss[i].checked=true;
                }
                else{
                    sss[i].checked=false;
                }
            }
        }
        function mybuy(){
            var sss=document.getElementsByClassName('ss');
            var aas=new Array();
            for(var i=0;i<sss.length;i++)
            {
                if(sss[i].checked)
                {
                    aas[i]=sss[i].value;
                }
            }
            $.ajax({
                type:'post',
                url:'pay.php',
                data:{
                    pay:aas
                },
                success:function(data){
                    alert(data);
                },
                beforeSend:function()
                {
                    if(aas='')
                    {
                        alert('请选择商品');
                        return false;
                    }
                }
            });
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
