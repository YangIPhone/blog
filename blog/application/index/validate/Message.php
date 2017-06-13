<?php
namespace app\index\validate;
use think\validate;
 

 class Message extends Validate
 {
   protected $rule =[
   ['Name','require','请输入昵称'],
    //require表示必须要求的,min:5表示最小长度为五,多个要求用"|"隔开
    ['Email','require|email','请输入邮箱|邮箱格式错误'],//email是内置的格式
    ['Message','require','你还没有留下你想说的话'],
   ];
  }