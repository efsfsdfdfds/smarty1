{extends file='base/base.tpl'}
{block name='content'}
<div style="width:1200px;height:1000px;margin:0 auto;border:1px solid red;">
    <div style="width:350px;height:100%;float:left;">
        <div class=jqzoom id=spec-n1><IMG height=350
        src="{$url}upload/{$goods['pic']}" jqimg="{$url}upload/{$goods['pic']}" width=350>
        </div>
        <div id=spec-n5>
            <div class=control id=spec-left>
            <img src="{$url}static/jiaoben1900/images/left.gif"/>
            </div>
        <div id=spec-list>
            <ul class=list-h>
                <li><img src="{$url}upload/{$goods['pic']}"></li>
                <li><img src="{$url}upload/{$goods['pic2']}"></li>
                <li><img src="{$url}static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img04.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img04.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img01.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img02.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img03.jpg"> </li>
                <li><img src="{$url}static/jiaoben1900/images/img04.jpg"> </li>
            </ul>
            <!-- <img src="{$url}upload/{$goods['pic']}" width="100px" height="100px" alt="">
            <img src="{$url}upload/{$goods['pic2']}" width="100px" height="100px" alt=""> -->
        </div>
        <div class=control id=spec-right>
            <img src="{$url}static/jiaoben1900/images/right.gif" />
        </div>
        </div>
    </div>
    <div style="width:500px;height:100%;float:left;margin-left:25px;text-align: left;">
        <h4 style="text-indent:20px;font-size: 26px;">{$goods['content']}</h4>
        <div style="width:100%;height:100px;background-color: #EEEEEE;text-align: left;text-indent:20px;">
            <span style="text-indent:20px;">京东价：<font color="red" size="6">{$goods['price']}</font></span>
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
            <script type="text/javascript">
                addressInit('cmbProvince', 'cmbCity', 'cmbArea', '陕西', '西安市', '雁塔区');
                addressInit('Select1', 'Select2', 'Select3');
            </script>
            <input  type="text" id="xiangxi" value="{if isset($address)}{$address}{/if}" class="form-control" placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%;margin-left:75px;" >
        </div>
        <p style="text-indent:20px;">库存：{$goods['mun']}件</p>
        <div style="width:100px;text-indent:20px;float:left"><p>选择颜色：</p></div>
        <div id="sp" style="float:left">
            <a  onclick="bor(0)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">黑色</a>&nbsp;&nbsp;
            <a  onclick="bor(1)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">红色</a>&nbsp;&nbsp;
            <a  onclick="bor(2)" style="text-decoration:none;border:1px dashed #00aaff;padding:10px;cursor:pointer">白色</a>
        </div>
        <div style="clear:both;width:100%;float:left;margin-left:-20px;">
            <input type="hidden" name="ids" value="{$goods['id']}">
            <input type="hidden" name="price" value="{$goods['price']}">
            <ul id='ull2' style='list-style: none;'>
                <li>选择商品属性：</li>
                {foreach $style as $vv}
                  <li style="color:#FF6EB4"><input type="checkbox" name="style[]" value="{$vv['stylename']}">{$vv['stylename']}</li>
                {/foreach}
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
{/block}
{block name='js'}
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

<SCRIPT src="{$url}static/jiaoben1900/js/lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="{$url}static/jiaoben1900/js/zzsc.js" type=text/javascript></SCRIPT>
    <script>
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
    </script>
{/block}