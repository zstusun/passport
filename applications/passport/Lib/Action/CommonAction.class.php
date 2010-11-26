<?php
class CommonAction extends Action
{
    public function index()
    {
    	echo __APP__;
    }
    public function verify()
    {
    	import("ORG.Util.Image");
    	Image::buildImageVerify(4,5);
    }
}
?>