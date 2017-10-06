<?php
namespace org\util;
use think\Controller;
use think\Session;

class Smscode extends  Controller
{ 
   // 获取短信验证码
public function getSMSCode($telnumber){
$smscode=$this->createSMSCode();
$ch = curl_init(); 
//设置接口地址
$url = 'https://sms.yunpian.com/v2/sms/single_send.json'; 
curl_setopt($ch, CURLOPT_URL, $url); 
// 设置 aipkey，发送手机号和信息模板
$paramArr = array(
'apikey' => '84322d3f880f8d0d18551ce49c515b55',
'mobile' => $telnumber,
'text' => '【焕延科技】正在进行登录操作，您的验证码是'.$smscode);
$param = '';
foreach ($paramArr as $key => $value) {
$param .= urlencode($key).'='.urlencode($value).'&';
}
$param = substr($param, 0, strlen($param)-1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);//传递一个作为HTTP “POST”操作的所有数据的字符串
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1); //设置发送方式为POST
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //让curl_exec()函数返回的值为执行结果，而不是true或false
$output = curl_exec($ch);
$out=json_decode($output); //将json格式的数据解码
curl_close($ch); 
$isok=$out->code;//将状态码取出，0表示发送成功其他为失败;
$msg=$out->msg;//将提示信息取出;
if($isok==0){
	Session::set('smscode',$smscode);  //用session将验证码存储，以便于在注册页面验证使用
	$this->success('验证码已发送，请注意查收!','/register');
}  else {
	$this->error($msg,'/registeri');//提示错误信息
}
} 

//获取随机4位验证码
public function createSMSCode($length = 4){
$min = pow(10 , ($length - 1));
$max = pow(10, $length) - 1;
return rand($min, $max);
}



// 验证验证码时间是否过期(20分钟内即有效)
public function checkTime($nowTimeStr,$smsCodeTimeStr){
//$nowTimeStr = '2016-10-15 14:39:59';
//$smsCodeTimeStr = '2016-10-15 14:30:00';
$nowTime = strtotime($nowTimeStr);
$smsCodeTime = strtotime($smsCodeTimeStr);
$period = floor(($nowTime-$smsCodeTime)/60); //60s
if($period>=0 && $period<=20){
return true;
}else{
return false;
}
}
}