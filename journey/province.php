<?php
    require("conn.php");

    if(isset($_GET['pro'])){
        $proname = $_GET['pro'];
        if($mongo->findOne("province", array("pname"=>$proname))){
            $proResult = $mongo->findOne("province", array("pname"=>$proname));
            $citiesResult = $mongo->find("city", array("belongTo"=>$proResult['pname']));
            $foodResult = $mongo->find("cfood",array("belongTo"=>$proname), array("limit"=>5));
            //var_dump($citiesResult);
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
    <title>journey 丨 省份/直辖市</title>
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
                <p><a href="index.php">journey</a> > <a href="choosecity.php">目的地</a> <?php echo $proResult['pname']; ?>省</p>
            </div>
            <a href="#">
                <div class="col-md-12 provinceImg" style="background: url(<?php echo $proResult['pimg']?>) no-repeat center;">
                    <div class="board">
                        <?php echo $proResult['pname']; ?>省
                    </div>
                </div>
            </a>
            <fieldset class="chooseCity">
            <legend align="center"><?php echo $proResult['pname']; ?>省简介</legend>
            <p>
                <?php echo $proResult['pinfo']; ?>
            </p>
            </fieldset>
            <fieldset class="chooseCity">
                <legend align="center">城市选择</legend>
                <!-- <a href="dalian.php"><div class="citybox"><img src="<?php //echo $proResult['pcimg']['p0']; ?>"></div></a> -->
                <?php
                    foreach ($citiesResult as $key => $value) {
                        echo "<a href=\"city.php?city=".$value['cname']."\"><div class=\"citybox\"><div class=\"cityname\">".$value['cname']."</div><img src=\"".$value['cimg']."\"></div></a>";
                    }
                ?>
                
            </fieldset>
            <fieldset class="chooseCity">
                <legend align="center">经典美食</legend>
                <?php
                    foreach ($foodResult as $key => $value) {
                        echo "<a href=\"foodsDetail.php?id=".$value['foodName']."\"><div class=\"citybox\"><div class=\"cityname\">".$value['foodName']."</div><img src=\"".$value['imgsrc']."\"></div></a>";
                    }
                ?>

                <!-- <div class="citybox"><img src="<?php //echo $proResult['pcimg']['p0']; ?>"></div> -->

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