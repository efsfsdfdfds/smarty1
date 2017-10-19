<?php
/* Smarty version 3.1.30, created on 2017-09-23 17:44:11
  from "D:\phpStudy\WWW\smarty1\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c62cebbd4c27_29127561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a4647ba80442ec902974472da708b0864495c2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\index.tpl',
      1 => 1506159848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c62cebbd4c27_29127561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2427159c62cebbcac66_64401972', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2427159c62cebbcac66_64401972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:1200px;height:1700px;margin:0 auto;">
        <div style="width:100%;height:200px;">
            <div style="width:230px;height:200px;float:left;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/logo.jpg" width="230px" height="200px"></a>
            </div>
            <div style="width:700px;height:200px;float:left;background-color:#F6F6F6;margin-left:20px;">
                <div class="input-group" style="width:510px;margin:0 auto;margin-top:60px;">
                    <input type="text" class="form-control" placeholder="请输入商品名称" style="height:40px;border:1px solid red;">
                    <span class="input-group-addon" style="background-color:#F10215;"><img src="static/search1.png" alt="" width="30px" height="26px"></span>
                </div>
                <div style="width:100%">
                    <ul id="ull" style="list-style: none;">
                        <li><a href="" style="color:red;">京东相机节</a></li>
                        <li><a href="">直降200</a></li>
                        <li><a href="">农资畜牧</a></li>
                        <li><a href="">3件7折</a></li>
                        <li><a href="">预约省800</a></li>
                        <li><a href="">洗头膏</a></li>
                    </ul>
                </div>
                <div style="width:100%;float:left;font-size: 20px;margin-top:30px;">
                    <ul id="ull1">
                        <li><a href="">秒杀</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">优惠券</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">闪购</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">拍卖</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">服装城</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">京东超市</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">生鲜</a><span style="color:#6A8FA1">|</span></li>
                        <li><a href="">全球购</a></li>

                    </ul>
                </div>
            </div>
            <div style="width:230px;height:200px;float:right;background-color:#3a7ead;">
                <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/erweima.jpg" width="230px" height="200px"></a>
            </div>
        </div>
        <div style="width:100%;height:520px;margin-top:10px;">
            <div style="width:230px;height:520px;background-color: #6E6568;float:left;"></div>
            <div style="width:700px;height:520px;float:left;margin-left:20px;">
                <div id="myCarousel" data-ride="carousel"    class="carousel slide" style="width:100%;height:400px;background-color: #FFFFFF;">
                    <ol class="carousel-indicators" data-ride="carousel">
                        <li data-target="#myCarousel" data-slide-to="0"
                            class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner" data-ride="carousel">
                        <div class="item active" data-ride="carousel">
                            <img src="static/image/3.jpg" style="height:400px;" alt="First slide">
                        </div>
                        <div class="item" data-ride="carousel">
                            <img src="static/image/2.jpg" style="height:400px;" alt="Second slide">
                        </div>
                        <div class="item" data-ride="carousel">
                            <img src="static/image/1.jpg" style="height:400px;" alt="Third slide">
                        </div>
                        <div class="item" data-ride="carousel">
                            <img src="static/image/4.jpg" style="height:400px;" alt="Fourth slide">
                        </div>
                        <div class="item" data-ride="carousel">
                            <img src="static/image/5.jpg" style="height:400px;" alt="Fifth slide">
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="carousel-control left" href="#myCarousel"
                       data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel"
                       data-slide="next">&rsaquo;</a>

                </div>
                <div style="width:100%;height:100px;margin-top:20px;">
                    <div style="width:340px;height:100%;background-color: deeppink;float:left;">
                        <a href=""><img src="static/image/qiyecaigou.jpg" style="width:100%;height:100%" alt=""></a>
                    </div>
                    <div style="width:340px;height:100%;background-color: deeppink;float:right;">
                        <a href=""><img src="static/image/weimanzhongqiu.png" style="width:100%;height:100%" alt=""></a>
                    </div>
                </div>
            </div>
            <div style="width:230px;height:520px;background-color: #FFFFFF;float:right;"></div>
        </div>
        <div class="wrapper" style="width:100%;height:50px;background-color: #E01222;margin-top:20px;">
            <div style="width:100px;height:100%;float:left;margin-left:70px;">
                <h3 style="line-height:10px;color:#FFFFFF;font-weight: lighter;font-family:仿宋;">最新上架</h3>
            </div>
            <div style="width:200px;float:left;margin-left:10px;padding-top:20px;">
                <a href="#" style="color:#FFFFFF;text-decoration: none;font-family:仿宋;">总有让你意想不到的惊喜>></a>
            </div>
        </div>
        <div style="width:100%;height:310px;margin:0 auto;background-color: #FFFFFF;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div style="width:152px;height:202px;float:left;margin-left:42.5px;margin-top:40px;text-align:center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/goodsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt="" width="150px" height="200px" style="border:2px solid #A9A9A9;border-radius:10px;background-size:100% 100%; "></a>
                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/goodsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" style="text-decoration: none"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></span>
                    <br>
                    <span style="color:red;"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/goodsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" style="text-decoration: none;color:red;">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</a></span>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div style="width:100%;height:400px;float:left;">
            <div style="width:390px;height:100%;float:left;background-color:#FFFFFF;">
                <div class="wrapper" style="float:left;width:100%;height:70px;background-color:#3C8E97;padding-left:40px;">
                    <span style="font-size: 24px;font-family:仿宋;color:#FFFFFF;line-height:70px;">发现好货</span>
                    <div style="width:200px;float:right;padding-top:40px;">
                        <a href="#" style="color:#FFFFFF;text-decoration: none;font-family:仿宋;">发现品质生活>></a>
                    </div>
                </div>
            </div>
            <div style="width:390px;height:100%;float:left;background-color:#FFFFFF;margin-left:15px;">
                    <div class="wrapper" style="width:100%;height:70px;background-color:#6E3B80;padding-left: 40px;">
                        <span style="font-size: 24px;font-family:仿宋;color:#FFFFFF;line-height:70px;">会买专辑</span>
                        <div style="width:200px;float:right;padding-top:40px;">
                            <a href="#" style="color:#FFFFFF;text-decoration: none;font-family:仿宋;">甄选优质好物>></a>
                        </div>
                    
                </div>
            </div>
            <div style="width:390px;height:100%;float:right;background-color:#FFFFFF;">
                <div class="wrapper" style="width:100%;height:70px;background-color:#E66705;padding-left: 40px;">
                    
                        <span style="font-size: 24px;font-family:仿宋;color:#FFFFFF;line-height:70px;">排行榜</span>
                        <div style="width:200px;float:right;padding-top:40px;">
                            <a href="#" style="color:#FFFFFF;text-decoration: none;font-family:仿宋;">专属你的购物指南>></a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
