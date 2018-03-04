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
    <title>journey 丨 写游记</title>
	
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
    		<div class="pull-left travels_head">目的地 > 游记 > 写游记</div>
                <form id="travelsForm" target="travelsFrame" class="form-horizontal" action="doTravels.php" method="post">
                    <fieldset>
                                <div class="col-md-6 col-xs-12 travels_content">
                                    <div class="travels_title"><b>发表新游记</b></div>
                                    <div class="lab_title"><span>*</span>相关城市:<small>(20个汉字之内)</small></div>
                                    <input id="travel_input" type="text" name="tname">
                                    <div class="lab_title"><span>*</span>请输入下方插入图片的名称:<small>(请使用图片的英文名，不要使用汉字！)</small></div>
                                    <input id="travel_input" type="text" name="timg">
                                    <div class="lab_title"><span>*</span>标题:<small>(20个汉字之内)</small></div>
                                    <input id="travel_input" type="text" name="tTitle">
                                    <div class="lab_title"><span>*</span>正文:</div>
                                    <textarea id="travel_content" name="tEssay"></textarea>
                                    <button type="submit" class="up_travels btn-primary">发表</button>
                                    <button type="reset" class="up_travels btn-primary">取消</button>
                                    <iframe name="travelsFrame" class="control-group" id="travelsMsg" style="border:none;height:34px;margin-bottom: -16px;"></iframe>
                                </div>
                    </fieldset>
                </form>
            
            <div class="col-md-6 col-xs-12 travel_imgup">
    			<div class="text-center">游记图片上传</div>
                    <div id="uploader">
                        <div class="queueList">
                            <div id="dndArea" class="placeholder">
                                <div id="filePicker"></div>
                                <p>或将照片拖到这里</p>
                            </div>
                        </div>
                        <div class="statusBar" style="display:none;">
                            <div class="progress">
                                <span class="text">0%</span>
                                <span class="percentage"></span>
                            </div><div class="info"></div>
                            <div class="btns">
                                <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                            </div>
                        </div>
                    </div>
    		</div>
            
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