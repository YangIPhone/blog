<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Article;
use app\admin\model\Photo;
use think\Request;
use think\Session;
use think\Image;

class Index extends  Controller
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
        $username=Session::get('username');
        if (!isset($username)) {
        	$this->error('非法访问,请登录','/logining');
        }
    }
	
	  public function index()
	  { $article=model('article');
	    $photo=model('photo');
	    $message=model('message');
		$num=array();
	  	$list=$article->order('Time desc')->paginate(5);
		$num[0]=$message->whereTime('Time','>','this week')->count();
		$num[1]=$photo->whereTime('Time','>','this week')->count();
		$num[2]=$article->whereTime('Time','>','this week')->count();
		$this->assign('num',$num);
        $this->assign('new',$list);
	  	return view();
	  }
	  
	  public function quit()
	  {
	  	Session::delete('username');
		if(empty(Session::get('username')))
		{
			$this->success('退出成功','/logining');
		}
	  }
	  
	  public function addarticle()
	  {
	  	$article=model('article');
		$file=Request()->file('file');
		$articleID=$article->count();
		$Title=input('post.Title');
		$writer=input('post.Writer');
		$Content=input('post.Content');
		$Time=input('post.Time');
		$articleID++;
		$Url=url('/lookarticle?ID='.$articleID);
		$result=$this->validate(['file' => $file,'Title'=>$Title,'writer'=>$writer,'Content'=>$Content], 
		['Title'=>'require','writer'=>'require','file'=>'require|image','Content'=>'require'],
		['Title.require'=>'请输入标题','writer.require'=>'请输入作者','file.require' => '请选择上传图片', 'file.image' => '不是图像文件','Content.require'=>'请输入正文内容']);
    if ($result!==true) 
        {
		$this->error($result);
		} else{
           $image=Image::open($file);                             
           $image->text('Yang、Blog', VENDOR_PATH . 'topthink/think-captcha/assets/ttfs/2.ttf', 20, '#ffffff',Image::WATER_SOUTHWEST);           		              
           $saveName=time().'.png';//以时间戳.png为修改后的文件名        
           $image->save('artimg/'.$saveName);//报存处理的图片到指定文件夹，没有文件夹则报错
           $list=[
           'ID'=>$articleID,
           'Title'=>$Title,
           'Writer'=>$writer,
           'Content'=>$Content,
           'Time'=>$Time,
           'Img'=>$saveName,
           'Url'=>$Url
           ];
		   if($article->save($list))
		   {
		   	$this->success('文章发表成功!','/admin');
		   } else 
		   	{
		   		$this-error('文章发表失败。。。','/admin');
		   	}
           //$this->success('图片处理完毕...', '/uploads/' . $saveName, 1);
		}
		
	}
		
	  
	  
	  public function articlelist()
	  {
	  	$article=model('article'); 
	  	$list=$article->order('Time desc')->paginate(5); 
		$this->assign('article',$list);
	  	return view();
	  }
	  
	  public function articlelistimg()
	  {
	  	$article=model('article');
	  	$list=$article->order('Time desc')->paginate(5); 
		$this->assign('article',$list);
	  	return view();
	  }
	  
	  public function write()
	  {
	  	return view();
	  }
	  
	  public function photo()
	  {
		$photo=model('Photo');
		$Type=input('post.Type');
		$Intro=input('post.Intro');
		$Time=input('post.Time');
		return view();
	  }
	  
	  public function upphoto()
	{
		$photo=model('Photo');
		$Type=input('post.Type');
		$Time=input('post.Time');
		$file=Request()->file('File');
		$Intro='';
		switch (Request()->param('Type'))
		{
			case 'family':
				$Intro="This is my family";
				break;
			case 'game':
				$Intro="My game live";
				break;
			case 'me':
				$Intro="About me";
				break;	
		}
		$result=$this->validate(['file' => $file], ['file'=>'require|image'],['file.require' => '请选择上传的图片', 'file.image' => '非法图像文件']);
		if ($result!==true) {
		$this->error($result);
		} 
		else {
		   $image=Image::open($file);                             
           $image->text('Yang、Blog', VENDOR_PATH . 'topthink/think-captcha/assets/ttfs/2.ttf', 20, '#ffffff',Image::WATER_SOUTHWEST);           		              
           $saveName=time().'.png';//以时间戳.png为修改后的文件名        
           $image->save('upfile/photo/'.$Type."/".$saveName);//报存处理的图片到指定文件夹，没有文件夹则报错           
			$Path="photo/".$Type."/".$saveName;
        	$list=[
        	'Photo'=>$Path,
        	'Type'=>$Type,
        	'Intro'=>$Intro,
        	'Time'=>$Time
        	];
			if ($photo->save($list))
			{
            $this->success('照片上传成功：','/admin');
			} 
			 else 
			 {
				$this->error('照片上传失败...','/admin');
			 }
        } 
      }
	
	  
	  public function delete()
	{
		$ID=input('get.ID');   
		$article=model('article');
        if($article->where('ID',$ID)->delete())
		{
			$this->success('删除成功!','/admin');
		}  else  
			{
				$this->error('删除失败!','/admin');
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
		$Content=input('post.Content');
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
			$this->success('修改成功!','/admin');
		}  else  
			{
			$this->error('修改失败!','/admin');
			}
	}  else {
		$article=$article->get($getID);
		$this->assign('article',$article);
		return view();
	} 
	}
}