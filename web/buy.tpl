{extends file='base/base.tpl'}
{block name="content"}
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
		{foreach $buyArr as $vv}
           <tr align="center">
			<td class="success" ><input style="display:block;margin-top:25px;" class="ss" type="checkbox" name="" value="{$vv['id']}"></td>
			<td class="warning" style="line-height: 70px;">{$vv['name']}||{$vv['id']}</td>
			<td class="success" style="line-height: 70px;">{$vv['goodsstyle']}</td>
			<td class="active" style="line-height: 70px;">{$vv['price']}</td>
			<td class="success"><a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jian()">-&nbsp;</a><input style="display:block;margin-top:20px;"  type="text" name="num" class="num1" onchange="updete({$vv['id']},this.value,{$vv['price']})" value="{$vv['goodsnum']}" size="1"><a style="padding:5px;border:1px solid blue;cursor: pointer;" onclick="jia()">+</a></td>
			<td class="warning" ><img src="{$url}upload/{$vv['pic']}" width="70px" height="70px"></td>
			<td class="danger">{$vv['address']}</td>
			<td class="info" id="{$vv['id']}" style="line-height: 70px;">{$vv['price']*$vv['goodsnum']}</td>
		</tr>
		{/foreach}
	</table>
	<p>总价格</p>
	<input type="button" name="" value="去结算">
</div>
{/block}
{block name="js"}
    <script type="text/javascript">
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
    </script>
{/block}