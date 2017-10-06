<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Sendemail extends Controller
{ 

	function __construct()
    {   
        parent::__construct();
        $this->view->replace([
        '__PUBLICCSS__'    =>  '../static/admin/css/',
        '__PUBLICIMG__'    =>  '../static/admin/img/',
        '__PUBLICJS__'    =>  '../static/admin/js/',
        '__PHOTO__'    =>  '../upfile/',

    ]);        
    }
    
public function index()
{
	return view();
}

public function send()
{
  $email=input('post.sjr');//定义收件人的邮箱
  $title=input('post.Title');//定义邮件主题
  $content=input('post.Content');//邮件内容
  $file=Request()->file('file'); 
  $info='123';
  $result=$this->validate(['Title'=>$title,'email'=>$email,'Content'=>$content], 
		['Title'=>'require','email'=>'require|email','Content'=>'require'],
		['Title.require'=>'请输入邮件标题','email.require'=>'请输入收件人','email.email'=>'收件人不是邮箱格式','Content.require'=>'请输入邮件内容']);
  if ($result!==true) 
        {
		$this->error($result);
		exit;
		}
$mail = new PHPMailer(true);
try {
// 服务器设置
//$mail->SMTPDebug = 2; // 开启Debug
$mail->isSMTP(); // 使用SMTP
$mail->Host = 'smtp.qq.com'; // 服务器地址
$mail->SMTPAuth = true; // 开启SMTP验证
$mail->Username = '1272894627@qq.com'; // SMTP 用户名（你要使用的邮件发送账号）
$mail->Password = 'mcckoylxurqdbabh'; // SMTP 密码(需要去QQ邮箱开启smtp服务)
$mail->SMTPSecure = 'ssl'; // 开启TLS 可选
$mail->Port = 465; // 端口
$mail->CharSet = 'utf-8';//设置邮件编码
// 发件人
$mail->setFrom('ymowang@qq.com'); // 设置发件人名称,必须是发送邮件的邮箱或别名:1272894627@qq.com
//$mail->addAddress('2682258931@qq.com'); // 添加一个收件人
$mail->addAddress($email); // 可以只传邮箱地址
// 添加附件
  if($file){
  	//$name=time();
	$info = $file->move(ROOT_PATH . 'public' . DS . 'upfile',time());//以时间戳为文件名
	//$info = $file->move(ROOT_PATH . 'public' . DS . 'upfile',''); //以原文件名为文件名
	$path=$info->getRealPath();
	$mail->addAttachment($path); // 添加附件
  }
//$mail->addAttachment('2.zip'); // 可以设定名字
// 内容
$mail->isHTML(true); // 设置邮件格式为HTML
$mail->Subject = $title; //邮件主题
$mail->Body = $content; //邮件内容
$mail->send();
$this->success('邮件发送成功','/index');
} catch (Exception $e) {
 $this->error('邮件发送失败');
}
}
}