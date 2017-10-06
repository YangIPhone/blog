<?php
namespace org\util;
use think\Controller;
use think\Session;
/**
 *  qq第三方登录认证
 */
class Wxconnect extends Controller
 {
    private static $data;
    //APP ID 微信开放平台提交应用审核通过后获得
    private $app_id="";
    //secret 微信开放平台提交应用审核通过后获得
    private $secret="";
    //回调地址
    private $callBackUrl="";
    //Authorization Code
    private $code="";
    //access Token
    private $accessToken="";
    //openid
    private $openid="";

    public function __construct($appid="",$appkey="",$BackUrl=""){
        $this->app_id=$appid; //设置申请QQ登录后分配给应用的APPID
        $this->app_key=$appkey;  //申请QQ登录成功后，分配给网站的appkey
        $this->callBackUrl=$BackUrl;
        //检查用户数据
        if(empty($_SESSION['QC_userData'])){
            self::$data = array();
        }else{
            self::$data = $_SESSION['QC_userData'];
        }
    }
    //获取Authorization Code (第一步)
    public function getAuthCode(){       
        $url="https://open.weixin.qq.com/connect/qrconnect";  //pc端微信登录获取Authorization Code的请求地址
        $param['client_id']=$this->app_id;
        $param['redirect_uri']=$this->callBackUrl;
        $param['response_type']="code";
        $param['scope']="snsapi_login";//设置授权域       
        //-------生成唯一随机串防CSRF攻击
                $state = md5(uniqid(rand(), TRUE));
                $_SESSION['state']=$state;
        $param['state']=$state;      
        //使用给出的关联（或下标）数组生成一个 url-encoded 请求字符串,即/?response_type=code&...
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;        
        $this->redirect($url);
        //return $url;
    }
    //通过Authorization Code获取Access Token  (第二步)
    public function getAccessToken(){        
        $url="https://api.weixin.qq.com/sns/oauth2/access_token";       
        $param['appid']=$this->app_id;
        $param['secret']=$this->secret;
        $param['code']=$this->code;
        $param['grant_type']="authorization_code";
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        return $this->getUrl($url);
    }
    //检测access_token是否有效
    public function check(){
        $rzt=$this->getAccessToken();
        parse_str($rzt,$data);
        $this->accessToken=$data['access_token'];
        $this->openid=$data['openid'];
        $url="https://api.weixin.qq.com/sns/auth";
        $param['access_token']=$this->accessToken;
        $param['openid']=$this->openid;
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        $response=$this->getUrl($url);      
        $user = json_decode($response);
        $errcode=$user->errcode;   //access_token有效，errcode返回0
        if($errcode!=0){
            exit("错误代码:".$errcode);
        }
        return $this->openid;
    }
    //获取信息
    public function getUsrInfo(){
        if($_GET['state'] != $_SESSION['state']){
            exit("错误代码：300001");
        }
        $this->code=$_GET['code'];
        $openid=$this->check();
        if(empty($openid)){
            return false;
        }
        $url="https://api.weixin.qq.com/sns/userinfo";
        $param['access_token']=$this->accessToken; //可通过使用Authorization_Code获取Access_Token 或来获取。 
        $param['openid']=$openid;  //代表用户的ID。通过getOpenID()获取
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        $rzt=$this->getUrl($url);
        return $rzt;
        //返回值:
        // openid 普通用户的标识，对当前开发者帐号唯一
// nickname  普通用户昵称
// sex 普通用户性别，1为男性，2为女性
// province  普通用户个人资料填写的省份
// city  普通用户个人资料填写的城市
// country 国家，如中国为CN
// "headimgurl": "http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0",用户头像地址，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空
    }
    //CURL GET
    public function getUrl($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        if (!empty($options)){
            curl_setopt_array($ch, $options);
        }
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    
    //CURL POST
    public function postUrl($url,$post_data){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        ob_start();
        curl_exec($ch);
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}