<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
define('CSS_URL','../static/index/css/');
define('IMG_URL','../static/index/img/');
define('ARTIMG_URL','../artimg/');
define('PHOTO','../upfile/');
define('JS_URL','../static/index/js/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
