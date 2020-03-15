<?php
   
   include 'conf.php';
   session_start();
   if(isset($_POST['login'])){
        $user=trim($_POST['username']);
        $pwd=md5(trim($_POST['password']));
        $code=trim($_POST['code']);
        if($user===""){
          echo "<script> alert('用户名不能为空');window.history.go(-1)</script>";
          return;
        }
        if($pwd===""){
          echo "<script> alert('密码不能为空');window.history.go(-1)</script>";
          return;
        }

        if($code === ""||$code != strtolower($_SESSION['sessioncode'])){
          echo "<script> alert('验证码不正确');window.history.go(-1)</script>";
          return;
        }
        $res = $db->find_all('lay_admin','*'," WHERE `admin_username`='".$user."' AND `admin_pwd`='".$pwd."'");
        if($res){
             //登录时间
            // setcookie('lastlogin',$userinfo['admin_last_login'],time()+60*10,'/');
              $_SESSION['lastlogin']=$res['lastlogin_time'];
             //用户名
             //setcookie('username',$userinfo['admin_name'],time()+60*10,'/');
              $_SESSION['username']=$res['admin_username'];
             //设置登录状态
             //setcookie('islogin',1,time()+60*10,'/');
              $_SESSION['islogin']=1;
          echo "<script> alert('登录成功');window.location.href='index.php'</script>";
        }else{
          echo "<script> alert('登录失败，请从新登录');window.location.href='login.php'</script>";
        }
   }

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
  
  <!-- Theme CSS -->
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

</head>

<body class="login-page">

<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"></div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">CMS内容管理系统</div>
    </div>
        <form action="login.php" class="cmxform" id="altForm" method="post">
          <div class="panel-body">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">用户名</span>
                <input type="text" name="username" class="form-control phone" maxlength="10" autocomplete="off" placeholder="请输入用户名" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                <input type="password" name="password" class="form-control product" maxlength="10" autocomplete="off" placeholder="请输入密码" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">验证码</span>
                <input type="text" name="code" class="form-control product" maxlength="10" autocomplete="off" placeholder="请输入验证码" required style="width:60%">
                 <img src="http://www.lay.com/class/Captcha.php"  style="width: 39%;margin-left: 1%;height: 34px;border: 1px solid #ccc;border-radius: 2px;" id="code">
              </div>
            </div>
          </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" value="登 录"  name='login'/>

              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="../static/admin/js/jquery.min.js"></script> 
<script src="../static/admin/js/jquery-ui.min.js"></script> 
<script src="../static/admin/js/bootstrap.min.js"></script> <!-- Theme Javascript --> 
<script type="text/javascript" src="../static/admin/js/uniform.min.js"></script> 
<script type="text/javascript" src="../static/admin/js/main.js"></script>
<script type="text/javascript" src="../static/admin/js/custom.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function() {

  // Init Theme Core    
  Core.init();  
   $('#code').click(function(){
        this.src='http://www.lay.com/class/Captcha.php?='+Math.random();
    }) 
  
});

</script>
</body>

</html>