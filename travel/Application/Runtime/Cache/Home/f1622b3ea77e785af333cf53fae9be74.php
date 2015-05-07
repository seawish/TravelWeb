<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>目的地</title>
	<link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />	
	<link rel="stylesheet" href="/travel/Public/css/Index/responsiveslides.css">
	<script type="text/javascript">

	function SetWinHeight(obj) {
	    var win = obj;
	    if (document.getElementById) {
	        if (win && !window.opera) {
	            if (win.contentDocument && win.contentDocument.body.offsetHeight) win.height = win.contentDocument.body.offsetHeight;
	            else if (win.Document && win.Document.body.scrollHeight) win.height = win.Document.body.scrollHeight;
	        }
	    }
	}
	</script>
</head>
<body>
	<div class="header">
		<div class="wrap">
			<div class="top-nav">
				<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li class="active"><a href="<?php echo U('Home/City/index');?>">目的地</a></li>
					<li><a href="<?php echo U('Home/Service/index');?>">服务</a></li>
					<li><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
					<li><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
					<li><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<iframe src="<?php echo U('Home/City/index2');?>" width="100%"  scrolling="no" onload="Javascript:SetWinHeight(this)"></iframe>
</body>
</html>