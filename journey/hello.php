<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>欢迎来到捉泥丨注册或登陆</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
</head><!--/head-->

<body class="hello"  style="background-image:url(/images/body<?php echo rand(1,3);?>.jpg);">
    <header id="header">

        <nav style=" padding: 15px 0;"class="navbar-inverse" role="banner">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="weblogo navbar-brand col-md-4" href="javascript:;"><img src="images/logo.png" alt="logo"></a>
            </div>
                
                <div class="collapse navbar-collapse navbar-right col-md-6 col-xs-12">
                
                    <form class="form-login" method="post" action="loginVerify.php">
                        <div class="Uname col-md-5 col-sm-5 col-xs-12">
                            <label>用户名:</label><input type="text" name="username"><a href="">忘记密码?</a>
                        </div>
                        <div class="Upassw col-md-5 col-sm-5 col-xs-12">
                            <label>密 码 &nbsp;: </label><input type="password" name="password"><a href="index.php">跳过登陆<i class="fa fa-chevron-circle-right"></i></a>

                        </div>
                        <button class="login btn-primary" type="submit">登陆</button>
                        <div id="wb_connect_btn"></div>
                    </form>
                  
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header>
    
    <div class="hello_content">
        <div class="col-md-6 col-xs-12"></div>
        <div class="signin col-md-6 col-xs-12">
              <form class="form-signin wow fadeInDown animated" method="post" action="signVerify.php" onsubmit="return signCheck();">
                <h2 class="form-signin-heading">Start Journey</h2>
                <button class="btn btn-primary disabled" style="opacity: 1;background-color: rgb(197,45,47);width:100%;margin:20px 0;">注册 捉泥,分享精彩视界</button>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="邮箱" name="email" <?php if(isset($_SESSION['email'])){echo "value=".$_SESSION['email'];}?> required autofocus>
                <label for="inputName" class="sr-only">userName</label>
                <input type="name" id="inputName" class="form-control" placeholder="用户名长度3-12位" name="username" <?php if(isset($_SESSION['usr'])){echo "value=".$_SESSION['usr'];}?> required>
                <label for="inputuserName" class="sr-only">Password</label>
                <input type="Password" id="inputPassword1" class="form-control" placeholder="密码" name="password" required>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="Password" id="inputPassword2" class="form-control" placeholder="确认密码" name="confirmpass" required>
                <p class="notice_line" style="text-align:center;"></p>
                <input id="submitS" class="btn btn-lg btn-primary btn-block" name="submit" value="注册" type="submit">
                <div class="others">
                    <p class="pull-left"style="margin-left:25px;">第三方登录：</p>
                    <a href="#"><i class="fa fa-weibo"></i></a>
                    <a href="#"><i class="fa fa-qq"></i></a>
                </div>
                <p style="text-align:center;margin-top: 5px;">注册即表示你同意我们的 <a href="">条款</a> 和 <a href=""> 隐私权政策</a></p>
              </form>
           
        </div>
    </div>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2018 <a target="_blank" href="http://localhost/" title="QAQ">捉泥 startjourney</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">首页</a></li>
                        <li><a href="#">QAQ</a></li>
                        <li><a href="contact-us.php">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/journey.js"></script>
    
</body>
</html>
