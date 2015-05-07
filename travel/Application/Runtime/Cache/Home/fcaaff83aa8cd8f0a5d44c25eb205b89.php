<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type = "text/javascript" src = "/travel/Public/js/jquery.min.js"></script>
	<script type = "text/javascript" src = "/travel/Public/js/navigation.js"></script>
	<script type = "text/javascript" src = "/travel/Public/js/navigationT.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/navigation.css">	
	<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/navigationT.css">	
	<link rel = "stylesheet" type = "text/css" href = "/travel/Public/css/home_style.css">	

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<script src="/travel/Public/js/myspace/jquery-1.8.3.min.js"  type="text/javascript"></script>
	<script src="/travel/Public/js/myspace/js/main.js"  type="text/javascript"  language="JavaScript"></script>
	<link rel="stylesheet" type="text/css"href="/travel/Public/css/myspace/main.css"/>

	<script type = "text/javascript">
		var col
		function ChangeCol(){
			if(col == 1){
				$("div.metro_nav").show();
				$("div.metro_na").hide();
			}else if(col == 2){
				$("div.metro_nav").show();
				$("div.metro_na").hide();
			}else if(col == 3){
				$("div.metro_nav").hide();
				$("div.metro_na").show();
			}
			setColors();
		}
	</script>

	<style>
		body{
			margin : 0;
		}
		img{
			border : none;
		}
	</style>

</head>
<body>
	<div class= "metro_nav">
		<div class= "nav_title">自游网</div>
		<ul>
			<li>
				<a href = "<?php echo U('Home/Index/index');?>"><img src = "/travel/Public/images/icon_home.png"/><span>首页</span></a>
			</li>

			<li>
				<a><img src = "/travel/Public/images/icon_settings.png"/><span>目的地</span></a>
				<ul>
					<li><a href = "#"><img src = "/travel/Public/images/icon_account.png"/><span></span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_edit.png"/><span></span></a></li>
				</ul>
			</li>

			<li>
				<a href = "#"><img src = "/travel/Public/images/icon_shopping.png"/><span>攻略</span></a>
				<ul>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>

				</ul>
			</li>

			<li>
				<a href = "#"><img src = "/travel/Public/images/icon_gallery.png"/><span>游记</span></a>
				<ul>
					<li><a href ="<?php echo U('Home/Picture/index');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>画册</span></a></li>
					<li><a href = "<?php echo U('Home/Note/index');?>"><img src = "/travel/Public/images/icon_menu.png"/><span>发表</span></a></li>
				</ul>
			</li>

			<li>
				<a href = "#"><img src = "/travel/Public/images/icon_apps.png"/><span>行程</span></a>
				<ul>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>
					<li><a href = "#"><img src = "/travel/Public/images/icon_menu.png"/><span>Submenu</span></a></li>

				</ul>
			</li>
			<li>
				<a href = "<?php echo U('Home/Login/index');?>"><img src = "/travel/Public/images/icon_account.png"/><span><?php if (session('?username')) {echo(session('username'));} else echo("注册/登录"); ?></span></a>
			</li>
		</ul>
	</div>	
	<div id="main">
        <header>
            <div class="logo"></div>
            <div class="exit">admin,欢迎您 | 退出</div>
        </header>
    <nav>
        <div class="main-navigation">
        </div>
        <div class="collect">
        </div>
    </nav>
    <section>
        <aside>
            <div class="liftDiv">
                <div id="menu1" class="liftDefault">
                    <img src="images/create.png"/>
                    <a href="#"  >账 号 创 建</a>
                </div>
                <div id="menu2">
                    <img src="images/recharge.png"/>
                    <a href="#">手 机 充 值</a>
                </div>
                <div id="menu3">
                    <img src="images/credit.png"/>
                    <a href="#" >信用卡</a>
                </div>
                <div id="menu4">
                    <img src="images/safety.png"/>
                    <a href="#">安 全</a>
                </div>

            </div>
        </aside>
        <article>

            <div class="faceName">
                <h2>接口名称</h2>
                <div id="dragsList" class="faseT">
                    <ul class="dragsort" id="instUl">
                        <li itemid="1">
							<div class='s-mod-img'><span>177</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号1</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="2">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号2</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="3">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号3</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="4">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号4</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="5">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号5</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="6">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号6</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="7">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号7</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="8">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号8</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="9">
							<div class='s-mod-img'><span>1</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号9</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
						<li itemid="10">
							<div class='s-mod-img'><span>11</span></div>
							<div class="s-mod-container-wrap">
								<div class="s-mod-container">
									<div class="s-mod-wrap">
										<div class="s-mod-def"><span>创建账号10</span></div>
									</div>
									<div class="s-mod-cur">
										<span>
											注册各种账号， 支付宝账号去cif上注册；
										</span>
										<div class="s-mod-btn">
											<div class="btn btn-primary edit-btn">编辑</div>
											<div class="btn btn-primary add-btn">添加</div>
										</div>
									</div>
								</div>
							</div>
                        </li>
                    </ul>

                </div>

                <div id="rightMenu" class="content">
                    <ul>
                        <li>
                            创建条数
                        </li>
                        <li>
                           定义参数
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
</div>
</body>
</html>