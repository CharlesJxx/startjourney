<?php
	require("conn.php");

	if(isset($_POST['applyName'])){
		$applyName = $_POST['applyName'];
		$pass = $_POST['pass'];
		$updateIsVip = array("isVip"=>$pass);
		$mongo->update("users", array("username"=>$applyName), array("\$set"=>$updateIsVip));
	}

	if(isset($_POST['adminName'])){
		$adminName = $_POST['adminName'];
		$adminPass = md5($_POST['adminPass']);

		$passFind = $mongo->findOne("admin", array("rootname"=>$adminName));
		if($passFind['rootpass'] == $adminPass){
			echo true;
		}else{
			echo false;
		}
	}
	
	if(isset($_POST['deleteName'])){
		$mongo->remove("users", array("username"=>$_POST['deleteName']));
	}
?>