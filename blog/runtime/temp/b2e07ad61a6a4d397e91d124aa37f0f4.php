<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/var/www/html/blog/public/../application/admin/view/login/index.html";i:1500141040;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录</title>
    <meta name="description" content="这是一个 login 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="__PUBLICI__favicon.png">
    <link rel="apple-touch-icon-precomposed" href="__PUBLICI__app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="__PUBLICCSS__amazeui.min.css" />
    <link rel="stylesheet" href="__PUBLICCSS__amazeui.datatables.min.css" />
    <link rel="stylesheet" href="__PUBLICCSS__app.css">
    <script src="__PUBLICJS__jquery.min.js"></script>
</head>
<body data-type="login">
    <script src="__PUBLICJS__theme.js"></script>
    <div class="am-g tpl-g">
        <div class="tpl-login">
            <div class="tpl-login-content"> 
            	<div class="tpl-login-logo" style="background: url(__PUBLICIMG__logob.png);">
                </div>
                <form class="am-form tpl-form-line-form" action="<?php echo url('login'); ?>" method="post">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" name="username" id="user-name" placeholder="请输入账号">
                        </div>
                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" name="password" id="user-name" placeholder="请输入密码">
                    </div>                    
                    <div class="am-form-group">
                    
			<div id="captcha_image" style="display: block;">
				<span style="color: #fff;">请输入验证码:</span>
                <input type="text" name="code" />
				<?php echo captcha_img(); ?>               
                <a  class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" href="<?php echo url('/registeri'); ?>" >注册</a>
			</div>
                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">登录</button>
                       <div style="color: #FFF">其他登录方式:
                       <a href="<?php echo url('/admin/login/qqconnect'); ?>"> <img src="__PUBLICIMG__qqlogo.png"/></a>
                       <a href="<?php echo url('/admin/login/wxconnect'); ?>"> <img src="__PUBLICIMG__wxlogo.png"/></a>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<address style=" text-align: center;color:#FFF;font-size:8px;">
<footer >
  <p>莫忘个人博客 Ymowang Blog <a href="http://www.miibeian.gov.cn/">渝ICP备17008739号-1</a></p>
  <div id="tbox"> <a id="togbook" href="/"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
</footer>
 </address>
    <script src="__PUBLICJS__amazeui.min.js"></script>
    <script src="__PUBLICJS__app.js"></script>
    <script>
		var Odiv= document.getElementById('captcha_image');
		var allImg=Odiv.getElementsByTagName('img');
		allImg[0].onclick=function()
		{
			this.src='/captcha.html?r='+Math.random();
		}
		</script>
</body>

</html>