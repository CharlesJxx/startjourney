<?php
	require("conn.php");

    if(isset($_GET['city'])){
        $cityname = $_GET['city'];
        if($mongo->findOne("city", array("cname"=>$cityname))){
            $cityResult = $mongo->findOne("city", array("cname"=>$cityname));
        }else{
            header("Location:chooseCity.php");
        }
    }else{
        header("Location:chooseCity.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 城市</title>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12 headline">
                <p><a href="">journey</a> ><a href="chinamap.php">目的地</a> <?php echo $cityResult['cname'];?></p>
            </div>
            <a href="#">
                <div class="col-md-12 provinceImg" style="background: url(<?php echo $cityResult['cimg']?>) no-repeat center;">
                    <div class="board">
                        <?php echo $cityResult['cname'];?>
                    </div>
                </div>
            </a>
            <fieldset class="chooseCity">
            <legend align="center">城市简介</legend>
            <p><?php echo $cityResult['cinfo'];?></p>
            </fieldset>
            <fieldset class="chooseCity">
                <legend align="center">城市景点</legend>
                <?php
                    $beautyFind = $mongo->find("cbeauty", array("belongTo"=>$cityResult['cname']));
                    foreach ($beautyFind as $key => $value) {
                        echo "<div class=\"citybox\"><img src=\"".$value['cbimg']."\"></div>";
                    }
                ?>
                <!-- <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div> -->
            </fieldset>
            <fieldset class="chooseCity">
                <legend align="center">特色美食</legend>
                <?php
                    $foodFind = $mongo->find("cfood", array("locate"=>$cityResult['cname']));
                    foreach ($foodFind as $key => $value) {
                        echo "<div class=\"citybox\"><img src=\"".$value['imgsrc']."\"></div>";
                    }
                ?>
                <!-- <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div>
                <div class="citybox"><img src="images/200-300.png"></div> -->
            </fieldset>
            
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