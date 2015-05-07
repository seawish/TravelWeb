<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>用户管理</title>
</head>
<body>

	<table style="width:100%;" border="" >
		<tr >
			<th>id</th>
			<th>用户名</th>
			<th>密码</th>
			<th>Email</th>
			<th>锁定</th>
			<th>操作</th>				
		</tr>

		<tr>
			<form action="<?php echo U('Admin/User/update', array('id' => $v['id']));?>" method="post">
				<td><input name="id" type="text" value="<?php echo ($v[0]['id']); ?>"></td>
				<td><input name="username" type="text" value="<?php echo ($v[0]['username']); ?>"></td>
				<!-- '|' 左右必须无空格，不然会出错！！ -->
				<td><input name="password" type="text" value="<?php echo ($v[0]['password']); ?>"></td>
				<td><input name="email" type="text" value="<?php echo ($v[0]['email']); ?>"></td>
				<td><input name="islock" type="text" value="<?php echo ($v[0]['islock']); ?>"></td>
				<td>
					<!-- U方法中不能用点语法,第一个参数为网站地址，第二个参数为传入参数 -->
					<input type="submit" value="确定" />
				</td>
			</form>
		</tr>

	</table>

</body>
</html>