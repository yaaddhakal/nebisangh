<?php 
      require_once 'class/common.class.php';
	require_once 'class/category.class.php';
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
					<li class="active">Category List</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Category List</h1>
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
										<th data-field="state" data-checkbox="true" >ID</th>
										<th data-field="id" data-sortable="true">ID</th>
										<th data-field="name"  data-sortable="true">Category Name</th>
										<th data-field="createdby" data-sortable="true">Created By</th>
										<th data-field="createdat" data-sortable="true">Created At</th>
										<th data-field="modifiedby" data-sortable="true">Modified By</th>
										<th data-field="modifiedat" data-sortable="true">Modified At</th>
										<th data-field="status" data-sortable="false">Status</th>
										<th data-field="action" data-sortable="false">Action</th>
									</tr>
								</thead>
								<tbody>
							<?php 
								$category= new category;
								$data = $category->listcategory();
								$n=1;
								foreach ($data as $value)
								 {?>
								 	<tr>
								 		<td></td>
								 		<td><?php echo $n; $n++; ?></td>
								 		<td><?php echo $value->category_name; ?></td>
								 		<td><?php echo $value->created_by; ?></td>
								 	    <td><?php echo $value->created_at;?></td>
								 	    <td><?php echo $value->modified_by;?></td>
								 	    <td><?php echo $value->modifed_at;?></td>
								 	    <td><?php 
								 	    if($value->status==1)
								 	    {
                                           echo "<button class='btn btn-primary'>Active</button>";
								 	    } 
								 	    else
								 	    {
								 	    	echo "<button class='btn btn-danger'>Inactive</button>";
								 	    }
								 	    ?></td>
								 	    <td> <?php 
								 	    	echo "<a  class='btn btn-primary' href='updatecategory.php?id=".$value->id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='deletecategory.php?id=".$value->id."'>Delete</a>";
													
												
											?>
										</td>
									</tr>
									<?php	
								}
							 ?>
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
