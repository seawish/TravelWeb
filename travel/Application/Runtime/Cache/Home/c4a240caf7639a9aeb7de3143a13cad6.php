<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>游记</title>

	<!-- Mobile Specific
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" type="text/css"  href="/travel/Public/css/Note/style.css">
	<link rel="stylesheet" href="/travel/Public/css/manage/foundation.css">
	<link rel="stylesheet" href="/travel/Public/css/manage/app.css">

	<!-- JS
  ================================================== -->
	<script type='text/javascript' src="/travel/Public/js/Index/jquery.min.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/twitter.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/custom.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/carousel.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/jquery.flexslider.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/shortcodes.js"></script>
	<script type='text/javascript' src="/travel/Public/js/Note/imagebox.min.js"></script>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	

	<!--[if (gte IE 6)&(lte IE 8)]>
	  	<script src="/travel/Public/js/Note/selectivizr.js"></script>
	<![endif]-->
	
</head>
<body>

	<!-- Primary Page Layout
	================================================== -->
	
	<!---start-header---->
	<div class="newheader">
		<div class="newwrap">
			<div class="newtop-nav">
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
	<!---End-header---->
	
	<!-- 960 Container -->
	<div id="content-wrapper" class="row">
		<div class="row">
			<div class="three columns">
				<h4>近期发表</h4>
				<p>
					去了不同的地方，看了不同的风景，知道了不同的事，感悟了不同的人生。
				</p>
				<a href="#" class="button nice">查看更多 &rsaquo;</a>
			</div>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="three columns">
					<div class="icon-hover">
						<a href="<?php echo U('Home/Note/onenote', array('id'=>$v['id']));?>" title=""><img src="/travel/Public/images/manage/demo/thumb-<?php echo(rand(1, 14))?>.jpg" alt="" class="transparency"></a>
						<div class="underlay">
							查看
						</div>
					</div>
					<!-- END .icon-hover -->
					<div class="entry-detail">
						<h5><a href="<?php echo U('Home/Note/onenote', array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></h5>
						<?php echo ($v["head"]); ?>
					</div>
				</div>
				<!-- END .three columns --><?php endforeach; endif; ?>
		</div>
		<div class="clearfix">
		</div>
		<hr/>
		<h4>所有博客</h4>
		<div class="row">
			<!-- END .three columns -->
			<?php if(is_array($all)): foreach($all as $key=>$v): ?><div class="three columns">
					<div class="icon-hover">
						<a href="blog-single.html" title=""><img src="/travel/Public/images/manage/demo/thumb-9.jpg" alt="" class="transparency"></a>
						<div class="underlay">
							Read Post
						</div>
					</div>
					<!-- END .icon-hover -->
					<div class="entry-detail">
						<h5><a href="#"><?php echo ($v["title"]); ?></a></h5>
						<?php echo ($v["head"]); ?><span class="extras"><a href="#"><?php echo ($v["date"]); ?></a> &middot; By <a href="#"><?php echo ($v["author"]); ?></a></span>
				</div>
			</div><?php endforeach; endif; ?>
			<div class="clearfix">
			</div>
		</div>
		<!-- END .row -->
	</div>
	<!-- End 960 Container -->

		
	<!-- Back To Top Button -->
	<div id="backtotop"><a href="#"></a></div>
	
	<!-- Imagebox Build -->
	<script src="/travel/Public/js/Note/imagebox.build.js"></script>
</body>
</html>