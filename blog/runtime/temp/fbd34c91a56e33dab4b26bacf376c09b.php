<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\chatroom\public/../application/admin\view\index\update.html";i:1497285435;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>修改文章</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="__PUBLICCSS__bootstrap.min.css" rel="stylesheet">
<link href="__PUBLICCSS__base.css" rel="stylesheet">
<link href="__PUBLICCSS__index.css" rel="stylesheet">
<link rel="stylesheet" href="/layui/css/layui.css">
<script src="/layui/layui.js"></script>
<script type="text/javascript" src="__PUBLICJS__jquery.min.js"></script>
<script type="text/javascript" src="__PUBLICJS__sliders.js"></script>
</head>
<body>
<header>
  <div class="logo f_l"> <a href="/"><img src="__PUBLICIMG__logo.png"></a> </div>
  <nav id="topnav" class="f_r">
    <ul>
      <a href="<?php echo url('/admin'); ?>">首页</a>
      <a href="<?php echo url('/wriarticle'); ?>">发布文章</a> 
      <a href="<?php echo url('/articlelsit'); ?>">文章列表</a> 
      <a href="<?php echo url('/adphoto'); ?>" >相册</a> 
      <a href="<?php echo url('/leavemessage'); ?>">留言</a>
      <a href="<?php echo url('/showmessage'); ?>">留言板</a>
    </ul>
    <script src="__PUBLICJS__nav.js"></script> 
  </nav>
</header>
  <div class="topnews">
      <form id="textform" action="<?php echo url('/update'); ?>" method="post">
         	 <h2>标题:<input type="text" name="Title" value="<?php echo $article['Title']; ?>" /></h2>        	 
				<textarea id="demo" name="Article"><?php echo $article['Content']; ?></textarea>
				<input type="hidden" name="Time" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
				<input type="hidden" name="ID" value="<?php echo $article['ID']; ?>"/>
			<center><input type="submit" value="修改" / >
			<div class="clear"><a style="text-decoration:none;" href="<?php echo url('/admin'); ?>">
				<h2>返回首页</h2></a>
			</div></center>
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
