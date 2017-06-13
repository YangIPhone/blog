<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\chatroom\public/../application/admin\view\index\index.html";i:1497322955;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>莫忘个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="__PUBLICCSS__bootstrap.min.css" rel="stylesheet">
<link href="__PUBLICCSS__base.css" rel="stylesheet">
<link href="__PUBLICCSS__index.css" rel="stylesheet">
<script type="text/javascript" src="__PUBLICJS__jquery.min.js"></script>
<script type="text/javascript" src="__PUBLICJS__sliders.js"></script>
<!--[if lt IE 9]>
<script src="__PUBLICJS__modernizr.js"></script>
<![endif]-->
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
<article>
  <div class="l_box f_l">
    <div class="banner">
      <div id="slide-holder">
        <div id="slide-runner">
        <a href="/" target="_blank">
        <img id="slide-img-1" src="__PUBLICIMG__a1.jpg"  alt="" />
        </a> 
        <a href="/" target="_blank">
        <img id="slide-img-2" src="__PUBLICIMG__a2.jpg"  alt="" />
        </a> 
        <a href="/" target="_blank">
        <img id="slide-img-3" src="__PUBLICIMG__a3.jpg"  alt="" />
        </a> <a href="/" target="_blank">
        <img id="slide-img-4" src="__PUBLICIMG__a4.jpg"  alt="" />
        </a>
          <div id="slide-controls">
            <p id="slide-client" class="text"><strong></strong><span></span></p>
            <p id="slide-desc" class="text"></p>
            <p id="slide-nav"></p>
          </div>
        </div>
      </div>
      <script>
	  if(!window.slider) {
		var slider={};
	}

	slider.data= [
    {
        "id":"slide-img-1", // 与slide-runner中的img标签id对应
        "client":"标题1",
        "desc":"这里修改描述 这里修改描述 这里修改描述" //这里修改描述
    },
    {
        "id":"slide-img-2",
        "client":"标题2",
        "desc":"add your description here"
    },
    {
        "id":"slide-img-3",
        "client":"标题3",
        "desc":"add your description here"
    },
    {
        "id":"slide-img-4",
        "client":"标题4",
        "desc":"add your description here"
    } 
	];

	  </script> 
    </div>
    <!-- banner代码 结束 -->
    <div class="topnews">
      <h2><b>文章</b>推荐</h2>
      <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <div class="blogs">
        <figure><img src="__PUBLICIMG__<?php echo $v['Img']; ?>"></figure>
        <ul>
          <h3><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>"><?php echo $v['Title']; ?></a></h3>
          <p><?php echo $v['Content']; ?></p>
          <p class="autor"><span class="lm f_l"><a href="/">个人博客</a></span><span class="dtime f_l"><?php echo $v['Time']; ?></span><span class="viewnum f_r">浏览（<a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $v['ID']; ?>"><?php echo $v['Clicknum']; ?></a>）</span>
        </ul>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>       
    </div>
  </div>
  <div class="r_box f_r">
    <div class="tit01">
      <h3>关注我</h3>
      <div class="gzwm">
        <ul>
          <li><a class="xlwb" href="http://weibo.com/" target="_blank">新浪微博</a></li>
          <li><a class="txwb" href="http://t.qq.com/" target="_blank">腾讯微博</a></li>
          <li><a class="rss" href="http://www.163.com/rss/" target="_blank">RSS</a></li>
          <li><a class="wx" href="https://mail.qq.com/" target="_blank">QQ邮箱</a></li>
        </ul>
      </div>
    </div>
    <!--tit01 end-->
    <div class="ad300x100"> <img src="__PUBLICIMG__ad300x100.jpg"> </div>
    <div class="moreSelect" id="lp_right_select"> 
      <script>
window.onload = function ()
{
	var oLi = document.getElementById("tab").getElementsByTagName("li");
	var oUl = document.getElementById("ms-main").getElementsByTagName("div");
	
	for(var i = 0; i < oLi.length; i++)
	{
		oLi[i].index = i;
		oLi[i].onmouseover = function ()
		{
			for(var n = 0; n < oLi.length; n++) oLi[n].className="";
			this.className = "cur";
			for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
			oUl[this.index].style.display = "block"
		}	
	}
}
</script>
      <div class="ms-top">
        <ul class="hd" id="tab">
          <li class="cur"><a href="/">点击排行</a></li>
          <li><a href="/">最新文章</a></li>
          <li><a href="/">站长推荐</a></li>
        </ul>
      </div>
      <div class="ms-main" id="ms-main">
       <div style="display: block;" class="bd bd-news" >
          <ul>
          <?php if(is_array($click) || $click instanceof \think\Collection || $click instanceof \think\Paginator): $i = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $t['ID']; ?>" target="_blank"><?php echo $t['Title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>           
          </ul>
        </div>
        <div  class="bd bd-news">
          <ul>
            <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $t['ID']; ?>" target="_blank"><?php echo $t['Title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
        <div class="bd bd-news">
          <ul>
           <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('/Clicknum'); ?>?ID=<?php echo $t['ID']; ?>" target="_blank"><?php echo $t['Title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
      <!--ms-main end --> 
    </div>
    <!--切换卡 moreSelect end -->
    
    <div class="cloud">
      <h3>标签云</h3>
      <ul>
        <li><a href="<?php echo url('/admin'); ?>" target="_blank" >个人博客</a></li>
        <li><a href="http://www.php.net/"  target="_blank" >PHP</a></li>
        <li><a href="http://www.thinkphp.cn/"  target="_blank" >ThinkPHP</a></li>
        <li><a href="http://www.workerman.net/"  target="_blank" >workerman</a></li>
        <li><a href="http://www.workerman.net//"  target="_blank" >Gatewaywork</a></li>
        <li><a href="http://www.w3school.com.cn/h.asp"  target="_blank" >Html5+css3</a></li>
        <li><a href="http://www.baidu.com"  target="_blank" >百度</a></li>
        <li><a href="http://www.w3school.com.cn/b.asp"  target="_blank" >Javasript</a></li>
        <li><a href="http://www.runoob.com/php/php-tutorial.html"  target="_blank" >PHP教程</a></li>
        <li><a href="http://neihanshequ.com/"  target="_blank">内涵段子</a></li>
      </ul>
    </div>
    <div class="tuwen">
      <h3>图文推荐</h3>
      <ul>
      	<?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <li><a href="/"><img src="__PUBLICIMG__<?php echo $v['Img']; ?>"><b><?php echo $v['Title']; ?></b></a>
          <p><span class="tulanmu"></span><span class="tutime"><?php echo $v['Time']; ?></span></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="ad"><img src="__PUBLICIMG__03.jpg"> </div>
  </div>
  <!--r_box end --> 
</article>
<footer>
  <p class="ft-copyright">杨昌权个人博客---后台</p>
</footer>
</body>
</html>
