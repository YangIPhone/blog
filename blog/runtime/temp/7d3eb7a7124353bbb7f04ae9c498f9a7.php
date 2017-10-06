<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/var/www/html/blog/public/../application/admin/view/register/index.html";i:1500141083;}*/ ?>
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
    <script type="text/javascript">
       var smscode="<?php echo url('admin/register/smscode'); ?>";
    </script>
</head>
<body data-type="login">
    <script src="__PUBLICJS__theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content"> 
            	<div class="tpl-login-logo" style="background: url(__PUBLICIMG__logob.png);">
                </div>
                <form class="am-form tpl-form-line-form" action="<?php echo url('smscode'); ?>" method="post">
                <div class="am-form-group">
                        <input type="text" id="telnumber" class="tpl-form-input" name="telnumber" id="user-name" placeholder="请输入手机号码">
                    </div>                
                    <div class="am-form-group">
                    
			<div id="captcha_image" style="display: block;">
                <input type="text" id="code" class="tpl-form-input" name="code" id="user-name" placeholder="请输入图片验证码">
				<?php echo captcha_img(); ?>                              
                <button type="submit" id="btn1" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">获取短信验证码</button>
                 <a  class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" href="<?php echo url('/logining'); ?>" >已有账号，直接登录</a>
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
   <!--      <script type="text/javascript">
            var Obtn= document.getElementById('btn1');           
var timer = null;
Obtn.submit= function (){
    var time = 60;
    Obtn.disabled = true;
timer = setInterval(function () {
time = time - 1;
Obtn.innerHTML = time+'秒';
if(time == 0) {
clearInterval(timer );
Obtn.disabled = false;
Obtn.innerHTML = '重新获取';
}
}, 1000);}
        </script> -->
</body>

</html>