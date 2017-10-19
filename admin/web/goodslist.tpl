{extends file='base/base.tpl'}
{block name='content'}

     
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
      {foreach $arr as $v}
      <tr align="center" >
      	  <td class="active" style="line-height: 70px;">{$v['id']}</td>
      	  <td class="warning" style="line-height: 70px;">{$v['title']}</td>
		  <td class="success" style="line-height: 70px;">{$v['name']}</td>
		  <td class="warning" style="line-height: 70px;">{$v['price']}</td>
		  <td class="danger" style="line-height: 70px;">{$v['mun']}</td>
		  <td class="info">图一：<img src="../upload/{$v['pic']}" width="70px" height="70px">&nbsp;&nbsp;图二：<img src="../upload/{$v['pic2']}" width="70px" height="70px"></td>
		  <td class="danger" style="line-height: 70px;">{date('Y-m-d H:i:s',$v['times'])}</td>
		  <td class="info" style="line-height: 70px;"><a href="updategoods.php?id={$v['id']}">修改</a></td>
		  <td class="info" style="line-height: 70px;"><a href="del.php?id={$v['id']}" onclick="return del()">删除</a></td>
      </tr>
      {/foreach}
  </table>
  <script>
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
  </script>
{/block}