<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 300px;height: 300px;margin:0 auto;font-family:"微软雅黑";}
		#allmap{height:100%;width:100%;}
		#r-result{width:100%; font-size:14px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ahWLj4lvBqPre7frGLvX3a1Gh4u37pXT"></script>
	<title>城市名定位</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(123.444607,41.803969);
	map.centerAndZoom(point,11);

</script>