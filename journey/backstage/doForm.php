<?php
	require("conn.php");
	include("utilityClass/utility.php");
	
	if(isset($_POST['citySubmit'])){
		$cityName = $_POST['citySubmit'];
		$modifiedDate = $_POST['modifiedDate'];
		$cityInfo = $_POST['cityInfo'];

		$findOne = $mongo->findOne("city", array("cname"=>$cityName));
		$cimg = $findOne['cimg'];
		$uploadPath = "../".explode("/", $cimg)[0]."/";
		$tmp = explode("/", $cimg);
		$tmp2 = explode(".", $tmp[1]);
		$newFileName = $tmp2[0];

		$uploadResult = uploadImg("cityImg", $uploadPath, $newFileName);
		if($uploadResult->success){
			$cityUpdate = array(
						"modifiedDate"=>$modifiedDate,
						"cinfo"=>$cityInfo
						);
			$mongo->update("city", array("cname"=>$cityName),array("\$set"=>$cityUpdate));
			echo "修改成功！";
		}else{
			echo "修改失败！".$uploadResult->msg;
		}
	}
?>