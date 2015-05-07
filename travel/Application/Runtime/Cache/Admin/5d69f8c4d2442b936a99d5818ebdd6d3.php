<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>用户管理</title>
	<script type="text/javascript">
		function p_del() { 
			var msg = "您真的确定要删除吗？\n\n请确认！"; 
			if (confirm(msg)==true){ 
				return true; 
			}else{ 
				return false; 
			} 
		} 
	</script>
</head>
<body>

	<table style="width:100%;" border="" >
		<tr >
			<th>id</th>
			<th>用户名</th>
			<th>密码</th>
			<th>Email</th>
			<th>登录时间</th>
			<th>登陆ip</th>
			<th>锁定</th>
			<th>权限</th>
			<th>操作</th>				
		</tr>

		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["username"]); ?></td>
				<!-- '|' 左右必须无空格，不然会出错！！ -->
				<td><?php echo ($v["password"]); ?></td>
				<td><?php echo ($v["email"]); ?></td>
				<td><?php echo ($v["logintime"]); ?></td>
				<td><?php echo ($v["loginip"]); ?></td>
				<td><?php echo ($v["islock"]); ?></td>
				<td><?php echo ($v["role"]); ?></td>
				<td>
					<!-- U方法中不能用点语法,第一个参数为网站地址，第二个参数为传入参数 -->
					<button onclick="window.location='<?php echo U('Admin/User/edit', array('id' => $v['id']));?>'">编辑</button>
					<button onclick="javascript:if(confirm('确实要删除吗?'))window.location='<?php echo U('Admin/User/delete', array('id' => $v['id']));?>'">删除</button>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='8' align='center'>
				<?php echo ($page); ?>
			</td>
		</tr>
	</table>

</body>
</html>