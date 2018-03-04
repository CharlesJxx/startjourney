<?php
    require("conn.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $foodDetail = $mongo->findOne("cfood", array("foodName"=>$id));
        //var_dump($foodDetail);
        
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 美食</title>
    
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

<body class=" ">
    <?php 
        include("header.php");
    ?>
    <div class="container foodsDetail">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 foodImg" style="background: url(<?php echo $foodDetail['imgsrc']?>) no-repeat center;">
                <div class="foodname"><?php echo $foodDetail['foodName']?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <fieldset class="fooddec">
                    <legend align="center">美食简介</legend>
                    <p>
                        <?php
                            if(isset($foodDetail['info'])){
                                echo $foodDetail['info'];
                            }else{
                                echo $foodDetail['introduce'];
                            }
                        ?>
                    </p>
                </fieldset>
            </div>       
        </div>
    </div>
    <?php 
        include("footer.php");
    ?>              

    
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