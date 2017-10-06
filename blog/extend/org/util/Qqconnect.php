<?php
namespace org\util;
use think\Controller;
use think\Session;
/**
 *  qq第三方登录认证
 */
class Qqconnect extends Controller
 {
    private static $data;
    //APP ID
    private $app_id="";
    //APP KEY
    private $app_key="";
    //回调地址
    private $callBackUrl="";
    //Authorization Code
    private $code="";
    //access Token
    private $accessToken="";
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
        $url="https://graph.qq.com/oauth2.0/authorize";  //pc端QQ登录获取Authorization Code的请求地址
        //$url="https://open.weixin.qq.com/connect/qrconnect";  //pc端微信登录获取Authorization Code的请求地址
        $param['response_type']="code";
        $param['client_id']=$this->app_id;
        $param['redirect_uri']=$this->callBackUrl;
        //-------生成唯一随机串防CSRF攻击
                $state = md5(uniqid(rand(), TRUE));
                $_SESSION['state']=$state;
        $param['state']=$state;
                $param['scope']="get_user_info";//不设置则默认请求对接口get_user_info进行授权
        //使用给出的关联（或下标）数组生成一个 url-encoded 请求字符串,即/?response_type=code&...
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;        
        $this->redirect($url) ;
        //return $url;
    }
    //通过Authorization Code获取Access Token  (第二步)
    public function getAccessToken(){        
        $url="https://graph.qq.com/oauth2.0/token";
        $param['grant_type']="authorization_code";
        $param['client_id']=$this->app_id;
        $param['client_secret']=$this->app_key;
        $param['code']=$this->code;
        $param['redirect_uri']=$this->callBackUrl;
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        return $this->getUrl($url);
    }
    //获取openid (第三步)
    public function getOpenID(){
        $rzt=$this->getAccessToken();
        parse_str($rzt,$data);
        $this->accessToken=$data['access_token'];
        $url="https://graph.qq.com/oauth2.0/me";
        $param['access_token']=$this->accessToken;
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        $response=$this->getUrl($url);
        //--------检测错误是否发生,如果没有找到callback则表示授权出错
        if(strpos($response, "callback") !== false){
            $lpos = strpos($response, "(");
            $rpos = strrpos($response, ")");
            $response = substr($response, $lpos + 1, $rpos - $lpos -1);
        }
        $user = json_decode($response);
        if(isset($user->error)){
            exit("错误代码：100007");
        }
        return $user->openid;
    }
    //获取信息
    public function getUsrInfo(){
        if($_GET['state'] != $_SESSION['state']){
            exit("错误代码：300001");
        }
        $this->code=$_GET['code'];
        $openid=$this->getOpenID();
        if(empty($openid)){
            return false;
        }
        $url="https://graph.qq.com/user/get_user_info";
        $param['access_token']=$this->accessToken; //可通过使用Authorization_Code获取Access_Token 或来获取。 
        $param['oauth_consumer_key']=$this->app_id; //申请QQ登录成功后，分配给应用的appid
        $param['openid']=$openid;  //代表用户的ID。通过getOpenID()获取
        $param =http_build_query($param,'','&');
        $url=$url."?".$param;
        $rzt=$this->getUrl($url);
        return $rzt;
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