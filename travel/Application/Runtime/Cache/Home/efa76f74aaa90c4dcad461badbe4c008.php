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
	<script type="text/javascript">
		var xmlHttp;

		function voteup()
		{ 
			xmlHttp=GetXmlHttpObject();
			if (xmlHttp==null)
			 {
			 alert ("Browser does not support HTTP Request");
			 return;
			 }
			var url="<?php echo U('Home/Note/vote');?>";
			url=url+"?id="+<?php echo ($data[0]['id']); ?>;
			url=url+"&sid="+Math.random();
			xmlHttp.onreadystatechange=stateChanged;
			xmlHttp.open("GET",url,true);
			xmlHttp.send();
		}

		function stateChanged() 
		{ 
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
			 { 
			 document.getElementById("upnum").innerHTML=xmlHttp.responseText ;
			 } 
			}

			function GetXmlHttpObject()
			{
			var xmlHttp=null;
			try
			 {
			 // Firefox, Opera 8.0+, Safari
			 xmlHttp=new XMLHttpRequest();
			 }
			catch (e)
			 {
			 //Internet Explorer
			 try
			  {
			  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			  }
			 catch (e)
			  {
			  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			 }
			return xmlHttp;
		}
	</script>
	
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
				<!-- Post-->
				<div class="post">
					<h2 style="width:80%;float:left"><?php echo ($data[0]['title']); ?></h2>
					<div class="voter" style="width:20%;float:left;height:40px;padding-top:7px;">
						<button class="up" style="background: #5CADE2; color: #fff; width:90px; height:30px;" onclick="voteup()">
							<i class="icon vote-arrow"></i>
							<span class="label">赞同</span>
							<span id="upnum" class="count"><?php echo ($data[0]['voteup']); ?></span>
						</button>
						<button class="down" style="background: #EC7064; color: #fff; width:90px; height:30px;">
							<i class="icon vote-arrow"></i>
							<span class="label">反对</span>
						</button>
					</div>
					<div class="post-meta">
						<span class="icon-calendar"></span><?php echo ($data[0]['date']); ?><span class="icon-author"></span>By 
						<a href="#"><?php echo ($data[0]['author']); ?></a>  
						<span class="icon-comment"></span>With 
						<a href="#"><?php echo ($count); ?> Comments</a>
					</div>
					<div class="post-content">
						<br/>
						<?php echo ($content); ?>
					<br/>
					</div>
				</div>
				<!-- End Post-->
				<!-- Navigation -->
				<a href="#" class="older_entires">上一页</a>
				<a href="#" class="newer_entires">下一页</a>
				<!-- Comments -->
				<div class="comments-sec">
					<h3>Comments <span>(<?php echo ($count); ?>)</span></h3>
	
					<ol class="commentlist">
						<?php if(is_array($comment)): foreach($comment as $key=>$v): ?><li>
 								<div class="comments">
									<div class="avatar">
										<img src="/travel/Public/images/nophoto2.png" alt="" width="50" height="50" border="0" /> 
									</div>
									<div class="comment-des" style="width: 570px; margin-left: 20px;">
										<div class="comment-by">
											<strong><?php echo ($v["uname"]); ?></strong>
											<span class="reply">
												<span style="color:#aaa">/ </span>
												<a href="#">Reply</a>
											</span> 
											<span class="date"><?php echo ($v["date"]); ?></span>
										</div>
										<p><?php echo ($v["content"]); ?></p>
									</div>
								</div> 
								<!--<ol class="childlist">
									<li>
									<div class="comments">
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt="" border="0" /> </div>
										<div class="comment-des">
										<div class="comment-by"><strong>Admin</strong><span class="reply"><span style="color:#aaa">/ </span><a href="#">Reply</a></span> <span class="date">5 February 2012</span></div>
										<p>Dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus. Mauris a felis arcu, vitae sollicitudin mauris. Aliquam quis tellus vel massa mattis ornare.</p>
										</div>
									</div>
									</li>
								</ol> -->
							</li><?php endforeach; endif; ?>
						
					 </ol>
					 
				</div>
				<!-- End Comments -->
				
				<!-- Form -->
				<form action="<?php echo U('Home/Note/commentsubmit');?>" method="post">
					<div class="comments-sec">
						<br/>
						<h3>发表评论</h3>
						<div class="form_comment">										
								<div>
									<label>内容: <span>*</span></label>
									<textarea name="content"></textarea>
								</div>
						</div>
						<div class="form_send">
							<input name="nid" type="hidden" value="<?php echo ($data[0]['id']); ?>">
							<input name="uname" type="hidden" value="<?php echo(session('username'))?>">
						 	<input name="uid" type="hidden" value="<?php echo(session('uid'))?>">
							<input type="submit" value="提交"/>
						</div>
					</div>
				</form>

				<!-- End Form -->
				
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