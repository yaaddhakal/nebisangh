<?php
	require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    
    
    $admin = new admin;
     		
    	$admin->id = $_GET['id'];
			
				if(isset($_POST['submit']))
    			{
			    	
			    	$admin->name = $_POST['name'];
			    	$admin->username = $_POST['username'];
			    	$admin->email = $_POST['email'];
			    	$admin->phone=$_POST['phone'];
			    	$admin->status=$_POST['status'];
			    	if (isset($_POST['password'])&& !empty($_POST['password']))
			    	{
			    		$password = $_POST['password'];
			    		$salt = uniqid();
			    		$admin->salt = $salt;
			    		$admin->password = sha1($admin->salt.$password);
			    		$ask = $admin->updateadminwithpassword();
			    	}
			    	else
			    	{
			    		
			    		$ask = $admin->updateadmin();
			    	}
			    	if($ask==="Duplicate")
			    	{
			    		echo "<script>alert('Duplicate Entry')</script>";
			    	}
			    	else if($ask)
			    	{
			    		echo "<script>alert('Updated Sucessfully')</script>";
			    	}
			    	else
			    	{
			    		echo "<script>alert('Update Unsucessfully')</script>";
			    	}
	    		
	    	
   
    }
    $data = $admin->selectadminbyid();
    foreach ($data as $value) {
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
										<input type="text" name="name" class="form-control" value="<?php echo $value->name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Username</label>
									<div class="col-md-10">
										<input type="text" name="username" class="form-control" value="<?php echo $value->username; ?>">
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
										<input class="form-control" type="email" name="email" value="<?php echo $value->email; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Phone</label>
									<div class="col-md-10">
										<input type="text" name="phone" class="form-control" value="<?php echo $value->phone; ?>">
									</div>
								</div>


			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3 col-sm-3">	
								</div>
								<?php if($value->status==1) {?>
								<div class="col-md-3 col-sm-3">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosX" value="1" checked="">
										</span>
										<input type="text" style="color:black" class="form-control btn-success" value="Active" readonly="">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosY" value="0" >
										</span>
										<input type="text" style="color:black"class="form-control btn-danger" value="Inactive" readonly="">
									</div>
								</div>
								<?php }
								else { ?>
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
								<?php } ?>
							</div>
							<div class="row" style="margin-top: 2em;">
					<div class="col-md-2 col-sm-2">	
								</div>
						<div class="col-sm-9">
					<div class="panel panel-default">
							<button type="submit" class="btn btn-primary btn-lg" title="" name="submit" style="width: 7em;height: 2.5em;font-size: 18px;">Submit</button>
						</div>
						<?php  } ?>
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
