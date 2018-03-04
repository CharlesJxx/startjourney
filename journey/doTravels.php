<?php
	if(!isset($_SESSION)){
        session_start(); 
    }
    if(!$_SESSION['logined']){
        header("Location:hello.php");
	}
	
	
    date_default_timezone_set('prc');
	$date = date("y/m/d", time());
	
    require("conn.php");
    $username = $_SESSION['username'];
    $userInfo = $mongo->findOne("users", array("username"=>$username));

    if(isset($_GET['action'])){
        if($_GET['action'] == "logout"){
            $_SESSION['logined'] = false;
            header("Location:index.php");
        }else{
            header("Location:404.html");
        }
	}
	$tTitle = $_POST['tTitle'];
	$tEssay = $_POST['tEssay'];
	$tname = $_POST['tname'];
	$timg = $_POST['timg'];

	if($tname!=null){
		if($timg!=null){
			if($tTitle!=null){
				if($tEssay!=null){
					$insert = array(
						"tname"=>$tname,
						"belongTo"=>$username,
						"tTitle"=>$tTitle,
						"tEssay"=>$tEssay,
						"timg"=>"dragUpload/upload/$timg.jpg",
						"data"=>$date
					);
					$mongo->insert("travels", $insert);
					echo "撰写成功!";
				}else{
					echo "您还没有填写文章正文!";
				}
			}else{
				echo "您还没有填写文章标题!";
			}
		}else{
			echo "您还没有填写上传的图片名！";
		}
	}else{
		echo "您还没有填写城市名称!";
	}

	
?>