<?php
    include 'header.php';
    include './class/Page.php';
    //查询新闻类型
    $newstype = $db->select_all('lay_news_type','*');

    if(isset($_GET['type'])){
    	$type = $_GET['type'];
    }else{
    	$type = 1;
    }

     //获取页码
      if(!empty($_GET['page']) && isset($_GET['page'])){
           $page = $_GET['page'];
      }else{
           $page = '1';
      }
       
        $limit = 5;
        $size = 5;
        $class = 'pagination';
        $offset = ($page-1)* $limit;
        $newsinfo = $db->select_all('lay_news','*',"  WHERE `news_type_id`={$type}  LIMIT {$offset},{$limit}",'assoc');
        $datas = $db->select_all('lay_news');
        $count=count($datas);
        $configs =[
            'current'=>$page,
            'count'=>$count,
            'limit'=>$limit,
            'size'=>$size,
            'class'=>$class,
        ];
        $page = Page::getInstance($configs);
        $paes = $page->showPage();


    


    $smarty->assign('newsinfo',$newsinfo);
    $smarty->assign('newstype',$newstype);
    $smarty->assign('paes',$paes);
	$smarty->display('home/news.tpl');

?>