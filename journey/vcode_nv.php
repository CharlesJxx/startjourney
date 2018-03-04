
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>欢迎来到Journey丨邮箱验证</title>
	
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

<body class="hello" style="background-image:url(/images/body<?php echo rand(1,3);?>.jpg);">
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
                    </form>
                  
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header>
    
    <div class="hello_content">
        <form action="mailVerify.php" target="" method="post" class="codePost col-md-12 col-xs-12">
            <h1 class="text-center">账户未通过验证，请输入您的邮箱验证码：</h1>
            <div class="vcode"><input class="vcodeBox" type="text" name="code"><input class="vcodeS btn btn-primary" type="submit"> </div>
        </form>
        
    </div>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2016 <a target="_blank" href="http://www.startjourney.cn/" title="QAQ">startjourney</a>. All Rights Reserved. <a href="http://www.miitbeian.gov.cn/">辽ICP备16008815号-1</a>
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