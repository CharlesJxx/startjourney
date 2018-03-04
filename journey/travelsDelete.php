<?php
	require("conn.php");

    if(isset($_GET['Title'])){
        $tTitle = $_GET['Title'];
        }
    $travelsInfo = $mongo->findOne("travels",array("tTitle"=>$tTitle));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>journey 丨 删除游记</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dragUpload/css/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="dragUpload/css/style.css" />
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
    	<div class="row travels_row">
    		<div class="pull-left travels_head">目的地 > 游记 > 删除游记</div>




                <form id="travelsForm" target="travelsFrame" class="form-horizontal" action="doTDelete.php" method="post">
                    <fieldset>
                                <div class="col-md-6 col-xs-12 travels_content">
                                    <div class="travels_title"><b>您想删除该游记吗？</b></div>
                                    <div class="row">    
                                        <div class="col-xs-12 col-sm-10 blog-content">
                                            <a href="#"><img class="img-responsive img-blog" src="<?php echo $travelsInfo['timg']; ?>" width="100%" /></a>
                                            <div class="travels_title"><b><?php echo $travelsInfo['tTitle']; ?></b></div>
                                            <h3><?php echo $travelsInfo['tEssay']; ?></h3>
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden" value="<?php echo $travelsInfo['tTitle']; ?>">
                                    <button type="submit" class="up_travels btn-primary">确定删除</button>
                                    <button type="reset" class="up_travels btn-primary">取消</button>
                                </div>
                    </fieldset>
                </form>
                <iframe name="travelsFrame" class="control-group" id="travelsMsg" style="border:none;height:34px;margin-bottom: -16px;"></iframe>

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
    <script type="text/javascript" src="dragUpload/js/webuploader.js"></script>
    <script type="text/javascript" src="dragUpload/js/upload.js"></script>
</body>
</html>