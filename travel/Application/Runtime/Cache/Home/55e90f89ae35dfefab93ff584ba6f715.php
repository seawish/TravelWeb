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
					<li class="active"><a href="<?php echo U('Home/Note/index');?>">游记</a></li>
					<li><a href="<?php echo U('Home/Picture/index');?>">画册</a></li>
					<li><a href="<?php if (session('?username')) {echo(U('Home/Login/myspace'));} else echo(U('Home/Login/index')); ?>">个人中心</a></li>
					<li><a href="<?php echo U('Home/Login/logout');?>">退出</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<!---End-header---->
	
	<!-- Page Subtitle -->
	<div id="subtitle">
	
		<!-- 960 Container -->
		<div class="container">
			<div class="eleven columns">
				<h3>游记</h3>
			</div>
			<div class="five columns">
				<a id="submiticon" href="<?php echo U('Home/Note/write');?>"></a>
			</div>
		</div>
		<!-- End 960 Container -->
	
	</div><!-- End Page Subtitle -->
	
	<!-- 960 Container -->
	<div class="container">
	
		<!-- Posts Container-->
		<div class="eleven columns">
			<div id="blog_post_container">
		
				
				<?php if(is_array($data)): foreach($data as $key=>$v): ?><!-- Post-->
					<div class="post">
						<h2><a href="<?php echo U('Home/Note/read', array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></h2>
						<div class="post-meta">
							<span class="icon-calendar"></span><?php echo ($v["date"]); ?><span class="icon-author"></span>By 
							<a href="#"><?php echo ($v["author"]); ?></a>  
							<!-- <span class="icon-comment"></span>With <a href="#">12 Comments</a> -->
						</div>
						<div class="post-thumb">
							<a href="/travel/Public/images/Note/img_blog_01_large.jpg" rel="imagebox[gallery]" title="Through the pages of Tuscany">
								<img src="/travel/Public/images/Note/img_blog_post_01.jpg" alt=""/>
								<div class="overlay zoom"></div>
							</a>
						</div>
						<div class="post-content">
							<p><?php echo ($v["preview"]); ?></p>
						</div>
						<a class="post-entry" href="<?php echo U('Home/Note/read', array('id'=>$v['id']));?>">Continue</a>
					</div>
					<!-- End Post--><?php endforeach; endif; ?>

				<!-- Navigation -->
				<a href="#" class="older_entires">上一页</a>
				<a href="#" class="newer_entires">下一页</a>
				
			</div><!-- End Posts Container-->
		</div>
		
		<!-- Widget Container-->
		<div class="five columns">
			<div id="blog_widget_container">
			
				<!-- Search -->
				<div class="search">
					<input type="text" onblur="if(this.value=='')this.value='To search type and hit enter';" onfocus="if(this.value=='To search type and hit enter')this.value='';" value="To search type and hit enter" class="text"/>
				</div>
				
				<!-- Text Widget -->
				<div class="widget">
					<div class="widget-title"><h3>查看热门游记</h3></div>
					<?php if(is_array($hot)): foreach($hot as $key=>$v): ?><div class="widget-text">
							<li style="list-style-type='circle'"><?php echo ($v["preview"]); ?></li>
						</div><?php endforeach; endif; ?>
				</div>
				
				<!-- Categories -->
<!-- 				<div class="widget">
					<div class="widget-title"><h3>分类</h3></div>
					<div class="widget-categories">
						<ul>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Motion Graphic</a></li>
							<li><a href="#">WordPress Tricks</a></li>
							<li><a href="#">Sentences</a></li>
							<li><a href="#">Video Gallery</a></li>
							<li><a href="#">Artwork</a></li>
						</ul>
					</div>
				</div>	 -->			
			</div>
		</div>
		<!-- End Widget Container-->
		
	</div>
	<!-- End 960 Container -->

		
		<!-- Back To Top Button -->
		<div id="backtotop"><a href="#"></a></div>
		
		<!-- Imagebox Build -->
		<script src="/travel/Public/js/Note/imagebox.build.js"></script>
</body>
</html>