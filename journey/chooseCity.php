<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>journey | 目的地</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/lib/raphael-min.js"></script>
    <script type="text/javascript" src="js/res/chinaMapConfig.js"></script>
    <script type="text/javascript" src="js/map-min.js"></script>
    <style>
        *{margin:0;padding:0;border: none;}
        body { color: #333; text-align: center; font: 12px "微软雅黑";}
        .mapTipText{width: 280px;height: 110px;background-color: #ffffff;}
        .mapTipText .mapTipImg{height: 66px; width: 66px; float: left;border: 2px solid #ffffff; border-radius: 50%;overflow: hidden;margin: -12px 5px 0 -12px;}
        .mapTipText .mapTipImg img{width: 100%;height: 100%;}
        .mapTipText .mapTipList{float: left;margin-left: 4px;}
        .mapTipText .mapTipList h2{text-align: left; margin:0;}
        .mapTipText .mapTipList h2 a{font-size: 24px; color: #262626;text-decoration:none;}
        .mapTipText .mapTipList h2 a:hover{ color: #0085d2;}
        .mapTipText .mapTipList h2 a span{font-size: 16px;margin-left: 3px;}
        .mapTipText .mapTipList ul{ width: 203px;padding-right: 10px;}
        .mapTipText .mapTipList ul li{list-style: none;float: left;padding: 7px 3px 0 3px;}
        .mapTipText .mapTipList ul li a{color: #262626;text-decoration:none;}
        .mapTipText .mapTipList ul li a:hover{background-color:#2ebcfe;color:#ffffff;}
        textarea:disabled {
            background-color:#ECF2F3;
        }
    </style>
    <script type="text/javascript">
        $(function(){
            $('#ChinaMap').SVGMap({
                mapWidth: 825,
                mapHeight: 594
            });
        });
    </script>
</head>
<body class="choosecity">
    <?php 
        include("header.php");
    ?>
<div class="provincepage">
        <section id="chooseTitle">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>选择您的目的地</h2>
                    <p class="lead">在下面的地图上点选您的目的地</p>
                </div>
            </div><!--/.container-->
        </section><!--/#recent-works-->

    <div style="margin: 0px auto;width: 100%;height:600px;">
    <!--<div class="itemCon" style="float: left">-->
        <div id="ChinaMap" style="margin: 0px auto;"></div>
        <div id="stateTip" style="position: absolute;left: 100%;text-align: left;display:inline;"></div>
    <!--</div>-->
        <div id="mapTipContent" style="width: 900px;margin: 0 auto;display: none">
            <div class="mapTipText mapTipText0">
                <div class="mapTipImg"><img src="images/provinceImg/heilongjiang.jpg" alt=""/></div>
                <div class="mapTipList">
                    <h2><a href="province.php?pro=黑龙江">黑龙江<span>Heilongjiang</span></a></h2>
                    <ul>
                        <li><a href="">哈尔滨</a></li>
                        <li><a href="">漠河</a></li>
                        <li><a href="">五大连池</a></li>
                        <li><a href="">兴凯湖</a></li>
                        <li><a href="">雪乡</a></li>
                        <li><a href="">大兴安岭</a></li>
                        <li><a href="">齐齐哈尔</a></li>
                        <li><a href="">牡丹江</a></li>
                        <li><a href="">伊春</a></li>
                        <li><a href="">大庆</a></li>
                        <li><a href="">镜泊湖</a></li>
                        <li><a href="">帽儿山</a></li>
                    </ul>
                </div>
            </div>
            <div class="mapTipText mapTipText1">
                <div class="mapTipImg"><img src="images/provinceImg/jilin.jpg" alt=""/></div>
                <div class="mapTipList">
                    <h2><a href="province.php?pro=吉林">吉林<span>Jilin</span></a></h2>
                    <ul>
                        <li><a href="">长白山</a></li>
                        <li><a href="">长春</a></li>
                        <li><a href="">延吉</a></li>
                        <li><a href="">雾凇岛</a></li>
                        <li><a href="">集安</a></li>
                        <li><a href="">吉林市</a></li>
                        <li><a href="">查干湖</a></li>
                        <li><a href="">三角龙湾</a></li>
                        <li><a href="">通化</a></li>
                        <li><a href="">四平</a></li>
                        <li><a href="">松原</a></li>
                        <li><a href="">白城</a></li>
                    </ul>
                </div>
            </div>
            <div class="mapTipText mapTipText2">
                <div class="mapTipImg"><img src="images/provinceImg/liaoning.jpg" alt=""/></div>
                <div class="mapTipList">
                    <h2><a href="province.php?pro=辽宁">辽宁<span>Liaoning</span></a></h2>
                    <ul>
                        <li><a href="">大连</a></li>
                        <li><a href="">丹东</a></li>
                        <li><a href="">沈阳</a></li>
                        <li><a href="">兴城</a></li>
                        <li><a href="">葫芦岛</a></li>
                        <li><a href="">绥中</a></li>
                        <li><a href="">旅顺</a></li>
                        <li><a href="">锦州</a></li>
                        <li><a href="">抚顺</a></li>
                        <li><a href="">鞍山</a></li>
                        <li><a href="">本溪</a></li>
                        <li><a href="">营口</a></li>
                        <li><a href="">盘锦</a></li>
                        <li><a href="">长兴岛</a></li>
                    </ul>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/journey.js"></script>
    

</body>
</html>