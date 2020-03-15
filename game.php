<?php
    include 'header.php';
   

    //获取当期url
   //echo  $current_url;
   //exit;
   //查询单个数据
   $navinfo = $db->find_all('lay_nav','*'," WHERE `nav_url`='".$current_url."'");
   //查询banner 

   $baninfo = $db->select_all('lay_banner','*'," WHERE `ban_type` = {$navinfo['nav_id']}");

   //查询游戏数据
   $gameinfo = $db->select_all('lay_game','*'," LIMIT 0,2");
    for($i=0;$i<count($gameinfo);$i++){
    	$gameinfo[$i]['game_img_lib'] = json_decode($gameinfo[$i]['game_img_lib'],true);
    }
   
    //查询更多案列
     $info = $db->select_all('lay_game','*'," WHERE `game_id` > 2 ");

    



   	//渲染轮播图
    $smarty->assign('baninfo',$baninfo);
    $smarty->assign('gameinfo',$gameinfo);
    $smarty->assign('info',$info);
	$smarty->display('home/game.tpl');
?>