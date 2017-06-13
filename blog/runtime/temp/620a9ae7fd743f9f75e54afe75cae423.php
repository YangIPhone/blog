<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"E:\chatroom\public/../application/index\view\index\head.html";i:1497200727;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>莫忘个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo CSS_URL; ?>base.css" rel="stylesheet">
<link href="<?php echo CSS_URL; ?>index.css" rel="stylesheet">
</head>
<body>
<header>
  <div class="logo f_l"> <a href="/"><img src="<?php echo IMG_URL; ?>logo.png"></a> </div>
  <nav id="topnav" class="f_r">
    <ul>
      <a href="<?php echo url('/index'); ?>" target="_blank">首页</a> 
      <a href="<?php echo url('/aboutme'); ?>" target="_blank">关于我</a>
      <a href="<?php echo url('/article'); ?>" target="_blank">文章</a> 
      <a href="<?php echo url('/mood'); ?>" target="_blank">心情</a> 
      <a href="<?php echo url('/photo'); ?>" target="_blank">相册</a> 
      <a href="<?php echo url('/leavemessage'); ?>" target="_blank">留言</a>
    </ul>
  </nav>
</header>
</body>
</html>
