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
	
</head>
<body>
	<!-- 960 Container -->
	<div class="container">
	
		<!-- Posts Container-->
		<div class="eleven columns">
			<div id="blog_write_container">
		
				<!-- Post-->
				<div class="write">
					<div class="title">
						<form name="noteform" action="<?php echo U('Home/Note/update');?>" method="post">
							<label>
								<span style="color: red;">*</span>
								游记标题&nbsp;&nbsp;&nbsp;
							</label>
							<input id="titleinput" name="titlename" type="text" size="80" value="<?php echo ($data[0]['title']); ?>">
							<br/>
<!-- 							<label>
								<span style="color: red;">*</span>
								分类&nbsp;&nbsp;&nbsp;
							</label>
							<select name="category">  
							    <option value ="1">Volvo</option>  
							    <option value ="2">Saab</option>  
							    <option value="3">Opel</option>  
							    <option value="4">Audi</option>  
							</select>   -->
							<script id="container" name="content" type="text/plain">
					            <?php echo ($content); ?>
					        </script>
					        <input id="contenthead" name="contenthead" type="hidden" value="" >
					        <input id="preview" name="preview" type="hidden" value="" >
					        <input id="contentid" name="contentid" type="hidden" value="<?php echo ($data[0]['id']); ?>" >
							<a href="#" id="pushlish_top" class="publish" onclick="mySubmit()">
								<span class="publish-icon">修改游记</span>
							</a>														
						</form>
					</div>
					<div class="containerarea">
						<!-- 加载编辑器的容器 -->
						<script type="text/javascript">
							window.UEDITOR_HOME_URL='/travel/Public/ueditor/';
						</script>
						<a href="#" onclick="mySubmit()" class="commit"></a>
					    <!-- 配置文件 -->
					    <script type="text/javascript" src="/travel/Public/ueditor/ueditor.config.js"></script>
					    <!-- 编辑器源码文件 -->
					    <script type="text/javascript" src="/travel/Public/ueditor/ueditor.all.js"></script>
					    <!-- 实例化编辑器 -->
					    <script type="text/javascript">
					        var ue = UE.getEditor('container', {
									    initialFrameWidth:1000,
									    initialFrameHeight:500,
									});

					    </script>
					</div>
				</div>
				<!-- End Post-->
				
			</div><!-- End Posts Container-->
		</div>	
	</div>
	<!-- End 960 Container -->
	<!-- Back To Top Button -->
	<div id="backtotop"><a href="#"></a></div>
	
	<!-- Imagebox Build -->
	<script src="/travel/Public/js/Note/imagebox.build.js"></script>
	<script type="text/javascript">
		function mySubmit(){
			var txt = ue.getContentTxt();
			var str = txt.substring(0,10);
			var str2= txt.substring(0,200);
			document.getElementById('contenthead').value=str;
			document.getElementById('preview').value=str2;
			if(ue.hasContents()){
	            ue.sync();       //同步内容
	            document.noteform.submit();
	        }
	        else
	        	alert("没有内容哦！");
		}
	</script>

</body>
</html>