<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\chatroom\public/../application/index\view\leavemessage\index.html";i:1497197728;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>留言板</title>
<link rel="stylesheet" type="" href="<?php echo CSS_URL; ?>style.css">
<link rel="stylesheet" href="/layui/css/layui.css">
		<script src="/layui/layui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<style>
	body h2 {
  color: #fff;
  text-align: center;
  padding-top:10px;
    position: relative;top: 0px;
}
</style>
</head>
<body>
	<h1>留下你的足迹</h1>
	<div class="login-01">
			<form id="textform" action="<?php echo url('message'); ?>" method="post">
				<ul>
				<li class="first">
					<p class=" icon user"></p></a><input type="text" class="text" name="Name" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" >
					<div class="clear"></div>
				</li>
				<li class="first">
					<p class=" icon email"></p><input type="text" class="text" name="Email" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" >
					<div class="clear"></div>
				</li>
					<input type="hidden" name="Time" value="<?php echo date('Y-m-d H:i:s'); ?>" />
				<li class="second">
				<p class=" icon msg"></p></a><textarea id="demo" name="Message" value="Message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Comments';}"></textarea>
				<div class="clear"></div>
				</li>
			</ul>
			<input type="submit" onClick="myFunction()" value="Submit" >
			<div class="clear"><a style="text-decoration:none;" href="<?php echo url('/index'); ?>"><h2>返回首页</h2></a></div>
		</form>
</div>
	<script type="text/javascript">
layui.use('layedit', function(){
var layedit = layui.layedit;
var abc=layedit.build('demo',{tool: ['strong','italic','underline','del','link','unlink','left', 'center', 'right','face',]});//建立编辑器
});
</script>
</body>
</html>