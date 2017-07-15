<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/login.js"></script>
		<link href="__PUBLIC__/css/login.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<h1>后台登录<sup>V2017</sup></h1>

		<div class="login" style="margin-top:50px;">

			<div class="header">
				<div class="switch" id="switch">
					<a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
					<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a>
					<div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
				</div>
			</div>

			<div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">

				<!--登录-->
				<div class="web_login" id="web_login">

					<div class="login-box">

						<div class="login_form">
							<form action="<?php echo U(GROUP_NAME.'/Login/logHandler');?>" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post">
								<div class="uinArea" id="uinArea">
									<label class="input-tips" for="u">帐号：</label>
									<div class="inputOuter" id="uArea">

										<input type="text" id="u" name="username" class="inputstyle" />
									</div>
								</div>
								<div class="pwdArea" id="pwdArea">
									<label class="input-tips" for="p">密码：</label>
									<div class="inputOuter" id="pArea">

										<input type="password" id="p" name="p" class="inputstyle" />
									</div>
								</div>

								<div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue" /></div>
							</form>
						</div>

					</div>

				</div>
				<!--登录end-->
			</div>

			<!--注册-->
			<div class="qlogin" id="qlogin" style="display: none; ">

				<div class="web_login">
					<form name="form2" id="regUser" accept-charset="utf-8" action="<?php echo U(GROUP_NAME.'/Login/regHandler');?>" method="post">
						<ul class="reg_form" id="reg-ul">
							<div id="userCue" class="cue">快速注册请注意格式</div>
							<li>

								<label for="user" class="input-tips2">用户名：</label>
								<div class="inputOuter2">
									<input type="text" id="user" name="user" maxlength="16" class="inputstyle2" />
								</div>

							</li>

							<li>
								<label for="passwd" class="input-tips2">密码：</label>
								<div class="inputOuter2">
									<input type="password" id="passwd" name="passwd" maxlength="16" class="inputstyle2" />
								</div>

							</li>
							<li>
								<label for="passwd2" class="input-tips2">确认密码：</label>
								<div class="inputOuter2">
									<input type="password" id="passwd2" name="" maxlength="16" class="inputstyle2" />
								</div>

							</li>
							<li>
            	
			                 	<label for="verify" class="input-tips2">验证码：</label>
			                    <div class="inputOuter2">
			                    	<input type="text" id="verify" name="verify"  class="inputstyle2" />
			                        <img src="<?php echo U('Login/verify');?>" alt="" />
			                    </div>
			                   
			                </li>
							<li>
								<div class="inputArea">
									<input type="submit" id="reg" style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册" />
									<a href="#" class="zcxy" target="_blank">注册协议</a>
								</div>

							</li>
							<div class="cl"></div>
						</ul>
					</form>

				</div>

			</div>
			<!--注册end-->
		</div>

	</body>
	<script>
		$(".inputOuter2 img").click(function(){
			$(this).attr("src","<?php echo U('Login/verify');?>"+'/'+Math.random())
		})
	</script>
</html>