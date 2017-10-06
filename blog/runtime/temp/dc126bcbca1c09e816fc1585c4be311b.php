<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/var/www/html/blog/public/../application/admin/view/index/photo.html";i:1502628669;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="这是后台主页">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="__PUBLICJS__echarts.min.js"></script>
    <link rel="stylesheet" href="/layui/css/layui.css">
<script src="/layui/layui.js"></script>
    <link rel="stylesheet" href="__PUBLICCSS__amazeui.min.css" />
    <link rel="stylesheet" href="__PUBLICCSS__amazeui.datatables.min.css" />
    <link rel="stylesheet" href="__PUBLICCSS__app.css">
    <script src="__PUBLICJS__jquery.min.js"></script>

</head>

<body data-type="index">
    <script src="__PUBLICJS__theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="__PUBLICIMG__logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span><?php echo \think\Request::instance()->session('username'); ?></span> </a>
                        </li>                                                
                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo url('quit'); ?>">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
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
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="__PUBLICIMG__user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?php echo \think\Request::instance()->session('username'); ?>
          </span> 
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">               
                <li class="sidebar-nav-link">
                    <a href="admin" class="active">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('/showmessage'); ?>">
                        <i class="am-icon-table sidebar-nav-link-logo"></i>留言列表                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('/addphoto'); ?>">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 上传照片
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="<?php echo url('/writes'); ?>">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 发表文章
                    </a>
                </li>
  
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('/sendemail'); ?>">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 发送邮件
                    </a>
                </li>

                <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 文章列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="<?php echo url('/articlelist'); ?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="<?php echo url('/articlelistimg'); ?>"">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo url('/logining'); ?>">
                        <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
                    </a>
                </li>

            </ul>
        </div>

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">


            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">线条表单</div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" enctype="multipart/form-data" method="post" action="<?php echo url('upphoto'); ?>">
                                 <div class="am-form-group">                              
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">                          
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                <i class="am-icon-cloud-upload"></i> 选择上传图片</button>
                                                <input id="doc-form-file" type="file" name="File" , onchange="c()">
                                                </div> 
                                                <div style="margin-top:15px">
                                                <img src="" id='show' style="width: 200px;height: 200px;display:none">
                                                </div>                                           
                                        <span>请选择相册</span>
                                        <select name="Type" data-am-selected="{btnSize: 'sm'}">
                                         <option value="family">family</option>
                                         <option value="game">game</option>
                                         <option value="me">me</option>
                                         </select>
                                         <input type="hidden" name="Time" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
                                           <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">上传</button>                                                                       
                                        </div>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
    </div>
    <script src="__PUBLICJS__amazeui.min.js"></script>
    <script src="__PUBLICJS__amazeui.datatables.min.js"></script>
    <script src="__PUBLICJS__dataTables.responsive.min.js"></script>
    <script src="__PUBLICJS__app.js"></script>
   <script type="text/javascript">
function c () {
    var img= document.getElementById('show');
    img.style.display="block";
var r= new FileReader();
f=document.getElementById('doc-form-file').files[0];
r.readAsDataURL(f);
r.onload=function  (e) {
img.src=this.result;
};
}
</script>
</body>
</html>