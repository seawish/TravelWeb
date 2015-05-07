<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/travel/Public/Admin/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/travel/Public/Admin/Js/index.js"></script>
<link rel="stylesheet" href="/travel/Public/Admin/css/public.css" />
<link rel="stylesheet" href="/travel/Public/Admin/css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">网站管理</a>
			<a href="#">用户管理</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出</a>
		</div>
	</div>
	<div class="content">
		<div id="left">
		<dl>
			<dt>网站管理</dt>
			<dd><a href="<?php echo U('Admin/NoteManage/index');?>">游记管理</a></dd>
			<dd><a href="#">攻略管理</a></dd>
			<dd><a href="#">画册管理</a></dd>
			<dd><a href="#">目的地管理</a></dd>
		</dl>
		<dl>
			<dt><a href="<?php echo U('Admin/User/index');?>">用户管理</a></dt>
<!-- 			<dd><a href="<?php echo U('Admin/User/index');?>">查看角色</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/role');?>">更改锁定</a></dd>
			<dd><a href="<?php echo U('Admin/Rbac/node');?>">更改密码</a></dd> -->
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="<?php echo U('Admin/NoteManage/welcome');?>"></iframe>
	</div>
	</div>
	
</body>
</html>