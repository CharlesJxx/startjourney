<?php
	header("content-type:text/html;charset=utf-8");
	require("conn.php");
	include("utilityClass/utility.php");
	if(!isset($_SESSION)){
		session_start();
	}

	$email = $_POST['email'];
	$usr = $_POST['username'];
	$pas = $_POST['password'];
	$cpas = $_POST['confirmpass'];

	if($email=="" || $usr=="" || $pas==""){
		echo "<script>alert(\"请填写注册信息！\");history.back();</script>";
		exit;
	}
	else if(!verifyMail($email)){
		echo "<script>alert(\"邮箱非法哦！\");history.back();</script>";
		exit;
	}
	else if($mongo->findOne("users", array("username"=>$usr))){
		echo "<script>alert(\"用户名重复，请重试！\");history.back();</script>";
		exit;
	}
	else if($pas != $cpas){
		echo "<script>alert(\"两次输入的密码不一致，请重试！\");history.back();</script>";
		exit;
	}
	else{
		$insert = array(
				"userid" => $mongo->getAutoIncreId("counters", "userid"),
				"username" => $usr,
				"password" => MD5($pas),
				"email" => $email,
				"signTime" => getTime(),
				"headImg" => getHeadImg(),
				"checked" => false,
				"usrintroduce" => "这个人很懒，没有留下什么哦！"
			);
		$mongo->insert("users", $insert);
		$_SESSION['usr_nv'] = $usr;
		$_SESSION['mailto'] = $usr;
		$_SESSION['mail'] = $email;
		sleep(1);
		header("Location:Vcode.php");
	}
