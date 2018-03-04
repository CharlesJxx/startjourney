<?php
	/*
	*工具函数
	*
	*/
	//设置默认时区
	date_default_timezone_set('prc');
	//返回当前时间，格式为y-m-d,如2016-06-12
	function getTime(){
		$myTime = date("y-m-d", time());
		return "20".$myTime;
	}
	//返回头像路径
	function getHeadImg($src=""){
		if(!empty($src)){
			return $src;
		}else{
			return "images/default.jpg";
		}
	}
	//简单过滤非法字符
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	//验证邮箱是否合法
	function verifyMail($email){
		$poparray = explode("@", $email);
		if(preg_match("/\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,5}/", $email )){
			if(checkdnsrr(array_pop($poparray), "MX")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	//发送邮件
	function sendmail($to,$subject = "",$body = ""){
	    //$to 表示收件人地址 $subject 表示邮件标题 $body表示邮件正文
	    date_default_timezone_set('prc');//设定时区
	    require_once('class.phpmailer.php');
	    include("class.smtp.php"); 
	    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
	    //$body             = eregi_replace("[\]",'',$body); //对邮件内容进行必要的过滤
	    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
	    $mail->IsSMTP(); // 设定使用SMTP服务
	    $mail->SMTPDebug  = 0;                     // 启用SMTP调试功能
	                                           // 1 = errors and messages
	                                           // 2 = messages only
	    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
	    //$mail->SMTPSecure = "tls";//"ssl";      // 安全协议,163用ssl,hotmail gmail用tls.
	    $mail->Host       = "smtp.163.com";      // SMTP 服务器
	    $mail->Port       = 25;//25,465,587;                   // SMTP服务器的端口号
	    $mail->Username   = "startjourneyserver@163.com";  // SMTP服务器用户名
	    $mail->Password   = "StartJourney163";            // SMTP服务器密码
	    $mail->SetFrom('startjourneyserver@163.com', 'StartJourneyMail');//发送邮件的邮箱和用户名
	    $mail->AddReplyTo("startjourneyserver@163.com","StartJourneyMail");//没啥用
	    $mail->Subject    = $subject;  //邮件题目
	    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	    $mail->MsgHTML($body);  //邮件内容
	    $address = $to;     //收件人地址
	    $mail->AddAddress($address, "亲爱的捉泥用户");
	    //$mail->AddAttachment("images/phpmailer.gif");      // attachment 
	    //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	    if(!$mail->Send()) {
	        echo "Mailer Error: " . $mail->ErrorInfo; //调用错误提示.
	    } else {
	        ;//echo "Message sent successfully！";//你不想在页面中出现这句吧.
	    }
	}
	function uploadImg($uploadName, $uploadPath, $newFileName, $maxsize=1000000, $allowtype=array("gif", "png", "jpg", "jpeg"), $autoRename=false){ //最后一个参数设为true，则前面的$newFileName失效
		date_default_timezone_set('prc');
		include("fileupload.class.php");

		$uploadImg = new FileUpload();

		$uploadImg -> set("path", $uploadPath);
		$uploadImg -> set("newFileName", $newFileName);
		$uploadImg -> set("maxsize", $maxsize);
		$uploadImg -> set("allowtype", $allowtype);
		$uploadImg -> set("isrename", $autoRename);

		$return = json_decode('{"success":false,"msg":""}');

		if($uploadImg -> upload($uploadName)){
			//echo "文件上传成功！";
			$return -> success = true;
			$return ->msg = $uploadImg->getFileName();
		}else{
			//echo "文件上传失败！";
			$return -> success = false;
			$return -> msg = $uploadImg->getErrorMsg();
		}
		return $return;
	}
