<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>this is a index</title>
<style type="text/css">
*{
	margin:0 auto;
	padding:0;

}
</style>
</head>
<body>

<form action="" method="post" onsubmit="">
</form>

<div id="wrap">
	<ul>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li id="<?php echo ($v["id"]); ?>">
			姓名：<?php echo ($v["name"]); ?>
			密码：<?php echo ($v["pwd"]); ?> 
			手机：<?php echo ($v["phone"]); ?>
			邮箱：<?php echo ($v["email"]); ?>
			<a href="/study/index.php/Home/Test/view/id/<?php echo ($v["id"]); ?>">修改</a>
			<a href="javascript:del(<?php echo ($v["id"]); ?>)">删除</a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<a href="/study/index.php/Home/Test/view">添加</a>
</div>
<script type="text/javascript" src="/study/Public/zepto.min.js"></script>
<script type="text/javascript">



function del(id){
	$.post(
		"/study/index.php/Home/Test/del",//地址
		{id: id},
		function (data) {

			if(data==1){
				// $('.del["<?php echo ($v["id"]); ?>"]').click(
				$('#' + id).remove();

				// );
			}
			else{
				alert('删除失败');
			}

		});
	}
</script>
	
</body>

</html>