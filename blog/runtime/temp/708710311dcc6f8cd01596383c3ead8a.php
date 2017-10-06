<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/var/www/html/blog/public/../application/admin/view/index/articlelsit.html";i:1497286068;}*/ ?>
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
      <a href="<?php echo url('/articlelsit'); ?>">文章列表</a>
      <a href="<?php echo url('/wriarticle'); ?>">发布文章</a> 
       <a href="<?php echo url('/admin'); ?>">首页</a>      
      <a href="<?php echo url('/adphoto'); ?>" >相册</a> 
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
        <figure><img src="<?php echo IMG_URL; ?><?php echo $v['Img']; ?>"></figure>
        <ul>
          <h3><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>" target="_blank"><?php echo $v['Title']; ?></a></h3>
          <p><?php echo $v['Content']; ?></p>
          <p class="autor"><span class="lm f_l"><a href="/">个人博客</a></span><span class="dtime f_l"><?php echo $v['Time']; ?></span><span class="viewnum f_r">浏览（<a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>"><?php echo $v['Clicknum']; ?></a>）</span></p>
        <p class="autor"><span class="lm f_l"><a href="<?php echo url('/delete'); ?>?ID=<?php echo $v['ID']; ?>" style="font-size: 20px;">删除文章</a></span></p>
       <p class="autor"><span class="lm f_l"><a href="<?php echo url('/update'); ?>?ID=<?php echo $v['ID']; ?>" style="font-size: 20px;">修改文章</a></span></p>
        </ul>     
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>   
      <div style="position:relative;top: 0px;"> 
      <?php echo $article->render(); ?>     
      </div> 
      </div>
</body>
</html>