<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/var/www/html/blog/public/../application/admin/view/index/articlelistimg.html";i:1500141238;}*/ ?>
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
    <link href="__PUBLICCSS__bootstrap.min.css" rel="stylesheet">
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
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 留言列表                    </a>
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
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"><a href="<?php echo url('/writes'); ?>" style="color: #fff;">新增</a></span></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">                                       
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>文章缩略图</th>
                                                <th>文章标题</th>
                                                <th>作者</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                            <tr class="gradeX">
                                                <td>
                                                    <img src="<?php echo ARTIMG_URL; ?><?php echo $v['Img']; ?>" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle"><?php echo $v['Title']; ?></td>
                                                <td class="am-text-middle"><?php echo $v['Writer']; ?></td>
                                                <td class="am-text-middle"><?php echo $v['Time']; ?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="<?php echo url('/update'); ?>?ID=<?php echo $v['ID']; ?>">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="<?php echo url('/delete'); ?>?ID=<?php echo $v['ID']; ?>" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                    <?php echo $article->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</body>

</html>