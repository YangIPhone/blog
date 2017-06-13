<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\chatroom\public/../application/index\view\index\photo.html";i:1497252182;}*/ ?>
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
      <h2><b>相册</b>分类</h2>
      <?php if(is_array($photo) || $photo instanceof \think\Collection || $photo instanceof \think\Paginator): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <div class="blogs">
        <figure><img src="<?php echo PHOTO; ?><?php echo $v['Photo']; ?>"></figure>
        <ul>
          <h3><a href="/<?php echo $v['Type']; ?>"><?php echo $v['Type']; ?>(<?php echo $v['Num']; ?>)</a></h3>
          <p><?php echo $v['Intro']; ?></p>
          <p class="autor"><span class="lm f_l"><a href="/"><?php echo $v['Type']; ?></a></span><span class="dtime f_l"><?php echo $v['Time']; ?></span><span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
        </ul>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>   
      <div style="position:relative;top: 0px;">      
      </div> 
      </div>
</body>
</html>
