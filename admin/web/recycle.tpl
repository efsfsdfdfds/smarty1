{extends file='base/base.tpl'}
{block name='content'}
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
		  <td class="info"><img src="../upload/{$v['pic']}" width="70px" height="70px"></td>
		  <td class="danger" style="line-height: 70px;">{date('Y-m-d H:i:s',$v['times'])}</td>
      <td class="info" style="line-height: 70px;"><a href="qingkong.php?id={$v['id']}" onclick="return del()">清空</a></td>
		  <td class="info" style="line-height: 70px;"><a href="redel.php?id={$v['id']}" onclick="return redel()">还原</a></td>
      </tr>
      {/foreach}
  </table>
  <script>
    function redel()
    {
    	return confirm('确定要还原吗？');
    }
    function del()
    {
      return confirm('确定要永久删除吗？');
    }
  </script>
{/block}