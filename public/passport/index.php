<?php
define('ROOT_PATH','E:/exploit/shine');
//define('ROOT_PATH', realpath(dirname(dirname(dirname(__FILE__)))));//定义根目录
define('THINK_PATH', ROOT_PATH.'/library/ThinkPHP2');//ThinkPHP目录
define('APP_PATH', ROOT_PATH.'/applications/passport');//项目目录
define('APP_NAME', 'passport');//项目名称
require(THINK_PATH."/ThinkPHP.php");
App::run();