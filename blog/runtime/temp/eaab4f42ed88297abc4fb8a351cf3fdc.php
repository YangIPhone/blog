<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\chatroom\public/../application/index\view\index\family.html";i:1497260034;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>莫忘个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo CSS_URL; ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo CSS_URL; ?>base.css" rel="stylesheet">
<link href="<?php echo CSS_URL; ?>index.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo JS_URL; ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_URL; ?>sliders.js"></script>
</head>
<body>
<header>
  <div class="logo f_l"> <a href="/"><img src="<?php echo IMG_URL; ?>logo.png"></a> </div>
  <nav id="topnav" class="f_r">
    <ul>
      <a href="<?php echo url('/index'); ?>">首页</a> 
      <a href="<?php echo url('/aboutme'); ?>" >关于我</a>
      <a href="<?php echo url('/article'); ?>" >文章</a> 
      <a href="<?php echo url('/photo'); ?>" >相册</a> 
      <a href="<?php echo url('/leavemessage'); ?>">留言</a>
      <a href="<?php echo url('/showmessage'); ?>">留言板</a>
    </ul>
    <script src="<?php echo JS_URL; ?>nav.js"></script> 
  </nav>
</header>
  <div class="topnews">
      <h2>My Family</h2>
      <div class="blogs">
      <?php if(is_array($family) || $family instanceof \think\Collection || $family instanceof \think\Paginator): $i = 0; $__LIST__ = $family;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <figure >
          <img style="width: 300px;height: 300px;" src="<?php echo PHOTO; ?><?php echo $v['Photo']; ?>"></figure>
       <?php endforeach; endif; else: echo "" ;endif; ?> 
      </div>
       
      <div style="position:relative;top: 0px;">
      <?php echo $family->render(); ?>      
      </div> 
      </div>
</body>
</html>
