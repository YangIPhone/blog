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
Route::rule('logining/[:name]','admin/login/index','*');
Route::rule('registeri/[:name]','admin/register/index','*');
Route::rule('register/[:name]','admin/register/register','*');
Route::rule('articlelist/[:name]','admin/index/articlelist','*');
Route::rule('articlelistimg/[:name]','admin/index/articlelistimg','*');
Route::rule('addphoto/[:name]','admin/index/photo','*');
Route::rule('writes/[:name]','admin/index/write','*');
Route::rule('delete/[:name]','admin/index/delete','*');
Route::rule('update/[:name]','admin/index/update','*');
Route::rule('Sendemail/[:name]','admin/sendemail/index','*');
Route::rule('send/[:name]','admin/sendemail/send','*');
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
