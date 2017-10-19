{extends file='base/base.tpl'}
{block name='content'}
  <div class='col-md-4'></div>
  <div class='col-md-4'>
    <div style="width:500px;height:480px;border:1px solid skyblue;border-radius: 20px;background:url('{$url}static/biankuang2.jpg');background-size:100% 100%;">
      <div style='width:280px;height:380px;margin:80px auto;'>
        <form id='form'>
          <div class="form-group">
            <h2 align="center" style='font-family: 华文新魏;color:skyblue;'>用户注册界面</h2>
            <label for="exampleInputEmail1">用户名</label>
            <input type="text" name='user' class="form-control" id="exampleInputEmail1" placeholder="用户名">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" name='pwd' class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">确认密码</label>
            <input type="password" name='pwd2' class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="button" class="btn btn-default" id='submit'>注册</button>
        </form>
      </div>
    </div>
  </div>
  <div class='col-md-4'></div>
{/block}
{block name='js'}
  <script>
    $(function(){
    	$('#submit').click(function(){
    		$.ajax({
    			type:'post',
    			url:'regist.php',
    			data:$('#form').serialize(),
    			success:function(data)
    			{
    				var obj=JSON.parse(data);
    				if(obj.msg=='恭喜您注册成功')
                    {
                    	alert(obj.msg+'请登录');
                    	window.location='http://localhost/smarty1/home/login.php';
                    }
                    else
                    {
                      alert(obj.msg);
                    }
                    
    			},
    			beforeSend:function()
    			{
                  var user=$('input[name=user]').val();
              	var pwd1=$('input[name=pwd]').val();
              	var pwd2=$('input[name=pwd2]').val();
              	   	   	    if(user==''){
              	   	   	    	alert('用户名不能为空');
              	   	   	    	return false;
              	   	   	    }
              	   	   	    if(pwd1!=pwd2 || pwd1==''){
                                alert('两次密码不一致,或者密码为空');
                                return false;
              	   	   	    }
    			},
    		});
    	});
    });
  </script>
{/block}