<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>this is a view</title>
<style type="text/css">
*{
	margin:0 auto;
	padding:0;
}

</style>
</head>
<body>



<!--focus-->
<style>
.focus{
	font-style: 123;
}
</style>
<form id="form" action="/study/index.php/Home/Test/save" method="post" onsubmit="return sm()">
	姓名<input type="text" name="name" value="<?php echo ($a["name"]); ?>">
	密码<input type="text" name="pwd" value="<?php echo ($a["pwd"]); ?>"><br>
	手机号<input type="text" name="phone" value="<?php echo ($a["phone"]); ?>">
	邮箱<input type="text" name="email" value="<?php echo ($a["email"]); ?>"><br>
		<input type="submit" value="提交">
	id<input type="text" name="id" value="<?php echo ($a["id"]); ?>">
</form>
<script type="text/javascript" src="/study/Public/zepto.min.js"></script>
<script>
function sm(){

	$.post(
		$("#form").attr('action'),//地址
		$("#form").serialize(),//序列化参数
		function(data){
			// console.log(data);
			if(data==1){
				window.location.href="/study/index.php/Home/Test/";
			}else{
				alert(data);
			}
		}
	);

	return false;
}
</script>
<!--focus end-->

</body>
</html>