<?php
/* Smarty version 3.1.30, created on 2017-10-07 01:11:44
  from "D:\phpStudy\WWW\smarty1\web\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d7b950164079_53974018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217deacff741209ac7c56515ed326ccd841856c1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\login.tpl',
      1 => 1507309823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59d7b950164079_53974018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202159d7b95015afa7_45509414', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2164259d7b9501620f6_08932363', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1202159d7b95015afa7_45509414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class='col-md-4'></div>
  <div class="col-md-4">
    <div style="width:500px;height:400px;border:1px solid skyblue;border-radius: 20px;background:url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/biankuang5.jpg');background-size:100% 100%;">
      <div style='width:280px;height:380px;margin:80px auto;'>
         
         <form role="form" id='form'>
         <h2 align="center" style='font-family: 华文新魏;color:skyblue;'>用户登录界面</h2>
           <div class="form-group" style='font-family: 华文新魏;'>
              <label for="name">用户名</label>
              <input type="text" name='user' class="form-control" id="name" 
                 placeholder="请输入名称">
           </div>
           <div class="form-group" style='font-family: 华文新魏;'>
              <label for="password">密码</label>
              <input type="password" name="pwd" class="form-control" id="password" 
                 placeholder="请输入密码">
           </div>
           <div class="checkbox">
              <label>
              <input type="checkbox" style='font-family: 华文新魏;'> 记住密码
              </label>
           </div>
           <button type="button" id='submit' class="btn btn-default" style='font-family: 华文新魏;'>登录</button>
        </form>
          <div id='show' style="position:absolute;left:15px;top:-39px;display: none;">
            <h4 style='color:red;'>正在加载，请稍后...</h4>
            <img src="../static/timg.gif" width='500px' height='401px;'>
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2164259d7b9501620f6_08932363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    $(function(){
    	$('#submit').click(function(){

    		$.ajax({
    			type:'post',
    			url:'login.php',
    			//dataType:"text",
    			data:$('#form').serialize(),
    			success:function(data)
    			{
            $('#show').hide();
    				var obj=JSON.parse(data);
            if(obj.status==1)
            {
              
              window.history.back();
            }
            else
            {
              password.value="";
              $('#form').show();
            }
            alert(obj.msg);

                    
    			},
    			beforeSend:function()
    			{
    				var user=$('input[name=user]').val();
              	    var pwd=$('input[name=pwd]').val();
              	    if(user=='')
              	    {
              	    	alert('用户名不能为空');
              	    	return false;
              	    }
              	    else{
              	       if(pwd=="")
              	    {
              	    	alert('请输入密码');
              	    	return false;

              	    }	
              	    }
              	    $('#show').show();
                    $('#form').hide();
    			}
    		});
    	});
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
