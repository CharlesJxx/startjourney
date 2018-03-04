<?php
	header("content-type:text/html;charset=utf-8;");
	require("conn.php");
	if(!isset($_SESSION)){
		session_start();
	}

	$code = $_POST['code'];

	$result = $mongo->findOne("users", array("username"=>$_SESSION['usr_nv']));

	if($code == $result['yzm']){
		$update = array("checked"=>true);
		$mongo->update("users", array("username"=>$_SESSION['usr_nv']), array("\$set"=>$update));
		echo "<script>alert(\"验证成功，请登录！\");window.location.href=\"hello.php\";</script>";
	}else{
		echo "<script>alert(\"验证失败，请重试！\");window.location.href=\"vcode_nv.php\";</script>";
	}