<?php
class LoginAction extends Action
{
    public function index()
    {
    	$this->assign('title',TMPL_L_DELIM);
    	$this->display();
    }
}
?>