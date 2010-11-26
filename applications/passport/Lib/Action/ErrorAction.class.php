<?php
class ErrorAction extends Action
{
    public function index()
    {
    	header('HTTP/1.1 404 Not Found');
    }
}
?>