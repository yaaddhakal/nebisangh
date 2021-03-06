<?php 
require_once 'class/common.class.php';
require_once 'class/category.class.php';
require_once 'class/session.class.php';
 sessionhelper::checklogin();
  require_once 'layout/header.php';
	$category=new category;
	$err=[];
	if(isset($_POST['submit']))
	{
		if(isset($_POST['catname'])&& !empty($_POST['catname']))
		{
			$category->name = $_POST['catname'];
		}
		else
		{
			$err[0]="Category Field cannot be empty";
		}
		if(isset($_POST['status']))
		{
			$category->status= $_POST['status'];
		}
		else
		{
			$err[4]="default status will be Inactive";
		}
		if(count($err)==0)
		{
			$category->created_by = $_SESSION['username'];
			$date=date('Y-m-d H:i:s');
			$category->created_at = $date;
			$ask =$category->addcategory();
			if($ask==1)
			{
				echo "<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<script>alert('Failed to insert')</script>";
			}
		}
	}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ADD CATEGORY</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">CATEGORY</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST">
							
								<div class="form-group">
									<label>Category Name</label>
									<input class="form-control" placeholder="Category Name" name="catname">
								</div>
									
								
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="form-group">
									<label class="col-md-2 control-label" style="font-size: 1.7em;margin-top: 19px;">Status</label>
									<div class="col-md-10">
									</div>
								</div>
								<div class="col-md-3 col-sm-3" style="width: 35%;">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosX" value="1">
										</span>
										<input type="text" style="color:black;" class="form-control btn-success" value="Active" readonly="">
									</div>
								</div>
								<div class="col-md-3 col-sm-3" style="width: 35%;">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosY" value="0" checked="">
										</span>
										<input type="text" style="color:black;" class="form-control btn-danger" value="Inactive" readonly="">
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
				<p class="back-link">Powered By<a href="#"> Sandip Aryal</a></p>
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
