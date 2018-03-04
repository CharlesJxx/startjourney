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

    if(isset($_GET['action'])){
        if($_GET['action'] == "logout"){
            $_SESSION['logined'] = false;
            header("Location:index.php");
        }else{
            header("Location:404.html");
        }
    }
    $travelsInfo = $mongo->find("travels",array("belongTo"=>$username));

    $m = new MongoClient("127.0.0.1:27017");
    $db = $m->journey;
    $tCollection = $db->travels;
    $tNum = $tCollection->find(array("belongTo"=>$username));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey | 个人中心</title>
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

    <section class="userPage text-center">
        
            <header class="userHeader ">
                <div class="personImg col-md-5 col-sm-12 wow fadeInDown animated">
                    <div class="Imgbox"><a href="userImgUpload.php" class="changeImg"><i class="fa fa-pencil"></i></a><img style="width:170px;height:170px;" src="<?php echo $userInfo['headImg'] ?>"alt=""></div>
                </div>
                <div class="personInfo col-md-7 col-sm-12 wow fadeInDown animated">
                    <div class="userN">
                        <span><?php echo $userInfo['username']; ?></span><button class="btn-primary cfo">编辑资料</button><button class="btn-primary logout">注销</button><div class="clean"></div>
                    </div>
                    <div class="userI">
                    <?php 
                        
                        echo $userInfo['usrintroduce'];
                        
                    ?>
                    </div>
                    <?php 
                        if(isset($userInfo['isVip'])){
                            if($userInfo['isVip']){
                                echo "<ul>";
                                echo "<li>已写游记<b>";
                                echo $tNum->count();
                                echo "篇</b></li>";
                                echo "</ul>";
                            }else{
                                echo "您还不是大v用户，快去申请吧！";
                            }
                        }
                     ?>
                    
                </div>
            </header>
            <div class="userContent col-sm-12 wow fadeInDown animated">
                
                    <!-- <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/1.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/2.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/3.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a> -->
                    <?php
                        foreach ($travelsInfo as $key =>$value) {
                            echo "<a href=\"blog.php?user=".$value['belongTo']."\" class=\"articles col-md-4 col-xs-4\">
                                <img src=\"".$value['timg']."\">
                                <div class=\"articleInfo\">
                                    <p>".$value['tname']."</p>
                                </div>
                            </a>";}
                    ?>



                    <!-- <a class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/5.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/6.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/7.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/8.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a>
                    <a href="#" class="articles col-md-4 col-xs-4">
                        <img src="images/userPage/9.png">
                        <div class="articleInfo">
                            <p><i class="fa fa-heart"></i> 99 &nbsp;<i class="fa fa-commenting"></i> 49</p>
                        </div>
                    </a> -->
                    <div class="clearfix"></div>
                        <?php
                            echo 
                                "<a href=\"travelsDairy.php?user=".$userInfo['username']."\" class=\"col-md-2 col-xs-2 newblog\">
                                    <div class=\"addblog\">撰写游记</div><i class=\"fa fa-plus\"></i>
                                </a>";
                        ?>
            </div>
                
        
    </section><!--/userPage-->

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
    <script src="js/journey.js"></script>
</body>
</html>