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

<body class="homepage">
    <?php 
        include("header.php");
    ?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <!-- 首页轮播点-->
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 textSlideBGC">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">一个人，一条路，从起点，到尽头，有多远，走多远，把足迹连成生命线。</h1>
                                    <a class="btn-slide animation animated-item-3" href="#">查看更多</a>
                                </div>
                            </div>

                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 textSlideBGC">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">人生最好的旅行，就是你在一个陌生的地方，发现一种久违的感动。</h1>
                                    <a class="btn-slide animation animated-item-3" href="#">查看更多</a>
                                </div>
                            </div>

                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 textSlideBGC">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">一个背包，几本书，所有喜欢的歌，一张单程车票，一颗潇洒的心。</h1>
                                    <a class="btn-slide animation animated-item-3" href="#">查看更多</a>
                                </div>
                            </div>
                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
               <!-- 此处可以添加首页轮播图 -->
                <!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>跟随兴趣去旅行，全年随时出发</h2>
                <p class="lead">世界很大，给不安分的心一个躁动的理由</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-map"></i>
                            <h2>探险家</h2>
                            <h3>穿越探险胜地 够胆你就来当中国“贝爷”</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cutlery"></i>
                            <h2>夜市</h2>
                            <h3>吃货必备 最火爆的夜市美食城市</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-ship"></i>
                            <h2>湖泊</h2>
                            <h3>万顷湖平常似镜 走进世界最美湖泊</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-paper-plane"></i>
                            <h2>冲浪</h2>
                            <h3>想不想做一把“浪子” 与海浪的完美追逐</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-car"></i>
                            <h2>自驾客</h2>
                            <h3>最美的风景在路上 总有一条自驾路给你说走就走</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-venus-mars"></i>
                            <h2>艳遇</h2>
                            <h3>单身狗最爱的易艳遇的地方</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>捉泥的大V用户是对旅游资深玩家的认证</h2>
                <p class="lead">他们是旅游界的顶尖旅行家，微博旅游热门的头条君，创意新颖的线路规划师，<br> 赫赫有名的行摄大叔，只要你敢玩，你就是我们寻觅许久的大V用户</p><br>
                <a class="btn btn-primary btn-lg" href="userApply.php">申请成为大V用户</a>
            </div>
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>我们的服务</h2>
                <p class="lead">Our Service</p>
            </div>

            <div class="row">

                <!-- <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div> -->

                <a href="blog.php" style="color:black;"><div class="col-sm-12 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <i class="fa fa-user  fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">大V游记</h3>
                            <p>总有些人不愿苟且/一路追求诗和远方</p>
                        </div>
                    </div>
                </div></a>  

                <a href="chooseCity.php" style="color:black;"><div class="col-sm-12 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <i class="fa fa-building  fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">城市信息</h3>
                            <p>浏览您的目的地</p>
                        </div>
                    </div>
                </div></a>

                <a href="foods.php" style="color:black;"><div class="col-sm-12 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <i class="fa fa-cutlery  fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">美食广场</h3>
                            <p>每一座城市，都有其独有的韵味，等待你不远千里，专程品赏</p>
                        </div>
                    </div>
                </div></a>

                <a href="userCollect.php" style="color:black;"><div class="col-sm-12 col-md-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                           <i class="fa fa-folder-open  fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">收藏功能</h3>
                            <p>把要去的地方都牢牢记住</p>
                        </div>
                    </div></a>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>受众人群</h2>
                        <p>Target People</p>

                        <div class="progress-wrap">
                            <h3>在校大学生</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>文艺青年</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                               <span class="bar-width">75%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>旅游爱好者</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>老年人</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="bar-width">30%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>我们网站会提供什么？</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  精心挑选的旅行目的地
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/bikes.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>旅行的目的</h4>
                                             <p>旅游是一种亲身的体验：体验离家出门的每一步路，感悟大千世界的种种不同。旅游所追求的是一种有价值的体验：在一段时间的繁忙工作后，让自己疲惫的身心得以放松，眼光得以开阔，见闻得以增长，人生得以丰富。</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  丰富的特色美食
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                民以食为天，各地的美食定会让你食指大动
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  专业旅行家的游记
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                您的出游好帮手，走过路过，勿要错过
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  精彩的个人中心
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                属于你一个人的地带，想怎么玩就怎么玩
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->


    <!-- <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>合作伙伴</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!/.container-->
    <!-- </section> --><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>有问题？或者想要我们提供帮助</h2>
                            <p>您可以拨打我们的服务热线123456789 或者点击网站的联系我们以获取我们的帮助</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

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

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="http://localhost/" title="QAQ">startjourney</a>. All Rights Reserved.
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