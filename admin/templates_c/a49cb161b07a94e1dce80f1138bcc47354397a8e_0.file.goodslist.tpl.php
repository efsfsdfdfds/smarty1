<?php
/* Smarty version 3.1.30, created on 2017-09-19 03:42:03
  from "D:\phpStudy\WWW\smarty1\admin\web\goodslist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0920be2faf0_77936271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49cb161b07a94e1dce80f1138bcc47354397a8e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\admin\\web\\goodslist.tpl',
      1 => 1505792520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c0920be2faf0_77936271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2255959c0920be2faf4_33659147', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2255959c0920be2faf4_33659147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


     
     <div class="row">
      <div class="col-md-6">
                <button id='btn2'>默认排序</button>
                <button id='btn'>按时间排序</button>
                <button id='btn1'>按价格排序</button>
                <button id='btn3'>按库存数量排序</button>
      </div>
      <div>
          <form action="goodslist.php" method="get">
              <div class="input-group" style="margin-left: 10px">

                <input type="text" name='search' class="form-control" placeholder="Search for..." style="width: 80%">
                <span class="input-group-btn" style="margin-left:0px;float: left;">
                  <button class="btn btn-default" type="submit" >Go!</button>
                </span>
              </div>
          </form>
        
      </div>
    </div>
     <table id='tb' class="table table-bordered">
      <tr align="center" >
      	<th width="5%">序号</th>
      	<th width='10%'>类别</th>
      	<th width="10%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="25%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="25%" colspan="2">操作</th>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <tr align="center" >
      	  <td class="active" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
      	  <td class="warning" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
		  <td class="success" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
		  <td class="warning" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
		  <td class="danger" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['mun'];?>
</td>
		  <td class="info">图一：<img src="../upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="70px" height="70px">&nbsp;&nbsp;图二：<img src="../upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic2'];?>
" width="70px" height="70px"></td>
		  <td class="danger" style="line-height: 70px;"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['times']);?>
</td>
		  <td class="info" style="line-height: 70px;"><a href="updategoods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></td>
		  <td class="info" style="line-height: 70px;"><a href="del.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return del()">删除</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
  <?php echo '<script'; ?>
>
    function del()
    {
    	return confirm('确定要删除吗？');
    }
    btn.onclick=function()
    {
    	window.location.assign('timeOrder.php');
    }
    btn1.onclick=function()
    {
    	window.location.assign('priceOrder.php');
    }
    btn2.onclick=function()
    {
    	window.location.assign('goodslist.php');
    }
    btn3.onclick=function()
    {
    	window.location.assign('munOrder.php');
    }
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
