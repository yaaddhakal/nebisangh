<?php
    require_once 'class/common.class.php';
    require_once 'class/gallery.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
?>	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Post List</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Post List</h1>
				</div>
			</div><!--/.row-->		
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead>
									<tr>
										
										<th data-field="id" data-sortable="true">ID</th>
										<th data-field="title"  data-sortable="true">Title</th>
										
										<th data-field="image" data-sortable="false">Image</th>
										
										<th data-field="action" data-sortable="false">Action</th>
										
									</tr>
								</thead>
								<tbody>
							<?php
						    		$news =new gallery;
									$data = $news->selectgal();
									$n =1; 
									foreach ($data as  $value) { ?> 
									<tr>
										
										<td> <?php echo $n; $n++; ?> </td>
									<td> <?php echo $value->title ; ?> </td>
									
									<td> 
									 <img src=" images/<?php echo $value->image; ?> " width = "100" height ="50" >  </td>
									

									
									 <?php 
													
														 
														echo "<td><a class='btn btn-danger' href='deletegallery.php?id=".$value->id."'>Delete</a></td>";
													}
											?>
										</td>
									
											
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div><!--/.main-->
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap-table.js"></script>
		<script src="js/custom.js"></script>
		
	</body>
</html>