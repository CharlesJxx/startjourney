<?php
	require("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 美食推荐</title>
	
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

	<section id="foodstitle">
        <div class="container">
            <div class="foodstip center wow fadeInDown">
                <h2>吃货必备，经典美食</h2>
                <p class="lead">美食是一座城市的另一个读本，代表着当地的文化，当然也是每一个旅游吃货必备攻略。最全的攻略，等待对美食最有诚意的你。</p>
            </div>
        </div>
    </section>
	<section class="foodscontent wow fadeInDown animated">
		<div class="container">
			<!-- <div class="col-md-6 food"> 
				<img src="images/QAQ.jpg" alt=""> 
				<div class="foodInfo">
					<p class="foodDesc">这里是对于该美食的各种评价等等乱七八糟的屁话。。。</p>
					<div class="foodAddress"><span>地点</span></div>
				</div> 
			</div> -->
			<?php
				$foodFind = $mongo->find("cfood",array(),array("limit"=>6));
				//echo "<pre>";
				foreach ($foodFind as $key => $value) {
					//var_dump($value['imgsrc']);
					$imgsrc = $value['imgsrc'];
					$introduce = $value['introduce'];
					$locate = $value['locate'];
                    $foodName = $value['foodName'];
					echo "<div class=\"col-md-6 food\">";
                    echo "<a href=\"foodsDetail.php?id=$foodName\">";
					echo "<img src=\"$imgsrc\">";
                    echo "</a>";
					echo "<div class=\"foodInfo\">";
					echo "<p class=\"foodDesc\">$introduce</p>";
					echo "<div class=\"foodAddress\"><span>$locate</span></div>";
					echo "</div>";
					echo "</div>";
				}
			?>
		</div>
	</section>


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