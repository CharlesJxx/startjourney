<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 联系我们</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
</head><!--/head-->

<body>

    <?php 
        include("header.php");
    ?>

    <section id="contact-info">
        <div class="center">                
            <h2>欢迎使用Start Journey支持</h2>
            <p class="lead">我们随时提供帮助</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="baiduAPI.php"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>辽宁省</h5>
                                    <p>沈阳市 <br>
                                    黄河北大街253号</p>
                                    <p>电话:123456789 <br><!--可以把电话换成字体图标，以下同理-->
                                    邮箱地址:StartJourneyServer@163.com</p>
                                </address>

                                <address>
                                    <h5>办公室</h5>
                                    <p>软件学院<br>
                                    208室</p>                                
                                    <p>电话:123456789 <br>
                                    Email Address:jxx0000_8@hotmail.com</p>
                                </address>
                            </li>


                            <!--<li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>联系start journey支持</h2>
                <p class="lead">通过填写您的信息，我们将在后台查看并处理反馈。</p>
            </div> 
            <div class="row contact-wrap"> 
                <form id="main-contact-form" target="feedbackFrame" class="contact-form" name="contact-form" method="post" action="doFeedback.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>姓名 *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div> 
                        <iframe name="feedbackFrame" class="control-group" style="border:none;height:50px;width:400px;"></iframe>                      
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>类别 *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>信息 *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">获得支持</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

     <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>友情链接</h3>
                        <ul>
                            <li><a href="https://www.tuniu.com">途牛网</a></li>
                            <li><a href="http://www.ctrip.com">携程旅游网</a></li>
                            <li><a href="http://www.lotour.com">乐途旅游网</a></li>
                            <li><a href="http://www.cnta.gov.cn">中华人民共和国国家旅游局</a></li>
                            <li><a href="http://cntmedia.cn">中国国家旅游杂志</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>买票</h3>
                        <ul>
                            <li><a href="http://www.12306.cn">12306</a></li>
                            <li><a href="http://www.csair.com">中国南方航空</a></li>
                            <li><a href="http://www.airchina.com">中国国际航空</a></li>
                            <li><a href="http://www.ceair.com">中国东方航空</a></li>
                            <li><a href="http://www.ch.com">春秋航空</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>帮助中心</h3>
                        <ul>
                            <li><a href="contact-us.php">联系我们</a></li>
                            <!-- <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li> -->
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>捉泥</h3>
                        <i class=""><img src="images/QRcode.png" style="width:50%" alt="网站二维码"></i>
                        <p>此处是二维码  扫一扫进入网站</p>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <?php 
        include("footer.php");
    ?><!--/#footer-->
    <ul id="social" class="social-share">
        <li><a href="#"><i class="fa fa-arrow-up gototop"></i></a></li>
        <li><a href="#"><i class="fa fa-qq"></i></a></li>
        <li><a href="#"><i class="fa fa-weibo"></i></a></li>
        <li><a href="#"><i class="fa fa-weixin"></i></a></li> 
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    <!-- fixed icons -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
   
</body>
</html>