<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
	<title>首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />	
	<link rel="stylesheet" href="/travel/Public/css/Index/responsiveslides.css">
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
						<li class="active"><a href="<?php echo U('Home/Service/index');?>">服务</a></li>
						<li><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
						<li><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
						<li><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
						<li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
    				</ul>
    			</div>
    			<div>

    			</div>
    			<div class="clear"> </div>
    		</div>
		</div>
		<div id="map" style="width:100%; height:650px;">
		    <iframe src="http://map.baidu.com/" width=100% height=100%></iframe>
		    <script type="text/javascript"></script>
		</div>
	</body>
</html>