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
#wrap{
	position: relative;
	width: 50%;
	height: 300px;
}
#name{
	float: left;
}

#age{
	float: left;
}

#updata{
	float: left;
}
#name ,#age, #updata{
	list-style: none;
	margin-right: 30%;
}
.add{
	bottom: 0;
	position: absolute;
    left: 40%;
}
.add li{
	float: left;
	list-style: none;
	margin-left: 10px;
}
</style>
</head>
<body>

<!-- <table border="1">
	<tr>
		<td>id</td>
		<td>姓名</td>
		<td>操作</td>
	</tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["name"]); ?></td>
		<td><a href="/study/index.php/Home/Index/view/id/<?php echo ($v["id"]); ?>">编辑</a></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table> -->

<div id="wrap">

	<ul id="name">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li> 姓名：<?php echo ($v["name"]); ?> 
		     年龄：<?php echo ($v["age"]); ?> 
		     <a href="/study/index.php/Home/Index/view/id/<?php echo ($v["id"]); ?>">编辑</a>
		     <a href="/study/index.php/Home/Index/del/id/<?php echo ($v["id"]); ?>">删除</a>
	    </li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>

	<ul class="add">
	<li><a href="/study/index.php/Home/Index/view" >添加</a></li>
	
    </ul>
</form>
	<!-- <input type="button" value="编辑">
	
	<input type="button" value="删除"> -->

</div>
</body>

</html>