<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>注册或登录</title>
	<link rel="stylesheet" type="text/css" href="/travel/Public/css/login_style.css" media="screen, projection">
	<script type="text/javascript" src="/travel/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/travel/Public/js/login_script.js"></script>
</head>
<body>
	<header>
		<h1>注册或登录</h1>
	</header>
	<!-- BEGIN WRAPPER DIV -->
	<div id="wrapper">
		<h3 id="sign-in-tab" class="active">登录</h3>
		<h3 id="register-tab" class="">注册</h3>
		<a id="returnhome" href="<?php echo U('Home/Index/index');?>">返回首页</a>
		<!-- BEGIN FORM SECTION -->
		<ul id="form-section">
			<!-- BEGIN SIGN IN FORM -->
			<form class="sign-in-form" action="<?php echo U('Home/Login/login');?>" method="post" style="display: block;">
				<li>
					<label>
						<span>用户名</span>
						<input placeholder="请输入用户名" name="username" pattern="[a-zA-Z0-9]{6,}" type="text" tabindex="1" title="请输入注册的用户名!" required="" autofocus="">
					</label>
				</li>
				<li>
					<label>
						<span>密码</span>
						<input placeholder="请输入密码" name="password" pattern=".{6,}" type="password" tabindex="2" title="请输入注册的密码!" required="">
					</label>
				</li>
				<div id="checkbox">
					<li>
						<input name="remember-me" type="checkbox" id="remember-me">
						<span class="unchecked-state"></span>
						<span class="checked-state"></span>
					</li>
					<label for="remember-me">记住我</label>
				</div>
				<li>
					<button name="sign-in-submit" type="submit" id="sign-in-submit">登录</button>
				</li>
				<li>
					<label class="left-column">
						<input type="button" class="qq-login" value="QQ帐号登录">
					</label>
					<label class="right-column">
						<input type="button" class="sina-login" value="新浪微博帐号登录">
					</label>
				</li>
				<div style="clear: both;"></div>
			</form>
			<!-- END OF SIGN IN FORM -->

			<!-- BEGIN REGISTER FORM -->
			<form class="register-form" action="<?php echo U('Home/Login/register');?>" method="post" style="display: none;">
				<li>
					<label>
						<span>Email*</span>
						<input type="email" name="email" tabindex="1" placeholder="请输入Email地址" title="必须是有效的Email地址 e.g. &#39;someone@provider.com&#39; !" required="">
					</label>
				</li>
				<li>
					<label>
						<span>用户名*</span>
						<input type="text" name="username" tabindex="2" pattern="[a-zA-Z0-9]{6,}" placeholder="请输入用户名" title="只能包含大小写字母及数字，长度至少为6位 !" required="">
					</label>
				</li>
				<li>
					<label>
						<span>密码*</span>
						<input type="password" name="password" tabindex="3" pattern=".{6,}" placeholder="请输入密码" title="长度至少为6位!" required="">
					</label>
				</li>
				<div style="clear: both;"></div>
				<li>
					<button name="submit" tabindex="11" type="submit" id="create-account-submit">注册</button>
				</li>
			</form>
			<!-- END OF REGISTER FORM -->
		</ul>
		<!-- END OF FORM SECTION -->
	</div>
	<!-- END OF WRAPPER DIV -->

</body>
</html>