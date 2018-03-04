<?php
	date_default_timezone_set('prc');
	$date = date("y/m/d", time());

	require("conn.php");
	$foodInfo = $mongo->find("cfood");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>startjourney-</title>
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
					<a href="index.php">后台管理</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">表单中心</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>城市信息修改</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form id="cityForm" target="cityFrame" class="form-horizontal" action="doForm.php" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="citySelect">城市选择</label>
								<div class="controls">
									<select data-placeholder="选择需要修改的城市" id="citySelect" data-rel="chosen">
										<option value=""></option>
										<optgroup label="黑龙江省">
										  <option>哈尔滨市</option>
										  <option>齐齐哈尔市</option>
										  <option>牡丹江市</option>
										  <option>大庆市</option>
										  <option>黑河市</option>
										  
										</optgroup>
										<optgroup label="吉林省">
										  <option>长春市</option>
										  <option>吉林市</option>
										  <option>通化市</option>
										  <option>辽源市</option>
										  <option>松原市</option>
										  
										</optgroup>
										<optgroup label="辽宁省">
										  <option>沈阳市</option>
										  <option>鞍山市</option>
										  <option>抚顺市</option>
										  <option>大连市</option>
										  <option>本溪市</option>
										  
										</optgroup>
										<!-- <optgroup label="其他省份">
										  <option>其它城市1</option>
										  <option>其它城市2</option>
										  <option>其它城市3</option>
										  <option>其它城市4</option>
										</optgroup> -->
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="cityDate">修改日期</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="cityDate" name="modifiedDate" value="<?php echo $date;?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cityImg">上传图片</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="cityImg" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="cityInfo">城市文字描述</label>
							  <div class="controls">
								<textarea class="cleditor" id="cityInfo" name="cityInfo" rows="3"></textarea>
							  </div>
							</div>
							<iframe name="cityFrame" class="control-group" id="citySubmitMsg" style="border:none;height:34px;margin-bottom: -16px;"></iframe>
							<input type="hidden" id="citySubmit" name="citySubmit" value="">
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" >保存提交</button>
							  <button type="reset" class="btn">取消</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>美食信息修改</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form id="foodForm" target="foodFrame" class="form-horizontal" action="doFood.php" method="post" enctype="multipart/form-data">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="foodSelect">城市选择</label>
								<div class="controls">
									<select data-placeholder="选择需要修改的城市" id="foodSelect" data-rel="chosen">
										<option value=""></option>
										<optgroup label="美食名称">
										<?php 
											foreach($foodInfo as $key=>$value){
												echo "<option>".$value['foodName']."</option>";
											}
										?>
										</optgroup>
										<!-- <optgroup label="吉林省">
										  <option>城市一</option>
										  <option>城市二</option>
										  <option>城市三</option>
										  <option>城市四</option>
										  <option>城市五</option>
										  <option>城市六</option>
										</optgroup>
										<optgroup label="辽宁省">
										  <option>城市一</option>
										  <option>城市二</option>
										  <option>城市三</option>
										  <option>城市四</option>
										  <option>城市五</option>
										  <option>城市六</option>
										</optgroup>
										<optgroup label="其他省份">
										  <option>其它城市1</option>
										  <option>其它城市2</option>
										  <option>其它城市3</option>
										  <option>其它城市4</option>
										</optgroup> -->
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="foodDate">修改日期</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="foodDate" name="modifiedDate" value="<?php echo $date;?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="foodImg">上传图片</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="foodImg" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="foodInfo">美食文字描述</label>
							  <div class="controls">
								<textarea class="cleditor" id="foodInfo" name="foodInfo" rows="3"></textarea>
							  </div>
							</div>
							<iframe name="foodFrame" class="control-group" id="foodSubmitMsg" style="border:none;height:34px;margin-bottom: -16px;"></iframe>
							<input type="hidden" id="foodSubmit" name="foodSubmit" value="">
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">保存提交</button>
							  <button type="reset" class="btn">取消</button>
							</div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			
    

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

		<script src="js/form.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
