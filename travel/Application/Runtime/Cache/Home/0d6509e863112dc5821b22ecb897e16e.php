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
					<li class="active"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Home/City/index');?>">目的地</a></li>
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
	<!--start-image-slider---->
	<div class="image-slider">
		<!-- Slideshow 1 -->
		<ul class="rslides" id="slider1">
			<li><img src="/travel/Public/images/Index/slider4.jpg" alt=""></li>
			<li><img src="/travel/Public/images/Index/slider2.jpg" alt=""></li>
			<li><img src="/travel/Public/images/Index/slider3.jpg" alt=""></li>
			<li><img src="/travel/Public/images/Index/slider1.jpg" alt=""></li>
		</ul>
		<!-- Slideshow 2 -->
	</div>
		<!--End-image-slider---->
	<!---End-wrap---->
	<div class="clear"> </div>
	<!---start-content---->
	<div class="content">
		    <div class="content_top">
		    	<div class="wrap">
					<h1><a href="#">欢迎</a></h1>
					<p>有时我们选择改变，并非经过深思熟虑，而更像是听见了天地间冥冥中的呼唤，呼唤你前往另一个地方，过上另一种生活。你并不一定会从此拥有更美好的人生，可你仍然感谢天地和人世所带来的这些变化和发生。不然你大概会一直好奇和不甘吧——家门前的那条小路，到底通向了什么样的远方呢？</p>
					<span><a class="learnmore" href="#C4">了解更多</a></span>
				</div>
		    </div>
		<div class="content-grids">
			<a name="C4"></a>
			<div class="wrap">
			 <div class="grid">
				<a href="<?php echo U('Home/City/index');?>"><img src="/travel/Public/images/Index/grids-img1.jpg" title="image-name" /></a>
				<h3>目的地</h3>
				<p>人在途中，心随景动，从起点，到尽头，也许快乐，或有时孤独，如果心在远方，只需勇敢前行，梦想自会引路，有多远，走多远，把足迹连成生命线。</p>
				<a class="button" href="<?php echo U('Home/City/index');?>">更多</a>
			</div>
			<div class="grid">
				<a href="<?php echo U('Home/Service/index');?>"><img src="/travel/Public/images/Index/grids-img2.jpg" title="image-name" /></a>
				<h3>服务</h3>
				<p>旅游时最好的习惯：找个舒适的小店，挑张雅致的明信片，送给中意的TA，背面写上：某年某月某日，下午某时，天气晴，我在某地，想念你。</p>
				<a class="button" href="<?php echo U('Home/Service/index');?>">更多</a>
			</div>
			<div class="grid last-grid">
				<a href="<?php echo U('Home/Note/index');?>"><img src="/travel/Public/images/Index/grids-img3.jpg" title="image-name" /></a>
				<h3>游记</h3>
				<p>我要准备好行李启程了，谢谢关心我的家人和朋友，为我祈祷平安就好。我的旅行，会有你们的故事陪伴，所以我不会孤单。放心吧。</p>
				<a class="button" href="<?php echo U('Home/Note/index');?>">更多</a>
			</div>
			
			<div class="clear"> </div>
		</div>
	 </div>
		<div class="specials">
			<div class="wrap">
				<div class="specials-heading">
					<h3>个人中心</h3>
				</div>
				<div class="specials-grids">
					<div class="special-grid">
						<img src="/travel/Public/images/Index/grids-img1.jpg" title="image-name" />
						<a href="<?php echo U('Home/Note/manage');?>">游记</a>
						<p>生活是一段奇妙的旅行，就在那一去无返的火车上。与那些新人和旧人们共同经历吧！也许这就是一个人无法抗拒的命运，有你、有我、也有他。</p>
					</div>
					<div class="special-grid">
						<img src="/travel/Public/images/Index/grids-img2.jpg" title="image-name" />
						<a href="#">攻略</a>
						<p>对于旅行，从来都记忆模糊。记不得都去了哪些地方，看了哪些风景，遇到哪些人。尽管同学说，去旅行不在于记忆，而在于当时的那份心情。</p>
					</div>
					<div class="special-grid spe-grid">
						<img src="/travel/Public/images/Index/grids-img3.jpg" title="image-name" />
						<a href="#">计划</a>
						<p>旅行是一种病。一旦感染了，你就再也无法摆脱。它还是一种传染病，最后你可能把这种病传染给其他人而你自己根本就不想从中解脱出来！</p>
					</div>
					
					<div class="clear"> </div>
				</div>
		    </div>
		</div>	
		<div class="testmonials">
			<div class="wrap">
				<div class="testmonial-grid">
					<h3>结束语 :</h3>
					<p>如果你不出去走走，你就会以为这就是世界。</p>
					
				</div>
			</div>
		</div>
	</div>
	<!---End-content---->
	<div class="clear"> </div>

	<div class="clear"> </div>
</body>
</html>