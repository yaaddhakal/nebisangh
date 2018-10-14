<!DOCTYPE html>
<html>
	
<!-- Mirrored from medialoot.com/preview/lumino-premium/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 14:30:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TajaKhabar</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<script src="ckeditor/ckeditor.js"></script>
  <script src="ckeditor/adapters/jquery.js"></script>
		<!--Theme Switcher-->
		<style id="hide-theme">
			body{
				display:none;
			}
		</style>
		<script type="text/javascript">
			function setTheme(name){
				var theme = document.getElementById('theme-css');
				var style = 'css/theme-' + name + '.css';
				if(theme){
					theme.setAttribute('href', style);
				} else {
					var head = document.getElementsByTagName('head')[0];
					theme = document.createElement("link");
					theme.setAttribute('rel', 'stylesheet');
					theme.setAttribute('href', style);
					theme.setAttribute('id', 'theme-css');
					head.appendChild(theme);
				}
				window.localStorage.setItem('lumino-theme', name);
			}
			var selectedTheme = window.localStorage.getItem('lumino-theme');
			if(selectedTheme) {
				setTheme(selectedTheme);
			}
			window.setTimeout(function(){
					var el = document.getElementById('hide-theme');
					el.parentNode.removeChild(el);
				}, 5);
		</script>
		<!-- End Theme Switcher -->
		
		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>Tajakhabar</span>Admin</a>
					<ul class="nav navbar-top-links navbar-right">
						<!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-info">15</span>
						</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
										<img alt="image" class="img-circle" src="images/profile-pic-2.jpg" width="40">
										</a>
										<div class="message-body"><small class="pull-right">3 mins ago</small>
											<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
										<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
										<img alt="image" class="img-circle" src="images/profile-pic-1.jpg" width="40">
										</a>
										<div class="message-body"><small class="pull-right">1 hour ago</small>
											<a href="#">New message from <strong>Jane Doe</strong>.</a>
										<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a></div>
								</li> -->
					<!-- 		</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-bell"></em><span class="label label-primary">5</span>
						</a>
							<ul class="dropdown-menu dropdown-alerts"> -->
								<!-- <li><a href="#">
									<div><em class="fa fa-envelope"></em> 1 New Message
										<span class="pull-right text-muted small">3 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-heart"></em> 12 New Likes
										<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-user"></em> 5 New Followers
										<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li> -->
							</ul>
						</li>
					</ul>
					<ul class="navbar-right theme-switcher">
						
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="images/profile-pic-1.jpg" width="60" alt="User Avatar" class="img-circle" />
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name"><?php 
							
							sessionhelper::checklogin();
							$name = $_SESSION['admin'];
							echo $name;
							?></div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
			<form role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
			<ul class="nav menu">
				<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="addadmin.php"><em class="fa fa-table">&nbsp;</em> Add Admin</a></li>
				<li><a href="adminlist.php"><em class="fa fa-table">&nbsp;</em> Admin List</a></li>
				<li><a href="addcategory.php"><em class="fa fa-bar-chart">&nbsp;</em> Add Category</a></li>
				<li><a href="categorylist.php"><em class="fa fa-hand-pointer-o">&nbsp;</em> Category List</a></li>
				<li><a href="addnews.php"><em class="fa fa-pencil-square-o">&nbsp;</em> Add News</a></li>
				<li><a href="newslist.php"><em class="fa fa-table">&nbsp;</em> News List</a></li>
					<li><a href="addgalary.php"><em class="fa fa-pencil-square-o">&nbsp;</em> Add Gallery</a></li>
					<li><a href="gallerylist.php"><em class="fa fa-pencil-square-o">&nbsp;</em> Show Gallery</a></li>
				
					</ul>
				</li>
			</ul>
		</div><!--/.sidebar-->