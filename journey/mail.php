<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require("conn.php");
	include("utilityClass/utility.php");

	$to_username = $_SESSION['mailto'];
	$to = $_SESSION['mail'];

	$randStr = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
	$yanzhengma = substr($randStr,0,6);

	$update = array("yzm"=>$yanzhengma);
	$mongo->update("users", array("username"=>$to_username), array("\$set"=>$update));

	sendmail($to, "欢迎注册StartJourney", "<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">
				<div style=\"background-color:rgb(50,50,50);font-size: 30px;font-weight: bold;font-family: Microsoft YaHei;
				height: 100px;width: 400px;color: white;text-align:center;line-height: 100px;border: 3px solid gray;border-radius: 25px;margin: 50px auto;\">
				您的验证码是：$yanzhengma</div>");
