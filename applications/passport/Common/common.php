<?php
//验证码检验
function checkVerify($verify)
{
	if (md5(strtolower($verify)) == Session::get('verify'))
	{
		return true;
	}else{
		return false; 
	}
}