<?php
class RealCheckModel extends RealModel
{
    public function checkReal($pid)
    {
    	$this->find(strtolower($_POST['sid']));
    	if($pid == $this->pid)
    	{
    		return true;
    	}else{
    		return false;
    	}
    }
    public function noRegister($sid)
    {
    	if(true)
    	{
    		return true;
    	}else{
    		return false;
    	}
    }
    //自动验证
    protected $_validate = array(
        array('verify', 'require',array('verify'=>'验证码不能为空！'),1),
        array('verify', 'checkVerify', array('verify'=>'验证码错误！'), 1, 'function'),
        array("name", "require", array('name'=>'姓名不能为空！'),1),
        array('sid', 'require', array('sid'=>'学号（工号）不能为空！'),1),
        array('pid', 'require', array('pid'=>'身份证不能为空！'),1),
        array('pid', 'checkReal', array('check'=>'验证错误！'), 1, 'callback'),
        array('sid', 'noRegister', array('noRegister'=>'已经注册！'), 1, 'callback'),
    );
    
}
?>