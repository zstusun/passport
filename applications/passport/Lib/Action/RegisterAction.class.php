<?php
class RegisterAction extends Action
{
    public function index()
    {
    	$this->display();
    }
    public function real()
    {
    	//Session::is_set('register')&&Session::set('register',null);
    	//是否POST了数据
    	if(Action::isAjax()){
    	    $real = D('RealCheck');
    		if($real->create()){
	    		//验证成功
	    		Session::set('register',array(
	    		'from'=>'real',
	    		'name'=>$real->name||$_POST['name'],
	    		'pid'=>$real->pid
	    		));
	    		$this->redirect('Register/success');
	    	}else{
	    		$this->assign('error',$real->getError());
	    	}
    	}elseif(Action::isPost()){
    		$real = D('RealCheck');
    		//经验令牌验证
    		if (!$real->autoCheckToken($_POST)){
    			exit($this->redirect('Register/real'));
    		}
	    	if($real->create()){
	    		//验证成功
	    		Session::set('register',array(
	    		'from'=>'real',
	    		'name'=>$real->name||$_POST['name'],
	    		'pid'=>$real->pid
	    		));
	    		$this->redirect('Register/success');
	    	}else{
	    		echo $real->sid;
	    		$this->assign('error',$real->getError());
	    	}
	    	$this->display();
    	}else{
    		$this->display();
    	}
    }
    public function email()
    {
    	$this->display();
    }
    public function success()
    {
    	$register = Session::get('register');
    	print_r($register['from']);
    	if(!($register['from']=='real' || $register['from']=='email')){
    		exit($this->redirect('Register/real'));
    	}
    	$this->display();
    }
}
?>