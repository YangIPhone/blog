<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Message;

class Leavemessage extends controller
{
	 function __construct()
  	{
  		parent::__construct();
  		$this->view->replace([
        '__PUBLICCSS__'    =>  '/css',
    ]);
  	}
		 
		public function index()
		{
			return $this->fetch();
		}

	public function message()
	{ 
		$message=model('Message');       
        if ($message->allowField(true)//自动去掉不相关字段
            ->validate(true) //自动校验字段是否符合预设的规范            
            ->save(input('post.')))//添加数据
            {
                return $this->success('留言成功','/showmessage');     
        } else {
            $tips=$message->getError();
			return $this->error($tips);
        }
	}
	
	
public function showmessage()
{   $message=Message::paginate(4);//每页显示4条记录
    $this->assign('message',$message);
    return $this->fetch();
}
		
}
