<?php
	include 'config.ini.php';
	//查询导航栏
	$nav = $db->select_all('lay_nav','*','','assoc');
	//渲染导航栏信息
	$smarty->assign('nav',$nav);

	//当前url
    $current_url = basename($_SERVER['REQUEST_URI']);

    if($current_url == '') $current_url = 'index.php';
       $reg = '/\?/';
    if(preg_match($reg,$current_url)){
      $current_url = preg_split($reg, $current_url);
      $current_url = $current_url[0];
    }
   /*配置文件*/
 	$confinfo= $db->select_all('lay_conf','*',"",'assoc');
 	$confinfo=$confinfo[0];
 	
 	  /*关于我们*/
    $aboinfo= $db->select_all('lay_about','*',"",'assoc');
    $smarty->assign('confinfo',$confinfo);
 	  $smarty->assign('aboinfo',$aboinfo);


?>