<?php
return array(
/*基础设置*/
	'APP_DEBUG' => true, // 开启调试模式 
	'SHOW_ERROR_MSG' =>false,
	'ERROR_PAGE' => __APP__.'/error',
	'DB_FIELDTYPE_CHECK'=>true, // 开启字段类型验证

/*数据库设置*/
	'DB_TYPE'=> 'mysql', // 数据库类型
	'DB_HOST'=> 'localhost', // 数据库朋务器地址
	'DB_NAME'=>'shine_passport', // 数据库名称 
	'DB_USER'=>'root', // 数据库用户名 
	'DB_PWD'=>'', // 数据库密码 
	'DB_PORT'=>'3306', // 数据库端口 
	'DB_PREFIX'=>'', // 数据表前缀

/*路由设置*/
	'URL_MODEL'=>2,//设置为rewrite模式
	'URL_CASE_INSENSITIVE' => true,//地址不区分大小写

/*模板设置*/
	'TMPL_L_DELIM'=>'<{',//标签左标记
	'TMPL_R_DELIM'=>'}>',//标签右标记

/*多语言支持*/
	//'LANG_SWITCH_ON'=> false//关闭
);


?>