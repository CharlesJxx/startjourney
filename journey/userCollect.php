<?php 
    if(!isset($_SESSION)){
        session_start(); 
    }
    if(!$_SESSION['logined']){
        header("Location:hello.php");
    }
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
                <div class="change_li col-md-3 col-xs-12">
                    <ul>
                        <a href="userInfoChange.php"><li>个人信息编辑</li></a>
                        <a href="userPwChange.php"><li>密码更改</li></a>
                        <a href="userImgUpload.php"><li>头像上传</li></a>
                        <a href="userCollect.php"><li class="active"><b>收藏</b></li></a>
                        <a href="userApply.php"><li>申请认证用户</li></a>
                    </ul>
                </div>
                <form action=" " class="change_content col-md-9 col-xs-12">
                	<!-- <div class="line_header">
	                	<div class="col-md-3">
	                		<a href="userImgUpload.php"><img src="images/userpage/userImg.jpg"></a>
	                	</div>
                		<div class="col-md-9">
                			<span class="change_name">jokerhan</span>
                		</div>
                	</div> -->
                	<section id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="images/userpage/userImg.jpg" alt="Picture">
                            </div>

                            <div class="cd-timeline-content">
                                <h3>北京</h3>
                                <p>北京是我国的首都。</p>
                                <a href="#" class="cd-read-more wow fadeInDown animated btn-primary" target="_blank">查看更多</a>
                                <span class="cd-date">2015-01-06</span>
                            </div>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="images/userpage/userImg.jpg" alt="Picture">
                            </div>

                            <div class="cd-timeline-content">
                                <h3>上海</h3>
                                <p>上海被人们称作魔都。</p>
                                <a href="#" class="cd-read-more wow fadeInDown animated btn-primary" target="_blank">查看更多</a>
                                <span class="cd-date">2015-08-16</span>
                            </div>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="images/userpage/userImg.jpg" alt="Picture">
                            </div>

                            <div class="cd-timeline-content">
                                <h3>广州</h3>
                                <p>中国发达沿海城市。</p>
                                <a href="#" class="cd-read-more wow fadeInDown animated btn-primary" target="_blank">查看更多</a>
                                <span class="cd-date">2015-10-15</span>
                            </div>
                        </div>                  
                    </section>

                </form>
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
</body>
</html>