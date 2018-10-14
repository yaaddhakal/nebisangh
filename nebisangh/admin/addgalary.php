<?php
require_once 'class/common.class.php';
require_once 'class/gallery.class.php';
require_once 'class/session.class.php';
 sessionhelper::checklogin();
  require_once 'layout/header.php';
  $gal= new gallery;
  if(isset($_POST['submit']))
  {
  	$gal->title= $_POST['title'];
  	if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0)  
 		{
 			$iname=$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$iname);
 				$gal->image =$iname;
 				$ask=$gal->insertgallery();
 				if($ask)
 				{
 					echo "<script>alert('Insert image successfully')</script>";
 				}
 				else
 				{
 					echo "<script>alert('Insertion image was unsuccessfully')</script>";
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
					<li class="active">Add Gallery</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">News Details</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" role="form" enctype="multipart/form-data" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Title</label>
									<div class="col-md-10">
										<input type="text" name="title" class="form-control" placeholder="Enter a title">
									</div>
								</div>
								

								<div class="form-group">
									<label class="col-md-2 control-label">Image</label>
									<div class="col-md-10">
										<input  type="file" name="image">
									</div>
								</div>
								
								
								
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
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