<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
	<title>个人中心</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />	
	<link rel="stylesheet" href="/travel/Public/css/Index/responsiveslides.css">
	<link rel="stylesheet" href="/travel/Public/css/myspace/index.css">
	<script src="/travel/Public/js/Index/jquery.min.js"></script>
	<script src="/travel/Public/js/Index/responsiveslides.min.js"></script>
	<script>
	// You can also use "$(window).load(function() {"
	    $(function () {
	      // Slideshow 1
	      $("#slider1").responsiveSlides({
	        maxwidth: 2500,
	        speed: 600
	      });
	});
	</script>
</head>
<body>
	<div class="header">
		<div class="wrap">
			<div class="top-nav">
				<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Home/City/index');?>">目的地</a></li>
					<li><a href="<?php echo U('Home/Service/index');?>">服务</a></li>
					<li><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
					<li><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
					<li class="active"><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<div class="content">
		<div id="left">
			<dl>
				<dt>旅游</dt>
				<dd><a href="<?php echo U('Home/Note/manage2');?>" target="iframe">游记管理</a></dd>
				<dd><a href="#">攻略管理</a></dd>
			</dl>
			<dl>
				<dt>安全</dt>
				<dd><a href="<?php echo U('Home/Login/userinf');?>" target="iframe">密码修改</a></dd>
			</dl>
			<dl>
				<dt>账号退出</dt>
				<dd><a href="<?php echo U('Home/Login/logout');?>">退出</a></dd>
			</dl>
		</div>
		<div id="right">
			<iframe name="iframe" src="<?php echo U('Home/Login/blank');?>"></iframe>
		</div>
	</div>
</body>
</html>