
<?php
    include 'conf.php';
   
     session_start();
    //验证用户是否登录
     if(!(isset( $_SESSION['islogin'] ) && $_SESSION['islogin'] == 1)){
         echo "<script> alert('您未登录,请先登录')</script>";
         echo "<script> setTimeout(()=>{window.location.href='login.php'})</script>";
         die;
     }



   //当前url
    $current_url = basename($_SERVER['REQUEST_URI']);
    if($current_url == '') $current_url = 'index.php';
       $reg = '/\?/';
    if(preg_match($reg,$current_url)){
      $current_url = preg_split($reg, $current_url);
      $current_url = $current_url[0];
    }
     $type = isset($_GET) ? $_GET['type'] : '';

     //查询所有导航类型

     $bantype = $db->select_all('lay_nav');

     //查询关于我们
     $aboutinfo = $db->select_all('lay_about');
    


?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Core CSS  -->

  <link rel="stylesheet" type="text/css" href="../static/admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../static/admin/css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link href="../static/admin/css/bootstrap-fileinput.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../static/admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="../static/admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="../static/admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="../static/admin/css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="../static/admin/css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="../static/admin/css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../static/admin/css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="../static/admin/js/jquery.min.js"></script> 
  <script type="text/javascript" src="../static/admin/js/jquery-ui.min.js"></script> 
  <script type="text/javascript" src="../static/admin/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../static/admin/js/uniform.min.js"></script> 
  <script type="text/javascript" src="../static/admin/js/main.js"></script>
  <script type="text/javascript" src="../static/admin/js/custom.js"></script> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="../static/admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo $_SESSION['username'] ?></a>
    <a href="loginout.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
        <div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
         <li class="<?php 
          if($current_url=='nav_list.php'||$current_url=='nav_add.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php 
          if($current_url=='nav_list.php'||$current_url=='nav_add.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">导航管理</span><span class="caret"></span></a>
            <ul class="nav sub-nav" id="sideEight" style="">
               <li class="<?php if($type==''&& $current_url=='nav_list.php'||$current_url=='nav_add.php'){ echo 'active';} ?>"><a href="nav_list.php"><span class="glyphicons glyphicon-record"></span> 导航列表</a></li>
             
            </ul>
        </li>
        <li class="<?php 
          if($current_url=='banner_list.php'||$current_url=='banner_add.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php 
          if($current_url=='banner_list.php'||$current_url=='banner_add.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">轮播图管理</span><span class="caret"></span></a>
            <ul class="nav sub-nav" id="sideEight" style="">

               
                <?php foreach($bantype as $val){ ?>
                    <li class="<?php 
                      if($type==$val['nav_id'] || $current_url=="banner_list.php?type=".$val['nav_id']){ 
                          echo 'active';
                      }
                    ?>"><a href="banner_list.php?type=<?php echo $val['nav_id']; ?>"><span class="glyphicons glyphicon-record"></span><?php echo $val['nav_name']  ?></a></li>
                  <?php } ?>
             
            </ul>
        </li>


        <li class="<?php 
          if($current_url=='product_list.php'||$current_url=='protype_list.php'||$current_url=='pro_layabox_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php 
          if($current_url=='product_list.php'||$current_url=='protype_list.php'||$current_url=='pro_layabox_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">产品管理</span><span class="caret"></span></a>
            <ul class="nav sub-nav" id="sideEight" style="">
               <li class="<?php if($type==''&& $current_url=='product_list.php'||$current_url=='product_list.php'){ echo 'active';} ?>"><a href="product_list.php"><span class="glyphicons glyphicon-record"></span> 全部产品列表</a></li>
                  <li class="<?php if($type==''&& $current_url=='protype_list.php'||$current_url=='protype_add.php'){ echo 'active';} ?>"><a href="protype_list.php"><span class="glyphicons glyphicon-record"></span> 产品类型</a></li>
                   <li class="<?php if($type==''&& $current_url=='pro_layabox_list.php'||$current_url=='pro_layabox_list.php'){ echo 'active';} ?>"><a href="pro_layabox_list.php"><span class="glyphicons glyphicon-record"></span> Layabox产品</a></li>
            </ul>
        </li>
        
        
          <li class="<?php
          if($current_url=='game_list.php'||$current_url=='game_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='game_list.php'||$current_url=='game_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">游戏管理</span><span class="caret"></span></a>
              <ul class="nav sub-nav" id="sideEight" style="">
                  <li class="<?php if($type==''&& $current_url=='game_list.php'||$current_url=='game_list.php'){ echo 'active';} ?>"><a href="game_list.php"><span class="glyphicons glyphicon-record"></span> 游戏列表</a></li>
              </ul>
          </li>

           <li class="<?php
          if($current_url=='news_list.php'||$current_url=='news_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='news_list.php'||$current_url=='news_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">新闻管理</span><span class="caret"></span></a>
              <ul class="nav sub-nav" id="sideEight" style="">
                  <li class="<?php if($type==''&& $current_url=='news_list.php'||$current_url=='news_list.php'){ echo 'active';} ?>"><a href="news_list.php"><span class="glyphicons glyphicon-record"></span> 新闻列表</a></li>
                  <li class="<?php if($type==''&& $current_url=='news_type_list.php'||$current_url=='news_type_list.php'){ echo 'active';} ?>"><a href="news_type_list.php"><span class="glyphicons glyphicon-record"></span> 新闻类型</a></li>
              </ul>
          </li>

          <li class="<?php
          if($current_url=='coll_list.php'||$current_url=='coll_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='coll_list.php'||$current_url=='coll_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">合作渠道</span><span class="caret"></span></a>
             <ul class="nav sub-nav" id="sideEight" style="">
                  <li class="<?php if($type==''&& $current_url=='coll_list.php'||$current_url=='coll_list.php'){ echo 'active';} ?>"><a href="coll_list.php"><span class="glyphicons glyphicon-record"></span> 渠道列表</a></li>
                
              </ul>
          </li>
           <li class="<?php
          if($current_url=='about_list.php'||$current_url=='about_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='about_list.php'||$current_url=='about_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">关于我们</span><span class="caret"></span></a>
             <ul class="nav sub-nav" id="sideEight" style="">
                  <?php foreach($aboutinfo  as $v){ ?>
                  <li class="<?php if($type==$v['abo_id']){ echo 'active';} ?>"><a href="about_list.php?type=<?php echo $v['abo_id'] ?>"><span class="glyphicons glyphicon-record"></span><?php echo $v['abo_name'] ?> </a></li>
                  <?php } ?>
              </ul>
          </li>
         
           <li class="<?php
          if($current_url=='recruit_list.php'||$current_url=='recruit_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='recruit_list.php'||$current_url=='recruit_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">招聘管理</span><span class="caret"></span></a>
             <ul class="nav sub-nav" id="sideEight" style="">
                  <li class="<?php if($type==''&& $current_url=='recruit_list.php'||$current_url=='recruit_list.php'){ echo 'active';} ?>"><a href="recruit_list.php"><span class="glyphicons glyphicon-record"></span> 招聘信息列表</a></li>
                
              </ul>
          </li>

         

          <li class="<?php
          if($current_url=='conf_list.php'||$current_url=='conf_list.php'){echo 'active';} ?>"> <a href="#sideEight" class="accordion-toggle  <?php
              if($current_url=='conf_list.php'||$current_url=='conf_list.php'){echo 'menu-open';} ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">网站配置</span><span class="caret"></span></a>
             <ul class="nav sub-nav" id="sideEight" style="">
                  <li class="<?php if($type==''&& $current_url=='conf_list.php'||$current_url=='signup_add.php'){ echo 'active';} ?>"><a href="conf_list.php"><span class="glyphicons glyphicon-record"></span> 配置列表</a></li>
                
              </ul>
          </li>

      </ul>
    </div>
  </aside>