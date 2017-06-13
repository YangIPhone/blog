<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Article;
use app\admin\model\Photo;
use think\Request;


class Index extends  Controller
{ 
     function __construct()
    {
        parent::__construct();
        $this->view->replace([
        '__PUBLICCSS__'    =>  '../static/css/',
        '__PUBLICIMG__'    =>  '../static/img/',
        '__PUBLICJS__'    =>  '../static/js/',
        '__PHOTO__'    =>  '../upfile/',
    ]);
    }
	
    public function index()
    {          
    $article=model('article');
	$click=$article->order('Clicknum desc')->paginate(6);
    $list=$article->order('Time desc')->paginate(6);
    $this->assign('new',$list);
	$this->assign('click',$click);
        return view();
    }
       
	public function article()
	{
	   	return view();
	}
 
    public function releasearticle()
    {
    	$article=model('Article');
		$articleID=$article->count();
		$articleID++;
		$Title=input('post.Title');
		$Content=input('post.Article');
		$Time=input('post.Time');
		$Title=input('post.Title');	
		$Url=url('/lookarticle?ID='.$articleID);	
		$list=[
		'ID'=>$articleID,
		'Title'=>$Title,
		'Content'=>$Content,
		'Time'=>$Time,
		'Url'=>$Url
		];
		if ($article->allowField(true)//自动去掉不相关字段
            ->validate(true) //自动校验字段是否符合预设的规范            
            ->save($list))//添加数据
            {   
                return $this->success('发布成功','/article');     
        } else {
            $tips=$article->getError();
			return $this->error($tips);
        }
    }
	
	public function articlelist()
	{
		$article=model('article');
        $click=$article->order('Clicknum desc')->paginate(3);
        $this->assign('article',$click);
        return view();
	}


    public function photo()
    { 
        $photo=model('Photo');
        $result=$photo->field('Type,Photo,count("type") as Num,Intro,Time')
        ->group('Type')
        ->select();
        $this->assign('photo',$result);
        return view();
    }
    
    public function family()
    {   
        $photo=model('Photo');
        $resultf=$photo->where('type','family')->paginate(4);
        $this->assign('family',$resultf);
        return view();
    }

    public function game()
    {   
        $photo=model('Photo');
        $resultg=$photo->where('type','game')->paginate(4);
        $this->assign('game',$resultg);
        return view();
    }

    public function me()
    {   
        $photo=model('Photo');
        $resultm=$photo->where('type','me')->paginate(4);
        $this->assign('me',$resultm);
        return view();
    }
	
	public function upphoto()
	{
		$photo=model('Photo');
		$Type=input('post.Type');
		$Intro=input('post.Intro');
		$Time=input('post.Time');
		$file=request()->file('file');
		$result=$this->validate(['file' => $file], ['file'=>'require|image'],['file.require' => '请选择上传的图片', 'file.image' => '非法图像文件']);
		if ($result!==true) {
		$this->error($result);
		}
		$info = $file->move(ROOT_PATH . 'public' . DS . 'upfile' . DS .'photo'. DS .$Type,'');
        if ($info) {
        	$Filename=$info->getSaveName();
			$Path="photo/".$Type."/".$Filename;
        	$list=[
        	'Photo'=>$Path,
        	'Type'=>$Type,
        	'Intro'=>$Intro,
        	'Time'=>$Time
        	];
			if(!($photo->getByPhoto($Path)))
			{
			$photo->save($list);
            $this->success('文件上传成功：' . $Path);
			} 
			else {
				$this->error('已覆盖原文件...' . $Path);
			}
        } else {
            // 上传失败获取错误信息
            $this->error($file->getError());
        }
	}
	
	public function articlelsit()
	{
		{ //文章列表分页显示
        $article=model('article');
        $articlelsit=$article->order('Clicknum desc')->paginate(3);
        $this->assign('article',$articlelsit);
        return view();
    }
	}
	
	public function delete()
	{
		$ID=input('get.ID');   
		$article=model('article');
        if($article->where('ID',$ID)->delete())
		{
			$this->success('删除成功!','/articlelsit');
		}  else  
			{
				$this->error('删除失败!','/articlelsit');
			}
		
	}
	
	public function update()
	{
	    $article=model('Article');	
	    $getID=input('get.ID');
		$article=model('article');
		if(isset($_POST['ID'])){			
		$updateID=input('post.ID');	
        $Title=input('post.Title');
		$Content=input('post.Article');
		$Time=input('post.Time'); 
		$article->Title=$Title;
		$article->Content=$Content;
		$article->Time=$Time;
		if($article->where('ID',$updateID)->update([
		'Title'=>$Title,
		'Content'=>$Content,
		'Time'=>$Time
		]
		))
		{
			$this->success('修改成功!','/articlelsit');
		}  else  
			{
			$this->error('修改失败!','/articlelsit');
			}
	}  else {
		$article=$article->get($getID);
		$this->assign('article',$article);
		return view();
	} 
	}
   
}
