<?php 
    include 'header.php';
    //查询单个数据
   	$navinfo = $db->find_all('lay_nav','*'," WHERE `nav_url`='".$current_url."'");
    //查询banner 
    $baninfo = $db->select_all('lay_banner','*'," WHERE `ban_type` = {$navinfo['nav_id']}");
    //查询公司介绍
    $companyinfo = $db->select_all('lay_company','*'," WHERE `com_abo_id` = 1");
    $companyinfo = $companyinfo[0];
    //查询人才招聘
    $talentinfo = $db->select_all('lay_company','*'," WHERE `com_abo_id` = 2");
    $talentinfo = $talentinfo[0];
    //招聘的职位信息
    $recruitinfo = $db->select_all('lay_recruit','*');
    for($i=0;$i<count($recruitinfo);$i++){
    	$recruitinfo[$i]['rec_pos_desc'] = explode('/', $recruitinfo[$i]['rec_pos_desc']);
    }
    //联系方式
    $telinfo = $db->select_all('lay_company','*'," WHERE `com_abo_id` = 3");
    $smarty->assign('baninfo',$baninfo);
    $smarty->assign('companyinfo',$companyinfo);
    $smarty->assign('talentinfo',$talentinfo);
    $smarty->assign('recruitinfo',$recruitinfo);
    $smarty->assign('telinfo',$telinfo);
	$smarty->display('home/about.tpl');

?>