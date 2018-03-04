<?php
	require("conn.php");
	$NotRead = $mongo->find("feedback",array("isRead"=>"no"));
	$Read = $mongo->find("feedback",array("isRead"=>"yes"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>startjourney-反馈消息</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<?php
		include("header.php");
	?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 概览</span></a></li>	
						<li><a href="messages.php"><i class="icon-envelope"></i><span class="hidden-tablet"> 消息中心</span></a></li>
						<li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 任务中心</span></a></li>
						<li><a href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> 表单中心</span></a></li>
						<li><a href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> 表格中心</span></a></li>
						<li><a href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> 图片中心</span></a></li>
						<li><a href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> 用户组</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">后台管理</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">消息中心</a></li>
			</ul>

			<div class="row-fluid">	
				<div class="span7">
					<h1>未读反馈信息</h1>
					<ul class="messagesList">
							<?php
								foreach($NotRead as $key =>$value){
									echo "<li>
											<span class=\"from\"><span class=\"glyphicons star\"><i></i></span>".$value['email']."<span class=\"glyphicons paperclip\"><i></i></span></span><span class=\"title\"><span class=\"label label-warning\">feedback</span>".$value['subject']."</span><span class=\"date\"><b>".$value['date']."</b></span>
											<p>".$value['message']."</p>
										</li>";
							}?>
					</ul>	
				</div>

				<div class="span7">
					<h1>已读反馈信息</h1>
					<ul class="messagesList">
							<?php
								foreach($Read as $key =>$value){
									echo "<li>
											<span class=\"from\"><span class=\"glyphicons star\"><i></i></span>".$value['email']."<span class=\"glyphicons paperclip\"><i></i></span></span><span class=\"title\"><span class=\"label label-warning\">feedback</span>".$value['subject']."</span><span class=\"date\"><b>".$value['date']."</b></span>
											<p>".$value['message']."</p>
										</li>";
							}?>
					</ul>	
				</div>





				<!-- <div class="span5 noMarginLeft">
					
					<div class="message dark">
						
						<div class="header">
							<h1>"2005年以后，互联网进入Web2.0时代，各种类似桌面软件的Web应用大量涌现，网站的前端由此发生了翻天覆地的变化。"</h1>
							<div class="from"><i class="halflings-icon user"></i> <b>Joker Han</b> /landun961713@163.com</div>
							<div class="date"><i class="halflings-icon time"></i><b>5小时前</b></div>
							
							<div class="menu"></div>
							
						</div>
						
						<div class="content">
							<p>
								2005年以后，互联网进入Web2.0时代，各种类似桌面软件的Web应用大量涌现，网站的前端由此发生了翻天覆地的变化。网页不再只是承载单一的文字和图片，各种富媒体让网页的内容更加生动，网页上软件化的交互形式为用户提供了更好的使用体验，这些都是基于前端技术实现的。以前会Photoshop和Dreamweaver就可以制作网页，现在只掌握这些已经远远不够了。无论是开发难度上，还是开发方式上，现在的网页制作都更接近传统的网站后台开发，所以现在不再叫网页制作，而是叫Web前端开发。Web前端开发在产品开发环节中的作用变得越来越重要，而且需要专业的前端工程师才能做好，这方面的专业人才近几年来备受青睐。Web前端开发是一项很特殊的工作，涵盖的知识面非常广，既有具体的技术，又有抽象的理念。简单地说，它的主要职能就是把网站的界面更好地呈现给用户。</p>
							<blockquote>
								掌握HTML是网页的核心，是一种制作万维网页面的标准语言，是万维网浏览器使用的一种语言，它消除了不同计算机之间信息交流的障碍。因此，它是目前网络上应用最为广泛的语言，也是构成网页文档的主要语言，学好HTML是成为Web开发人员的基本条件。
								学好CSS是网页外观的重要一点，CSS可以帮助把网页外观做得更加美观。
								学习JavaScript的基本语法，以及如何使用JavaScript编程将会提高开发人员的个人技能。
								了解Unix和Linux的基本知识虽然这两点很基础，但是开发人员了解Unix和Linux的基本知识是有益无害的。
								了解Web服务器当你对Apache的基本配置，htaccess配置技巧有一些掌握的话，将来必定受益，而且这方面的知识学起来也相对容易。
							</blockquote>
							
							<p>1.尽量减少HTTP请求 (Make Fewer HTTP Requests)</p>
							<p>2.减少 DNS 查找 (Reduce DNS Lookups)</p>
							<p>3.避免重定向 (Avoid Redirects)</p>
							<p>4.使得 Ajax 可缓存 (Make Ajax Cacheable)</p>
							<p>5.延迟载入组件 (Post-load Components)</p>
							<p>6.预载入组件 (Preload Components)</p>
							<p>7.减少 DOM 元素数量 (Reduce the Number of DOM Elements)</p>
							<p>8.切分组件到多个域 (Split Components Across Domains)</p>
							<p>9.最小化 iframe 的数量 (Minimize the Number of iframes)</p>
							<p>10.杜绝 http 404 错误 (No 404s)</p>
								
						</div>
						
						<div class="attachments">
							<ul>
								<li>
									<span class="label label-important">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
								<li>
									<span class="label label-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
								<li>
									<span class="label label-success">js</span> <b>jquery-1.9.1.min.js</b> <i>(94KB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
							</ul>		
						</div>
						
						<form class="replyForm"method="post" action="">

							<fieldset>
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="8" placeholder="回复消息"></textarea>

								<div class="actions">
									
									<button tabindex="3" type="submit" class="btn btn-success">发送消息</button>
									
								</div>

							</fieldset>

						</form>	
						
					</div>	 -->
					
				</div>
						
			</div>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<?php
		include("footer.php");
	?>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
