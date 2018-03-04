<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$admin = $_SESSION['admin'];
?>
<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><span>Start Journey</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								3 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>您有3个提示信息</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">新用户申请认证。</span>
										<span class="time">1天前</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">新游记待通过审核。</span>
										<span class="time">2天前</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-user"></i></span>
										<span class="message">新用户注册</span>
										<span class="time">5天前</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>查看所有提醒消息</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								2 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>您有2封来信</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	joker
										     </span>
											<span class="time">
										    	5小时前
										    </span>
										</span>
                                        <span class="message">
                                            关于网站的前端搭建的建议和要求...
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	sky
										     </span>
											<span class="time">
										    	2天前
										    </span>
										</span>
                                        <span class="message">
                                            网站后台数据库的维护和整理报告...
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">查看所有消息</a>
								</li>	
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a id="adminName" class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $admin;?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a data-toggle="modal" href="#tck"><i class="halflings-icon user"></i> 个人资料</a></li>
								<li><a data-toggle="modal" href="#cpw"><i class="halflings-icon pencil"></i> 密码修改</a></li>
								<li><a href="login.php?action=logout"><i class="halflings-icon off"></i> 登出</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>

	<div id="tck" class="modal hide fade in" style="display:none; ">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>管理员简介</h3>
		</div>
		<div class="modal-body">
		<div class="tck_content">
			<ul>
				<li><b>昵称:</b><span id="Admin"> <?php echo $admin;?></span><a id="changeContent" type="button"  onclick="changeContent()">修改</a>
				<li><b>性别:</b> 男</li>
				<li><b>注册时间:</b> 2016-08-22</li>
				<li><b>权限:</b> 管理员</li>
			</ul>
		</div>		        
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-success" data-dismiss="modal">确定</a>
			<a href="#" class="btn" data-dismiss="modal">关闭</a>
		</div>
	</div>
	<!-- ************************************分割线****************************************** -->
	<div id="cpw" class="modal hide fade in" style="display:none; ">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>密码修改</h3>
		</div>
		<div class="modal-body">
		<div class="tck_content">
			<ul>
				<li><input type="password" placeholder="旧密码"></li> 	
				<li><input type="password" placeholder="新密码"></li>
				<li><input type="password" placeholder="确认新密码"></li>
			</ul>
		</div>		        
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-success" data-dismiss="modal">确定修改</a>
			<a href="#" class="btn" data-dismiss="modal">关闭</a>
		</div>
	</div>