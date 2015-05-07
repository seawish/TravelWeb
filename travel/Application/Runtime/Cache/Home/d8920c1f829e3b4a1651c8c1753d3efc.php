<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>交通搜索</title>


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

<link rel="stylesheet" href="/travel/Public/css/flight/bootstrap.css" />
<link href="/travel/Public/css/Index/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link rel="stylesheet" href="/travel/Public/css/flight/style.css" />
<script type="text/javascript">
	function guoneijump(){
		var departure=document.getElementById("homecity_name").value;
		var arrival=document.getElementById("getcity_name").value;
		window.open('http://flight.qunar.com/schedule/fsearch_list.jsp?departure='+departure+'&arrival='+arrival); 
	}
	function guojijump(){
		var departure=document.getElementById("guojid").value;
		var arrival=document.getElementById("guojia").value;
		window.open('http://flight.qunar.com/schedule/international/fsearch_list.jsp?departure='+departure+'&arrival='+arrival); 
	}
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
	<div class="span12 content">
		<div class="box">
			<div class="box-head">
				<h3>国内航班</h3>
			</div>
			<div class="box-content">
				<div class="form-horizontal">
				
					<div class="control-group">
						<label class="control-label">出发地</label>
						<div class="controls">
							<div class="input-append">
								<!-- <input type="text" class="span6 input-square" /> -->
								<input type="text" value="" size="15" id="homecity_name" name="homecity_name" mod="address|notice" mod_address_source="hotel" mod_address_suggest="@Beijing|北京|53@Shanghai|上海|321@Shenzhen|深圳|91@Guangzhou|广州|80@Qingdao|青岛|292@Chengdu|成都|324@Hangzhou|杭州|383@Wuhan|武汉|192@Tianjin|天津|343@Dalian|大连|248@Xiamen|厦门|61@Chongqing|重庆|394@" mod_address_reference="cityid" mod_notice_tip="中文/拼音" />
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">目的地</label>
						<div class="controls">
							<!-- <input type="text" class="span6 input-square" /> -->
							<input type="text" value="" size="15" id="getcity_name" name="getcity_name" mod="address|notice" mod_address_source="hotel" mod_address_suggest="@Beijing|北京|53@Shanghai|上海|321@Shenzhen|深圳|91@Guangzhou|广州|80@Qingdao|青岛|292@Chengdu|成都|324@Hangzhou|杭州|383@Wuhan|武汉|192@Tianjin|天津|343@Dalian|大连|248@Xiamen|厦门|61@Chongqing|重庆|394@" mod_address_reference="getcityid" mod_notice_tip="中文/拼音" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">航班号</label>
						<div class="controls">
							<input type="text" class="span6 input-square" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label">&nbsp;</label>
						<div class="controls">
							<input type="button" class="btn btn-fo" value="查询" onclick="guoneijump()" />
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box-head">
				<h3>国际航班</h3>
			</div>
			<div class="box-content">
				<div class="form-horizontal">				
					<div class="control-group">
						<label class="control-label">出发地</label>
						<div class="controls">
							<div class="input-append">
								<!-- <input type="text" class="span6 input-square" /> -->
								<input id="guojid" type="text" value="" size="15"/>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">目的地</label>
						<div class="controls">
							<!-- <input type="text" class="span6 input-square" /> -->
							<input id="guojia" type="text" value="" size="15"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">航班号</label>
						<div class="controls">
							<input type="text" class="span6 input-square" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label">&nbsp;</label>
						<div class="controls">
							<input type="button" class="btn btn-fo" value="查询" onclick="guojijump()" />
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>

	<div id="jsContainer" class="jsContainer" style="height:0">
	    <div id="tuna_alert" style="display:none;position:absolute;z-index:999;overflow:hidden;"></div>
	    <div id="tuna_jmpinfo" style="visibility:hidden;position:absolute;z-index:120;"></div>
	</div>
<script type="text/javascript" src="/travel/Public/js/flight/fixdiv.js"></script>
<script type="text/javascript" src="/travel/Public/js/flight/address.js"></script>

</body>
</html>