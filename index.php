<?php
	include 'header.php';

 	$find = $db->find_all('lay_nav','`nav_id`'," WHERE `nav_url`='{$current_url}'",'assoc');
 	$baninfo= $db->find_all('lay_banner','*'," WHERE `ban_type`={$find['nav_id']} ",'assoc');
 	/*LayaFlash 引擎*/
 	$proinfoa= $db->select_all('lay_product','*'," WHERE `product_type_id`=1 ",'assoc');

    /*Layabox 优势*/
 	$proinfob= $db->select_all('lay_product','*'," WHERE `product_type_id`=2 ",'assoc');
    /*Layabox产品家族*/
 	$proinfoc= $db->select_all('lay_product','*'," WHERE `product_type_id`=3 ",'assoc');
 	/*推荐游戏*/
 	$gameinfo= $db->select_all('lay_game','*',"",'assoc');

 	/*查询合作伙伴*/
 	$collinfo= $db->select_all('lay_coll','*',"",'assoc');
 	

    

 	$smarty->assign('baninfo',$baninfo);
 	$smarty->assign('proinfoa',$proinfoa);
 	$smarty->assign('proinfob',$proinfob);
 	$smarty->assign('proinfoc',$proinfoc);
 	$smarty->assign('gameinfo',$gameinfo);
 	$smarty->assign('collinfo',$collinfo);
 	
	$smarty->display('home/index.tpl');
?>