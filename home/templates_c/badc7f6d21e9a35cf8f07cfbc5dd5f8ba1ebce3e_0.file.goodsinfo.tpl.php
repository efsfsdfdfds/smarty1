<?php
/* Smarty version 3.1.30, created on 2017-10-07 01:21:54
  from "D:\phpStudy\WWW\smarty1\web\goodsinfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d7bbb2d2b272_24206266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badc7f6d21e9a35cf8f07cfbc5dd5f8ba1ebce3e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\goodsinfo.tpl',
      1 => 1507310510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59d7bbb2d2b272_24206266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2466459d7bbb2cf2d47_02684881', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145759d7bbb2d25965_46381098', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2466459d7bbb2cf2d47_02684881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:1200px;height:1000px;margin:0 auto;border:1px solid red;">
    <div style="width:350px;height:100%;float:left;">
        <div class=jqzoom id=spec-n1><IMG height=350
        src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" jqimg="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" width=350>
        </div>
        <div id=spec-n5>
            <div class=control id=spec-left>
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/left.gif"/>
            </div>
        <div id=spec-list>
            <ul class=list-h>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
"></li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic2'];?>
"></li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img04.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img04.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/img04.jpg"> </li>
            </ul>
            <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" width="100px" height="100px" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic2'];?>
" width="100px" height="100px" alt=""> -->
        </div>
        <div class=control id=spec-right>
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/images/right.gif" />
        </div>
        </div>
    </div>
    <div style="width:500px;height:100%;float:left;margin-left:25px;text-align: left;">
        <h4 style="text-indent:20px;font-size: 26px;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['content'];?>
</h4>
        <div style="width:100%;height:100px;background-color: #EEEEEE;text-align: left;text-indent:20px;">
            <span style="text-indent:20px;">京东价：<font color="red" size="6"><?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</font></span>
            <br>
            &nbsp;&nbsp;&nbsp;<span style="text-indent:20px;">促销：
                  赠品：
                  换购：满额返券：
            </span>
        </div>
        <p style="text-indent:20px;">增值业务：<a href="" style="border:1px solid #91BDD3">以旧换新</a>&nbsp;<a href="" style="border:1px solid #91BDD3">4G套餐18元起</a>&nbsp;<a href="" style="border:1px solid #91BDD3">礼品包装</a></p>
        <form action="buy.php" onsubmit="return kong()" method="post">
        <div style="text-indent: 20px;">
            配送至：<select id="cmbProvince" name="address[]" ></select>
            <select id="cmbCity" name="address[]" ></select>
            <select id="cmbArea" name="address[]" ></select>
            <?php echo '<script'; ?>
 type="text/javascript">
                addressInit('cmbProvince', 'cmbCity', 'cmbArea', '陕西', '西安市', '雁塔区');
                addressInit('Select1', 'Select2', 'Select3');
            <?php echo '</script'; ?>
>
            <input  type="text" id="xiangxi" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value)) {
echo $_smarty_tpl->tpl_vars['address']->value;
}?>" class="form-control" placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%;margin-left:75px;" >
        </div>
        <p style="text-indent:20px;">库存：<?php echo $_smarty_tpl->tpl_vars['goods']->value['mun'];?>
件</p>
        <div style="width:100px;text-indent:20px;float:left"><p>选择颜色：</p></div>
        <div id="sp" style="float:left">
            <a  onclick="bor(0)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">黑色</a>&nbsp;&nbsp;
            <a  onclick="bor(1)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">红色</a>&nbsp;&nbsp;
            <a  onclick="bor(2)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">白色</a>
        </div>
        <div style="clear:both;width:100%;float:left;margin-left:-20px;">
            <input type="hidden" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
            <input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
">
            <ul id='ull2' style='list-style: none;'>
                <li>选择商品属性：</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['style']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                  <li style="color:#FF6EB4"><input type="checkbox" name="style[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['stylename'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['stylename'];?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>

        </div>
        <div style="clear:both;text-indent: 20px;">
            数量：<a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jian()">-&nbsp;</a><input id='num' type="text" name="num" size="2" value="1"><a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jia()">+</a>
        </div>
        <div style="clear:both;text-indent: 20px;padding:20px 20px;">
            <button type="submit" style="padding:5px;width:180px;border-radius: 10px;font-size: 24px;background-color:#FF6EB4;font-weight: bold;color:skyblue">加入购物车</button>
        </div>
        </form>
    </div>
    <div style="width:300px;height:100%;background-color:#6F099E;float:right"></div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_145759d7bbb2d25965_46381098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <SCRIPT type=text/javascript>
    function kong()
    {
        if(xiangxi.value=="")
        {
            alert('请填写详细地址！');
            return false;
        }
        else{
            return true;
        }
    }
    $(function(){           
       $(".jqzoom").jqueryzoom({
            xzoom:400,
            yzoom:400,
            offset:10,
            position:"right",
            preload:1,
            lens:1
        });
        $("#spec-list").jdMarquee({
            deriction:"left",
            width:350,
            height:56,
            step:2,
            speed:4,
            delay:10,
            control:true,
            _front:"#spec-right",
            _back:"#spec-left"
        });
        $("#spec-list img").bind("mouseover",function(){
            var src=$(this).attr("src");
            $("#spec-n1 img").eq(0).attr({
                src:src.replace("\/n5\/","\/n1\/"),
                jqimg:src.replace("\/n5\/","\/n0\/")
            });
            $(this).css({
                "border":"2px solid #ff6600",
                "padding":"1px"
            });
        }).bind("mouseout",function(){
            $(this).css({
                "border":"1px solid #ccc",
                "padding":"2px"
            });
        });             
    })
    </SCRIPT>

<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/js/lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jiaoben1900/js/zzsc.js" type=text/javascript></SCRIPT>
    <?php echo '<script'; ?>
>
        function bor(da)
        {
            var arr=sp.getElementsByTagName('a');

             if(da==0)
                     {
                         arr[0].style.border="1px solid red";
                         arr[1].style.border="1px dashed #00aaff";
                         arr[2].style.border="1px dashed #00aaff";
                     }
            else if(da==1)
            {
                arr[0].style.border="1px dashed #00aaff";
                arr[1].style.border="1px solid red";
                arr[2].style.border="1px dashed #00aaff";
            }
            else if(da==2)
            {
                arr[0].style.border="1px dashed #00aaff";
                arr[1].style.border="1px dashed #00aaff";
                arr[2].style.border="1px solid red";
            }
            else
                    {
                        arr[0].style.border="1px dashed #00aaff";
                        arr[1].style.border="1px dashed #00aaff";
                        arr[2].style.border="1px dashed #00aaff";
                    }
        }
        function jian()
        {
           num.value-=1
           if(num.value<1)
           {
            num.value=1;
           }
        }
        function jia()
        {
            parseInt(num.value++);

        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
