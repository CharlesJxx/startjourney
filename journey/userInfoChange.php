<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!$_SESSION['logined']){
        header("Location:hello.php");
    }
    require("conn.php");
    $username = $_SESSION['username'];
    $userInfo = $mongo->findOne("users", array("username"=>$username));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 首页</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
</head><!--/head-->

<body class="userInfoChange">
    <?php 
        include("header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="userInfo_content">
                <div class="change_li wow fadeInDown animated col-md-3 col-xs-12">
                    <ul>
                        <a href="userInfoChange.php"><li class="active"><b>个人信息编辑</b></li></a>
                        <a href="userPwChange.php"><li>密码更改</li></a>
                        <a href="userImgUpload.php"><li>头像上传</li></a>
                        <a href="userCollect.php"><li>收藏</li></a>
                        <a href="userApply.php"><li>申请认证用户</li></a>
                    </ul>
                </div>
                <div class="change_content wow fadeInDown animated col-md-9 col-xs-12">
                	<div class="line_header">
	                	<div class="col-md-3 col-xs-3">
	                		<a href="userImgUpload.php"><img src="<?php echo $userInfo['headImg'] ?>"></a>
	                	</div>
                		<div class="col-md-9 col-xs-9">
                			<span class="change_name"><?php echo $userInfo['username']; ?></span>
                		</div>
                	</div>
                	<div class="line">
                		<div class="col-md-3 col-xs-3">
                			<label>用户名</label>
                		</div>
                		<div class="col-md-9 col-xs-9">
                			<input type="text" placeholder="请输入3-12位用户名" value="<?php echo $userInfo['username']; ?>" name="nickname">
                		</div>
                	</div>
                	<div class="line">
                		<div class="col-md-3 col-xs-3">
                			<label>个人简介</label>
                		</div>
                		<div class="col-md-9 col-xs-9">
                			<textarea placeholder="个人简介不超过140字符"></textarea>
                		</div>
                	</div>
                    <div class="line" style="padding: 0">
                        <div class="col-md-3 col-xs-3"></div>
                        <div class="col-md-9 col-xs-9">
                            <p id="message" style="display: none; margin:0"></p>
                        </div>
                    </div>
                	<div class="line">
                		<div class="col-md-3 col-xs-3"></div>
                		<div class="col-md-9 col-xs-9">
                			<button class="btn btn-primary"id="usrinfo">提交</button>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>


    <?php 
        include("footer.php");
    ?><!--/#footer-->
    <ul id="social" class="social-share">
        <li><a href="#"><i class="fa fa-arrow-up gototop"></i></a></li>
        <li><a href="#"><i class="fa fa-qq"></i></a></li>
        <li><a href="#"><i class="fa fa-weibo"></i></a></li>
        <li><a href="#"><i class="fa fa-weixin"></i></a></li> 
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul><!-- fixed icons -->
     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/journey.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>