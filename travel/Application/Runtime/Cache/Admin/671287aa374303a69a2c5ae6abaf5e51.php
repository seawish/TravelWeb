<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>游记管理</title>
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
			<th>作者</th>
			<th>标题</th>
			<th>内容</th>
			<th>票数</th>
			<th>发布时间</th>
			<th>操作</th>				
		</tr>

		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["author"]); ?></td>
				<!-- '|' 左右必须无空格，不然会出错！！ -->
				<td><?php echo ($v["title"]); ?></td>
				<td><?php echo ($v["head"]); ?></td>
				<td><?php echo ($v["voteup"]); ?></td>
				<td><?php echo ($v["date"]); ?></td>
				<td>
					<!-- U方法中不能用点语法,第一个参数为网站地址，第二个参数为传入参数 -->
					<button onclick="window.location='<?php echo U('Admin/NoteManage/edit', array('id' => $v['id']));?>'">编辑</button>
					<button onclick="javascript:if(confirm('确实要删除吗?'))window.location='<?php echo U('Admin/NoteManage/delete', array('id' => $v['id']));?>'">删除</button>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='7' align='center'>
				<?php echo ($page); ?>
			</td>
		</tr>
	</table>

</body>
</html>