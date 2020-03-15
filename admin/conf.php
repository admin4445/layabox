<?php
  
  //加载 DB类，用来操作数据库
   include '../class/Db.php';
   //加载db类

	 $config = [
            'host' => '127.0.0.1',
            'user' => 'layabox',
            'pwd' => '123456',
            'dbname' => 'layabox',
            'charset' => 'uft-8',
            'tb_prefix' => 'lay_'
     ];
     $db = Db::mysql_con($config);
	
  //加载 分页类，用来操作数据库
   include '../class/Page.php';

?>