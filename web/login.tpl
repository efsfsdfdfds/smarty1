{extends file='base/base.tpl'}
{block name='content'}
  <div class='col-md-4'></div>
  <div class="col-md-4">
    <div style="width:500px;height:400px;border:1px solid skyblue;border-radius: 20px;background:url('{$url}static/biankuang5.jpg');background-size:100% 100%;">
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
{/block}
{block name='js'}
  <script>
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
  </script>
{/block}