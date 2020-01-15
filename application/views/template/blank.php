<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dashboard | Podomoro University</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="<?= base_url('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.css')?>" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css')?>"/>
	<![endif]-->

	<!-- Theme -->
	<link href="<?= base_url('assets/css/main.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/font-awesome.css')?>">
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/font-awesome-ie7.min.css')?>">
	<![endif]-->

	<!--[if IE 8]>
		<link href="<?= base_url('assets/css/ie8.css')?>" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?= base_url('assets/js/libs/jquery-1.10.2.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/libs/lodash.compat.min.js')?>"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?= base_url('assets/js/libs/html5shiv.js')?>"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<?= base_url('assets/plugins/touchpunch/jquery.ui.touch-punch.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/event.swipe/jquery.event.move.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/event.swipe/jquery.event.swipe.js')?>"></script>

	<!-- General -->
	<script type="text/javascript" src="<?= base_url('assets/js/libs/breakpoints.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/respond/respond.min.js')?>"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="<?= base_url('assets/plugins/cookie/jquery.cookie.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/slimscroll/jquery.slimscroll.horizontal.min.js')?>"></script>

  <!-- JWT Encode -->
    <script type="text/javascript" src="<?= base_url('assets/plugins/jwt/encode/hmac-sha256.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/jwt/encode/enc-base64-min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/jwt/encode/jwt.encode.js')?>"></script>

    <!-- JWT Decode -->
    <script type="text/javascript" src="<?= base_url('assets/plugins/jwt/decode/build/jwt-decode.min.js')?>"></script>

	<!-- Page specific plugins -->
	
	<!-- Forms -->
	<script type="text/javascript" src="<?= base_url('assets/plugins/typeahead/typeahead.min.js')?>"></script> 
	<script type="text/javascript" src="<?= base_url('assets/plugins/autosize/jquery.autosize.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/inputlimiter/jquery.inputlimiter.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/uniform/jquery.uniform.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/fileinput/fileinput.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/validation/jquery.validate.min.js')?>"></script>
	<!-- Noty -->
	<script type="text/javascript" src="<?= base_url('assets/plugins/noty/jquery.noty.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/noty/layouts/top.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/noty/themes/default.js')?>"></script>
	<!-- Styled radio and checkboxes -->
	<!-- DataTables -->
	<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/DT_bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/responsive/datatables.responsive.js')?>"></script> <!-- optional -->

	<!-- App -->
	<script type="text/javascript" src="<?= base_url('assets/js/app.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins.form-components.js')?>"></script>
	<script>
	$(document).ready(function(){
		"use strict";
		App.init(); // Init layout and core plugins
		// Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>
	<script type="text/javascript" src="<?= base_url('assets/js/demo/form_validation.js')?>"></script>

	<script type="text/javascript">
    	window.base_url_js = "<?php echo base_url(); ?>";
    	
	</script>

</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="<?= base_url('assets/img/logo-header-hitam-putih.png')?>" alt="logo" style="width: 150px;   padding: 5px;"/>
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
				<li>
					<a href="http://localhost/blogs" target="_blink">
						Preview Live
						<i class="icon-external-link"></i>
					</a>
					
				</li>
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">5</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 5 new notifications</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">1 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-danger"><i class="icon-warning-sign"></i></span>
								<span class="message">High CPU load on cluster #2.</span>
								<span class="time">5 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">10 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								<span class="message">New items are in queue.</span>
								<span class="time">25 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-warning"><i class="icon-bolt"></i></span>
								<span class="message">Disk space to 85% full.</span>
								<span class="time">55 mins</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all notifications</a>
						</li>
					</ul>
				</li> -->

				<!-- Tasks -->
				<!-- <li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">7</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 7 pending tasks</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Preparing new release</span>
									<span class="percent">30%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 30%;" class="progress-bar progress-bar-info"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Change management</span>
									<span class="percent">80%</span>
								</span>
								<div class="progress progress-small progress-striped active">
									<div style="width: 80%;" class="progress-bar progress-bar-danger"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">60%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 60%;" class="progress-bar progress-bar-success"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">20%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 20%;" class="progress-bar progress-bar-warning"></div>
								</div>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all tasks</a>
						</li>
					</ul>
				</li> -->

				<!-- Messages -->
				<!-- <li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span class="badge">1</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 3 new messages</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="<?= base_url('assets/img/demo/avatar-1.jpg')?>" alt="" /></span>
								<span class="subject">
									<span class="from">Bob Carter</span>
									<span class="time">Just Now</span>
								</span>
								<span class="text">
									Consetetur sadipscing elitr...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="<?= base_url('assets/img/demo/avatar-2.jpg')?>" alt="" /></span>
								<span class="subject">
									<span class="from">Jane Doe</span>
									<span class="time">45 mins</span>
								</span>
								<span class="text">
									Sed diam nonumy...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="<?= base_url('assets/img/demo/avatar-3.jpg')?>" alt="" /></span>
								<span class="subject">
									<span class="from">Patrick Nilson</span>
									<span class="time">6 hours</span>
								</span>
								<span class="text">
									No sea takimata sanctus...
								</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all messages</a>
						</li>
					</ul>
				</li> -->

				<!-- .row .row-bg Toggler -->
				<!-- <li>
					<a href="#" class="dropdown-toggle row-bg-toggle">
						<i class="icon-resize-vertical"></i>
					</a>
				</li> -->

				<!-- Project Switcher Button -->
				<!-- <li class="dropdown">
					<a href="#" class="project-switcher-btn dropdown-toggle">
						<i class="icon-folder-open"></i>
						<span>Projects</span>
					</a>
				</li> -->

				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="<?= base_url('assets/img/avatar1_small.jpg')?>" />-->
						<i class="icon-male"></i>
						<span class="username">John Doe</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li class="current">
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
				</ul>
			</div> 
		</div> 
		<!-- /#project-switcher -->
	</header> <!-- /.header -->
	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">
				<div class="text-center" style="margin-top: 20px;">
					<img class="img-circle" src="<?= base_url('assets/img/demo/avatar-1.jpg')?>">
					<p><strong>John Doe</strong></p>
					<p>Admin</p>
				</div>
				
				<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="#">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>

					<li>
						<a href="<?=  base_url('about')?>">
							<i class="icon-globe"></i>
							About
						</a>
						
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Content
<!-- 							<span class="label label-info pull-right">6</span>
 -->						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?=  base_url('article')?>">
								<i class="icon-angle-right"></i>
								Article
								</a>
							</li>
							<li>
								<a href="<?=  base_url('category')?>">
								<i class="icon-angle-right"></i>
								Category
								</a>
							</li>
							<!-- <li>
								<a href="<?=  base_url('article')?>">
								<i class="icon-angle-right"></i>
								Media
								</a>
							</li>
							<li>
								<a href="<?=  base_url('article')?>">
								<i class="icon-angle-right"></i>
								Event
								</a>
							</li> -->
							
						</ul>
					</li>

					<li>
						<a href="<?= base_url('contact')?>">
							<i class="icon-book"></i>
							Contact
						</a>
						
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-user"></i>
							User
						</a>
						
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-cog"></i>
							Setting
						</a>
						
					</li>
					
						</ul>
					</li>
				</ul>
				
				<!-- /Navigation -->
				

				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<?= $content; ?>

	</div>

</body>
</html>