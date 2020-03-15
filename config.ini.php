<?php

	define('ROOT',str_replace('\\','/',dirname(__FILE__)).'/');//绝对路径，避免无法访问的情况
	include ROOT.'includes/libs/Smarty.class.php';
	
	$smarty = new Smarty();

	$smarty->setTemplateDir(ROOT.'views/'); //设置模板文件目录
    $smarty->setCompileDir(ROOT.'compiles/');  //设置编译文件目录

	$smarty->setCacheDir(ROOT.'smarty_cache/'); //设置缓存文件目录

	//$smarty->caching = false; 	//是否使用缓存，项目在调试期间，不建议启用缓存
	$smarty->setCaching(false);
	//$smarty->cache_lifetime=60*60*24; // 设置缓存时间



	//左右边界符，默认为{}
	$smarty->setLeftDelimiter("<{");
	$smarty->setRightDelimiter("}>");

	//加载db类
	include './class/Db.php';
	 $config = [
            'host' => '127.0.0.1',
            'user' => 'layabox',
            'pwd' => '123456',
            'dbname' => 'layabox',
            'charset' => 'uft-8',
            'tb_prefix' => 'lay_'
     ];
     $db = Db::mysql_con($config);
