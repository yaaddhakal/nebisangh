<?php 
	require_once 'class/common.class.php';
	require_once 'class/admin.class.php';
	require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
	$admin=new admin;
	$err=[];
	if(isset($_POST['submit']))
	{
		if(isset($_POST['name'])&& !empty($_POST['name']))
		{
			$admin->name = $_POST['name'];
		}
		else
		{
			$err[0]="Name Field cannot be empty";
		}
		if (isset($_POST['username'])&& !empty($_POST['username']))
		 {
			$admin->username= $_POST['username'];
		}
		else
		{
			$err[1]="Username must be Entered";
		}
		if (isset($_POST['email'])&& !empty($_POST['email']))
		 {
			$admin->email= $_POST['email'];
		
		}
		else
		{
			$err[2]="Email must be entered";
		}
		if(isset($_POST['password'])&& !empty($_POST['password']))
		{
			$password= $_POST['password'];
		}
		else
		{
			$err[3]="Password cannot be empty";
		}
		if(isset($_POST['status']))
		{
			$admin->status= $_POST['status'];
		}
		else
		{
			$err[4]="default status will be Inactive";
		}
		if(isset($_POST['phone'])&& !empty($_POST['phone']))
		{
			$admin->phone= $_POST['phone'];
		}
		else
		{
			$err[5]="Phone number should be inserted";
		}
		if(count($err)==0)
		{
			$admin->salt = uniqid();
			$admin->password= sha1($admin->salt.$password);
			$ask =$admin->insertuser();
			if($ask==1)
			{
				echo "<<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<<script>alert('Failed to insert')</script>";
			}
		}
	}
 ?>	
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Add Admin</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add Admin</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Admin Details</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Name</label>
									<div class="col-md-10">
										<input type="text" name="name" class="form-control" placeholder="Enter your name">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Username</label>
									<div class="col-md-10">
										<input type="text" name="username" class="form-control" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Password</label>
									<div class="col-md-10">
										<input class="form-control" type="password" name="password" placeholder="XXXXXXXX">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Email</label>
									<div class="col-md-10">
										<input class="form-control" type="email" name="email" placeholder="example@login.info">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Phone</label>
									<div class="col-md-10">
										<input type="text" name="phone" class="form-control" placeholder="XXXXXXXXXX">
									</div>
								</div>


			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3 col-sm-3">	
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosX" value="1">
										</span>
										<input type="text" style="color:black" class="form-control btn-success" value="Active" readonly="">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosY" value="0" checked="">
										</span>
										<input type="text" style="color:black"class="form-control btn-danger" value="Inactive" readonly="">
									</div>
								</div>
							</div>
							<div class="row" style="margin-top: 2em;">
					<div class="col-md-2 col-sm-2">	
								</div>
						<div class="col-sm-9">
					<div class="panel panel-default">
							<button type="submit" class="btn btn-primary btn-lg" title="" name="submit" style="width: 7em;height: 2.5em;font-size: 18px;">Submit</button>
						</div>
					</div>
				</div>
	

						</div>
					</div>
				</div>
			</div><!--/.row-->
			<div class="col-sm-12">
				<p class="back-link">Powered By<a href="#"> Sandip Pokhrel</a></p>
			</div>
						</form>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!--/.main-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		
	</body>
</html>
