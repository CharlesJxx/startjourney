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
    
    $tname = $_POST['tname'];
    $tTitle = $_POST['tTitle'];
    $tEssay = $_POST['tEssay'];
    $timg = $_POST['timg'];

    if($tname!=null){
        if($timg!=null){
            if($tTitle!=null){
                if($tEssay!=null){
                    $travelsUpdate = array(
                        "tname"=>$tname,
						"belongTo"=>$username,
						"tTitle"=>$tTitle,
						"tEssay"=>$tEssay,
                        "timg"=>"dragUpload/upload/$timg.jpg",
                        "date"=>$date
                    );
                    $mongo->update("travels",array("tname"=>$tname),array("\$set"=>$travelsUpdate));
                    echo "修改成功！";
                }else{
                    echo "您还没有填写正文！";
                }
            }else{
                echo "您还没有填写标题！";
            }
        }else{
            echo "您还没有填写图片名！";
        }
    }else{
        echo "您还没有填写城市名！";
    }



?>