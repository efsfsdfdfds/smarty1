<?php
/* Smarty version 3.1.30, created on 2017-09-19 03:38:40
  from "D:\phpStudy\WWW\smarty1\admin\web\updategoods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c09140db91e8_67219488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e0f3be1ef8e30adba99088c30088b478a6c08bb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\admin\\web\\updategoods.tpl',
      1 => 1505792317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c09140db91e8_67219488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1624259c09140d95f53_53210557', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2683859c09140db5360_58443553', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2926259c09140db91e0_14803504', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_1624259c09140d95f53_53210557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
 src='../static/jquery.validate.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../static/jsAddress.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../static/bootstrap/js/fileshow.js"> <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_2683859c09140db5360_58443553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <form id='form' action="" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
            <td class="active" style="width: 120px">
              <select class="form-control" style="width: 120px" name='class'>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['arr1']->value['classid'];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {
echo 'selected';
} else {
echo '';
}?>><?php echo str_repeat('->',$_smarty_tpl->tpl_vars['v']->value['num']);
echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </select>
          </td>

        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['id'];?>
"
        <h3>商品的添加</h3>
        <span>商品名称</span>
        <input type="text" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['name'];?>
"  name="user" style="width:50%" >

        <button type="button"  onclick="addstyle()"   class=" btn btn-warning">添加属性</button>
        <p id="p1"></p>
        <?php echo '<script'; ?>
 type="text/javascript">
           function addstyle(){
              hhh = '<input type="text" name="style[]" class="aa"  value="" style="width:20%"/>';
              
                  document.getElementById("p1").innerHTML+=hhh+"属性<br/>";

                 }
        <?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['stylename'];?>
" class='aa' name='styleup[]' style="width:20%"><input type="hidden" name="styleid[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">&nbsp;&nbsp;属性&nbsp;&nbsp;<a href="delss.php?id=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
&gid=<?php echo $_smarty_tpl->tpl_vars['arr1']->value['id'];?>
" onclick="return del()">删除属性</a><br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <span>商品封面图</span>
        <input type="file" name="idcard[]" onchange='jjj(this)'>
        <div id="preview">
            <img id="imghead" width=100 height=100 border=0 src='../upload/<?php echo $_smarty_tpl->tpl_vars['arr1']->value['pic'];?>
'>
         </div>
         <span>商品封面图</span>
        <input type="file" name="idcard[]" onchange='jjjj(this)'>
        <div id="previews">
            <img id="imghead" width=100 height=100 border=0 src='../upload/<?php echo $_smarty_tpl->tpl_vars['arr1']->value['pic2'];?>
'>
         </div>
        <span>商品的价格</span>
        <input type="text" class="form-control required" value='<?php echo $_smarty_tpl->tpl_vars['arr1']->value['price'];?>
' name="price" style="width:20%">
        <span>商品的库存数量</span>
        <input type="text" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['mun'];?>
" name="mun" style="width:20%">
        <span>商品的产地</span>
        

        <div>
          省：<select id="cmbProvince" name="address[]" ></select>
          市：<select id="cmbCity" name="address[]" ></select>
          区：<select id="cmbArea" name="address[]" ></select>
          <?php echo '<script'; ?>
 type="text/javascript">
            addressInit('cmbProvince', 'cmbCity', 'cmbArea', '<?php echo $_smarty_tpl->tpl_vars['add']->value[0];?>
', '<?php echo $_smarty_tpl->tpl_vars['add']->value[1];?>
', '<?php echo $_smarty_tpl->tpl_vars['add']->value[2];?>
');
            addressInit('Select1', 'Select2', 'Select3');
          <?php echo '</script'; ?>
>

          <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['add']->value[3];?>
' placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%" >
        </div>
 


        <?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="height: 800px;">
        <?php echo $_smarty_tpl->tpl_vars['arr1']->value['content'];?>

        <?php echo '</script'; ?>
>
    <input type="submit" value='修改'>
  </form>
    <!-- 配置文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
    <!-- 编辑器源码文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
    <!-- 实例化编辑器 -->
    <?php echo '<script'; ?>
 type="text/javascript">
        var ue = UE.getEditor('container',{
          autoFloatEnabled: true,

          autoHeight: false
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2926259c09140db91e0_14803504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
             $("#form").validate({
                  rules:{
                    user:{
                       required:true,
                       rangelength:[2,50]
                    },
                    price:{
                       required:true,
                       number:true
                    },
                    mun:{
                       required:true,
                       digits:true
                    }
                  },
                  messages:{
                        user:{
                          required:'商品的名称不能为空', 
                          rangelength:'商品的长度必须是2-50个字符直接'
                        },
                        price:{
                          required:'必须要填写',
                          number:'商品的价格格式不正确'
                        },
                        mun:{
                          required:'必须要填写数量',
                          digits:'商品的数量必须是整数'
                        }
                  }

             });
        })
      

        function del()
        {
          return confirm('确定删除此条商品属性？');
        }
    <?php echo '</script'; ?>
>
   
 
<?php
}
}
/* {/block 'js'} */
}
