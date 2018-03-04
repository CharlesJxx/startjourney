<?php
	if(!isset($_SESSION)){
		session_start();
	}
	require("conn.php");
	//处理用户名信息修改
	if(isset($_POST['nickname']) && isset($_POST['usrintroduce'])){
		$nickname = $_POST['nickname'];
		$usrintroduce = $_POST['usrintroduce'];

		if((strlen($nickname) < 3 && strlen($nickname) > 0) || strlen($nickname) > 12){
			echo "用户名非法哦！";
		}else{
			if(strlen($nickname) == 0 || preg_match('/\s/', $nickname)){
				$nickname = $_SESSION['username'];
			}else{
				$nickname = $_POST['nickname'];
			}
			if(strlen($usrintroduce) != 0){
				$usrintroduce = $_POST['usrintroduce'];
			}else{
				$usrintroduce = $mongo->findOne("users", array("username"=>$_SESSION['username']))['usrintroduce'];
			}
			$update = array("username"=>$nickname, "usrintroduce"=>$usrintroduce);
			$mongo->update("users", array("username"=>$_SESSION['username']), array("\$set"=>$update));
			$_SESSION['username'] = $nickname;
			echo "修改成功！";
		}
	}
	//处理用户密码修改
	if(isset($_POST['oldPass']) && isset($_POST['newPass']) && isset($_POST['confirmPass'])){
		$oldPass = $_POST['oldPass'];
		$newPass = $_POST['newPass'];
		$confirmPass = $_POST['confirmPass'];

		$findResult = $mongo->findOne("users", array("username"=>$_SESSION['username']));

		if($oldPass=="" || $newPass=="" || $confirmPass==""){
			echo "请输入相关信息！";
		}
		else if($newPass != $confirmPass){
			echo "两次输入密码不一致！";
		}else if(md5($oldPass) != $findResult['password']){
			echo "原密码错误！";
		}else{
			$updatePass = array("password"=>md5($newPass));
			$mongo->update("users", array("username"=>$_SESSION['username']), array("\$set"=>$updatePass));
			echo "修改成功！";
		}
	}
	//处理用户头像修改
	if(isset($_POST['userHeadImg'])){
		include("utilityClass/utility.php");

		$findResult = $mongo->findOne("users", array("username"=>$_SESSION['username']));

		$uploadPath = "./userHeadImg/";
		$newFileName = md5($findResult['yzm']);
		$result = uploadImg("userHeadImg", $uploadPath, $newFileName);
		if($result->success){
			$updateImg = array("headImg"=>$uploadPath.$result->msg);
			$mongo->update("users", array("username"=>$_SESSION['username']), array("\$set"=>$updateImg));
			echo "<div style=\"height:20px;font-size:20px;line-height:16px;\">上传成功！</div>";
		}else{
			var_dump($result);
			echo "<div style=\"height:20px;font-size:20px;line-height:16px;\">上传失败，错误：".$result->msg."</div>";
		}
	}
	//处理用户申请认证
	if(isset($_POST['applyName'])){
		$applyName = $_POST['applyName'];
		$updateApply = array("isVip"=>false);
		if($mongo->update("users", array("username"=>$applyName), array("\$set"=>$updateApply))){
			echo $applyName."认证申请提交成功！";
		}else{
			echo $applyName."认证申请提交失败！";
		}
		
	}

