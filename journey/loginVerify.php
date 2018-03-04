<?php
	header("content-type:text/html;charset=utf-8");
	require("conn.php");
	if(!isset($_SESSION)){
		session_start();
	}

	//此处存储SESSION...

	$usr = test_input($_POST['username']);
	$pas = test_input($_POST['password']);

	$loginFind = $mongo->findOne("users", array("username"=>$usr));

	if($usr=="" || $pas==""){
		echo "<script>alert(\"密码或用户名不能为空，请重试！\");history.back();</script>";
		
	}else if(!$loginFind){
		echo "<script>alert(\"用户名或密码错误，请重试！\");history.back();</script>";
		include("hello.php");
	}else if(!$loginFind['checked']){
		$_SESSION['usr_nv'] = $usr;
		echo "<script>alert(\"用户未通过邮箱验证，请验证！\");</script>";
		include("vcode_nv.php");
	}else{
		if($loginFind['username'] == $usr && $loginFind['password'] == MD5($pas)){
			$_SESSION['username'] = $loginFind['username'];
			$_SESSION['logined'] = true;
			//echo "<script>alert(\"用户登录成功，正在跳转到个人中心！\");</script>";
			header("Location:personalPage.php");
		}else{
			echo "<script>alert(\"用户名或密码错误，请重试！\");history.back();</script>";
			//include("hello.php");
		}
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}