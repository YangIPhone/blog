<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use org\util\Smscode;
use think\Session;

class Register extends  Controller
{ 
    function __construct()
    {   
        parent::__construct();
        $this->view->replace([
        '__PUBLICCSS__'    =>  '../static/admin/css/',
        '__PUBLICIMG__'    =>  '../static/admin/img/',
        '__PUBLICJS__'    =>  '../static/admin/js/',
        '__PUBLICI__'    =>  '../static/admin/i/',
        '__PHOTO__'    =>  '../upfile/',

    ]);
       
    }
    	
    public function index()
    {          
     return view();
    } 

public function register()
{
  return view();
}


public function register1()
{
 $smscode=Session::get('smscode');//获取服务器发送的验证码
 $data=input('post.smscode');//获取用户输入的验证码
if ($smscode==$data) {
  echo "验证码输入正确，但是想注册进我的博客后台？那就留下买路钱,哈哈哈！";
} else {
  echo "连一个四位数的验证码都输错，鄙视...";
}
}
    
    public function smscode($code='')
    {  
      $Smscode= new Smscode();
      $captcha = new \think\captcha\Captcha();
      if (!$captcha->check($code)) {
          $this->error('验证码错误');
      }
      $telnumber=input('post.telnumber');
      $result=$this->validate(
      	['telnumber'=>$telnumber],
      	['telnumber'=>'require'],
      	['telnumber.require'=>'手机号码不能为空']);
      if ($result!==true) {
      	$this->error($result);
      }  else
      {        
      	$Smscode->getSMSCode($telnumber);        
      }
    }    
}
