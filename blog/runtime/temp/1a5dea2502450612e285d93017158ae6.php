<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/var/www/html/blog/public/../application/admin/view/index/family.html";i:1497282159;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>莫忘个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="__PUBLICCSS__bootstrap.min.css" rel="stylesheet">
<link href="__PUBLICCSS__base.css" rel="stylesheet">
<link href="__PUBLICCSS__index.css" rel="stylesheet">
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
      <h2>My Family</h2>
      <div class="blogs">
      <?php if(is_array($family) || $family instanceof \think\Collection || $family instanceof \think\Paginator): $i = 0; $__LIST__ = $family;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <figure >
          <img style="width: 300px;height: 300px;" src="__PHOTO__<?php echo $v['Photo']; ?>"></figure>
       <?php endforeach; endif; else: echo "" ;endif; ?> 
      </div>
       
      <div style="position:relative;top: 0px;">
      <?php echo $family->render(); ?>      
      </div> 
      </div>
</body>
</html>
