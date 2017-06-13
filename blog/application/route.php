<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('article/[:name]','index/index/article','*');
Route::rule('aboutme/[:name]','index/index/aboutme','*');
Route::rule('photo/[:name]','index/index/photo','*');
Route::rule('family/[:name]','index/index/family','*');
Route::rule('game/[:name]','index/index/game','*');
Route::rule('me/[:name]','index/index/me','*');
Route::rule('Clicknum/[:name]','index/index/Clicknum','*');
Route::rule('lookarticle/[:name]','index/index/lookarticle','*');
Route::rule('articlelsit/[:name]','admin/index/articlelsit','*');
Route::rule('adphoto/[:name]','admin/index/photo','*');
Route::rule('adfamily/[:name]','admin/index/family','*');
Route::rule('adgame/[:name]','admin/index/game','*');
Route::rule('adme/[:name]','admin/index/me','*');
Route::rule('wriarticle/[:name]','admin/index/article','*');
Route::rule('releasearticle/[:name]','admin/index/releasearticle','*');
Route::rule('upphoto/[:name]','admin/index/upphoto','*');
Route::rule('delete/[:name]','admin/index/delete','*');
Route::rule('update/[:name]','admin/index/update','*');
Route::rule('leavemessage/[:name]','index/leavemessage/index','*');
Route::rule('showmessage/[:name]','index/leavemessage/showmessage','*');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
