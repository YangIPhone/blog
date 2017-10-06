<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/var/www/html/blog/public/../application/index/view/index/article.html";i:1502179929;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>莫忘个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo CSS_URL; ?>bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="" href="<?php echo CSS_URL; ?>style.css">
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
      <h2><b>文章</b>列表</h2>
      <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <div class="blogs">
        <figure><img src="<?php echo ARTIMG_URL; ?><?php echo $v['Img']; ?>"></figure>
        <ul>
          <h3><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>" target="_blank"><?php echo $v['Title']; ?></a></h3>
          <p><?php echo $v['Content']; ?></p>
          <p class="autor"><span class="lm f_l"><a href="/">个人博客</a></span><span class="dtime f_l"><?php echo $v['Time']; ?></span><span class="viewnum f_r">浏览（<a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>"><?php echo $v['Clicknum']; ?></a>）</span></p>
        </ul>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>   
      <div style="position:relative;top: 0px;"> 
      <?php echo $article->render(); ?>     
      </div> 
      </div>
<address>
<footer >
  <p class="ft-copyright">莫忘个人博客 Ymowang Blog <a href="http://www.miibeian.gov.cn/">渝ICP备17008739号-1</a></p>
</footer>
 </address>
</body>
</html>
