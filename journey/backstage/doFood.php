<?php
	require("conn.php");
	include("utilityClass/utility.php");
	
	if(isset($_POST['foodSubmit'])){
		$foodName = $_POST['foodSubmit'];
		$modifiedDate = $_POST['modifiedDate'];
		$foodInfo = $_POST['foodInfo'];

		$findOne = $mongo->findOne("cfood", array("foodName"=>$foodName));
		$fimg = $findOne['imgsrc'];
		$uploadPath = "../".explode("/", $fimg)[0]."/";
		$tmp = explode("/", $fimg);
		$tmp2 = explode(".", $tmp[0]);
		$newFileName = $tmp2[0];

		$uploadResult = uploadImg("foodImg", $uploadPath, $newFileName);
		if($uploadResult->success){
			$foodUpdate = array(
						"info"=>$foodInfo
						);
			$mongo->update("cfood", array("foodname"=>$foodName),array("\$set"=>$foodUpdate));
			echo "修改成功！";
		}else{
			echo "修改失败！".$uploadResult->msg;
		}
	}
?>