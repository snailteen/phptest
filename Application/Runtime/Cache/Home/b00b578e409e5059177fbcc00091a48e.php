<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>this is a view</title>
<style type="text/css">
*{
	margin:0 auto;
	padding:0;


</style>
</head>
<body>
<form action="/study/index.php/Home/Index/save" method="post">
	姓名<input type="text" name="name" value="<?php echo ($a["name"]); ?>">
	年龄<input type="text" name="age" value="<?php echo ($a["age"]); ?>">
<input type="submit" value="提交" >
<input type="text" name="id" value="<?php echo ($a["id"]); ?>">
</form>

</body>
</html>