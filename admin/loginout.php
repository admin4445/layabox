<?php

   //引用函数库
    include 'conf.php';
    session_start();
	//最后登录的时间
	$info['lastlogin_time']=time();
	$info['login_ip']=$_SERVER["REMOTE_ADDR"];
	$name=$_SESSION['username'];
	$res=$db->edit('lay_admin',$info,"WHERE `admin_username`='".$name."'");
	
	if($res){
		session_destroy();
	}else{ 
		session_destroy();
	}

  echo "<script> alert('注销用户');window.location.href='login.php'</script>";
 
  die;

?>