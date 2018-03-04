<?php
    require("conn.php");
    $travelsInfo = $mongo->find("travels");
    



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey | 大咖游记</title>
    
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
    ?><!--/header-->

    <section id="blog" class="container">
        <div class="center">
            <h2>游记</h2>
            <p class="lead">Start Journey | 看大咖们记录旅途的乐趣</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <?php
                        foreach($travelsInfo as $key =>$value){
                            echo "
                                <div class=\"blog-item\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-2 text-center\">
                                            <div class=\"entry-meta\">
                                                <span id=\"publish_date\">2016-06-14</span>
                                                <span><i class=\"fa fa-user\"></i> <a href=\"#\">韩志勇</a></span>
                                                <span><i class=\"fa fa-comment\"></i> <a href=\"blog-item.php#comments\">2 人评论</a></span>
                                                <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 个赞</a></span>
                                            </div>
                                        </div>
                                            
                                        <div class=\"col-xs-12 col-sm-10 blog-content\">
                                            <a href=\"#\"><img class=\"img-responsive img-blog\" src=\"".$value['timg']."\" width=\"100%\" alt=\"\" /></a>
                                            <h2><a href=\"#\">".$value['tTitle']."</a></h2>
                                            <h3>作者：".$value['belongTo']."</h3>
                                            <h3>".$value['tEssay']."</h3>
                                        </div>
                                    </div>   
                                </div>";}
                    ?>
	
    				<div class="widget categories">
                        <h3>最近评论</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar1.png" alt=""  />
                                    <p>看起来好好玩的样子哦！</p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">jxx</a></span><span> On <a href="#">iPhone</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar2.png" alt=""  />
                                    <p>看完你写的过后我好想去呢。</p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Sky</a></span><span>On <a href="#">Android</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

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
    </ul><!-- fixed icons -->
    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>