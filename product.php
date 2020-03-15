<?php
	include 'header.php';


	//查询LayaFlash
	$productinfo = $db->select_all("lay_product",'*',' WHERE product_type_id=3','assoc');

     for($i=0;$i<count($productinfo);$i++){
     	$productinfo[$i]['child']=$db->select_all("lay_pdt",'*'," WHERE p_pro_id={$productinfo[$i]['product_id']}",'assoc');
     }

 	 

	
	$smarty->assign('productinfo',$productinfo);
	$smarty->display('home/product.tpl');

?>