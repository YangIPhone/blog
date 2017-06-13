<?php
namespace app\admin\validate;
use think\validate;
 

 class Article extends Validate
 {
   protected $rule =[
   ['Title','require','请输入标题']
   ];
  }