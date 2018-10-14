<?php 
require_once 'class/common.class.php';
require_once 'class/news.class.php';
require_once 'class/category.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'layout/header.php';
$news= new news;
$error=[];

if(isset($_POST['submit']))
 {
 	if(isset($_POST['title'])&& !empty($_POST['title']))
	{
		$title= $news->escapestring($_POST['title']);
	}
	else
	{ 
		$error[0]="Title Must Be Provided.";
	}


	if(isset($_POST['category'])&& !empty($_POST['category']))
	{
		$category_name= $_POST['category'];
	}
	else
	{
		$error[1]="Category Name Must Be Selected.";
	}


	if(isset($_POST['shortdesc'])) 
	{
		$short_desc=$_POST['shortdesc'];
	}

 	
 	if(isset($_POST['description'])&& !empty($_POST['description']))	
 	{
 		$long_desc= $_POST['description'];
 	}
 	else
 	{
 		$error[2]="Description must be provided.";
 	}


 	if(isset($_POST['status']))  
 	{
 		$status=$_POST['status'];
 	}


 	if(count($error)==0)
 	{
 		$news->title =$title;
 		$news->category=$category_name;
 		$news->short_desc=$short_desc;
 		$news->description=$long_desc;
 		$news->status=$status;
 		$news->created_by =$_SESSION['username'];
 		$date=date('Y-m-d H:i:s');
 		$news->created_at=$date;
 		if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0)  
 		{
 			$iname=$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$iname);
 				$news->image =$iname;
 				$ask=$news->insertnews();
 			}
 		else
 		{
 			$ask=$news->insertwithoutimg();
 		}

 		if($ask==1)
 		{
 			echo "<script> alert('Inserted successfully.')</script>";
 		}
 		else
 		{
 			echo "<script> alert('Failed to insert.')</script>";
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
					<li class="active">Add News</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">News Insertion</h1>
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
									<label class="col-md-2 control-label">Category</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="category">
								  <?php
                                    $category=new category;
                                    $data = $category->listcategory();
                                    foreach ($data as  $value) {
                                    ?>
                                             <option><?php echo $value->category_name; ?> </option>
                                     <?php } ?>
							</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Image</label>
									<div class="col-md-10">
										<input  type="file" name="image">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Short Desc</label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="shortdesc" placeholder="Enter short description ....">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Description</label>
									<div class="col-md-10">
									<textarea class="form-control ckeditor" id="content" name="description"></textarea>

									</div>
								</div>
								<div class="row">
								<div class="form-group">
									
									<label class=" col-md-2 control-label" style="font-size: 1.3em;margin-top: 29px;">Status</label>
								
								<div class="col-md-10">
									</div>
								<div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosX" value="1">
										</span>
										<input type="text" style="color:black;" class="form-control btn-success" value="Active" readonly="">
									</div>
								</div>
								<div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
									<div class="input-group"><span class="input-group-addon">
										<input type="radio" name="status" id="optionsRadiosY" value="0" checked="">
										</span>
										<input type="text" style="color:black;" class="form-control btn-danger" value="Inactive" readonly="">
									</div>
								</div>
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
