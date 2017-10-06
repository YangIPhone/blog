<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Session;
use org\util\Qqconnect;
use org\util\Wxconnect;

class Login extends  Controller
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
 
    public function login($code='')
    {
    	 $captcha = new \think\captcha\Captcha();
      if (!$captcha->check($code)) {
          $this->error('验证码错误');
      }  
    	$username=$_POST['username'];
    	$password=$_POST['password'];
      $result=$this->validate(
      	['username'=>$username,'password'=>$password],
      	['username'=>'require','password'=>'require'],
      	['username.require'=>'请输入用户名','password.require'=>'请输入密码']);
      if ($result!==true) {
      	$this->error($result);
      }  else
      { 
      	if ($username=='admin'&&$password=='admin123456') {
      		Session::set('username',$username);
      		$this->success('登录成功','/admin');
      	}  else{
      		$this->error('登录失败');
      	}
      }
    }  

    public function qqconnect()
    {
      $qqconnect=new Qqconnect('13','45','blog.yang1996.com/admin/login/qq');
      $url=$qqconnect->getAuthCode();
      //echo $url;
    }    

    public function qq()
    {
     $qqconnect=new Qqconnect('13','45','blog.yang1996.com/admin/login/qq');
     $user=$qqconnect->getUsrInfo();
     $userinfo=json_decode($user);
     $nickname=$userinfo['nickname'];
     $figureurl=$userinfo['figureurl_qq_1'];
     Session::set('username',$nickname);
     Session::set('userhead',$figureurl);
     $this->redirect('/admin');
    }

    public function wxconnect()
    {
      // $this->redirect('https://www.baidu.com');
      $qqconnect=new wxconnect('13','45','blog.yang1996.com/admin/login/wx');
      $url=$qqconnect->getAuthCode();
      //echo $url;
    }  

    public function wx()
    {
     $qqconnect=new Qqconnect('13','45','blog.yang1996/admin/login/wx');
     $user=$qqconnect->getUsrInfo();
     $userinfo=json_decode($user);
     $nickname=$userinfo['nickname'];
     $headimgurl=$userinfo['headimgurl'];
     Session::set('username',$nickname);
     Session::set('userhead',$headimgurl);
     $this->redirect('/admin'); 
    }  
}
