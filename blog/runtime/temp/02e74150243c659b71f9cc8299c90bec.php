<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/var/www/html/blog/public/../application/index/view/index/game.html";i:1500140415;}*/ ?>
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
      <h2>About Games</h2>
      <div class="blogs">
      <?php if(is_array($game) || $game instanceof \think\Collection || $game instanceof \think\Paginator): $i = 0; $__LIST__ = $game;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
          <figure style="margin-right:20px ">
          <img style="width: 300px;height: 300px;" src="<?php echo PHOTO; ?><?php echo $v['Photo']; ?>"></figure>
       <?php endforeach; endif; else: echo "" ;endif; ?> 
      </div>
       
      <div style="position:relative;top: 0px;">
      <?php echo $game->render(); ?>      
      </div> 
      </div>
<footer  style="position: absolute;bottom: 0px;">
  <p class="ft-copyright">莫忘个人博客 Ymowang Blog <a href="http://www.miibeian.gov.cn/">渝ICP备17008739号-1</a></p>
  <div id="tbox"> <a id="togbook" href="/"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
</footer>
</body>
</html>
