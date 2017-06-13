<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article;


class Index extends  Controller
{
	
    public function index()
    {   //推荐文章的分页       
    $article=model('article');
	$click=$article->order('Clicknum desc')->paginate(6);
    $list=$article->order('Time desc')->paginate(6);
    $this->assign('new',$list);
	$this->assign('click',$click);
        return view();
    }

    public function article()
    { //文章列表分页显示
        $article=model('article');
        $click=$article->order('Clicknum desc')->paginate(3);
        $this->assign('article',$click);
        return view();
    }

    public function aboutme()
    {       
        
        return view();
    }

    public function photo()
    {   //相册分类显示
        $photo=model('Photo');
        $result=$photo->field('Type,Photo,count("type") as Num,Intro,Time')
        ->group('Type')
        ->select();
        $this->assign('photo',$result);
        return view();
    }
    
    public function family()
    {   //查询家庭相册并分页显示
        $photo=model('Photo');
        $resultf=$photo->where('type','family')->paginate(4);
        $this->assign('family',$resultf);
        return view();
    }

    public function game()
    {    //查询游戏相册并分页显示
        $photo=model('Photo');
        $resultg=$photo->where('type','game')->paginate(4);
        $this->assign('game',$resultg);
        return view();
    }

    public function me()
    {    //查询我的相册并分页显示
        $photo=model('Photo');
        $resultm=$photo->where('type','me')->paginate(4);
        $this->assign('me',$resultm);
        return view();
    }
	
	public function Clicknum()
	{   //文章点击量增加
		$ID=input('get.ID');
		$Article=model('article');
		$Article=$Article->get($ID);
        $num=$Article['Clicknum'];
		$Article->Clicknum=$num+1;
		$Article->save();
		$this->redirect($Article['Url']);
	}
	
	public function lookarticle()
	{
		$Article=model('article');
		$ID=input('get.ID');
		$ID=intval($ID);
        $larticle=$Article->get($ID);
        $this->assign('article',$larticle);		
		return view();
	}
   
}
