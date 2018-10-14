<?php 
	require_once 'class/common.class.php';
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
					<li class="active">Admin List</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Admin List</h1>
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
										<th data-field="name"  data-sortable="false">Name</th>
										<th data-field="username" data-sortable="true">Username</th>
										<th data-field="email" data-sortable="false">Email</th>
										<th data-field="phone" data-sortable="false">Phone</th>
										<th data-field="last_login" data-sortable="true">Last Login</th>
										<th data-field="status" data-sortable="false">Status</th>
										<th data-field="action" data-sortable="false">Action</th>
									</tr>
								</thead>
								<tbody>
							<?php 
								$admin= new admin;
								$data = $admin->selectuser();
								$n=1;
								foreach ($data as $value)
								 {?>
								 	<tr>
								 		<td></td>
								 		<td><?php echo $n; $n++; ?></td>
								 		<td><?php echo $value->name; ?></td>
								 		<td><?php echo $value->username; ?></td>
								 	    <td><?php echo $value->email;?></td>
								 	    <td><?php echo $value->phone;?></td>
								 	    <td><?php echo $value->last_login;?></td>
								 	    <td><?php 
								 	    if($value->status==1)
								 	    {
                                           echo "<button class='btn btn-primary'>Active</button>";
								 	    } 
								 	    else {
								 	    	echo "<button class='btn btn-danger'>Inactive</button>";
								 	    }
								 	    ?></td>
								 	    <td> <?php if($value->username ==$_SESSION['admin'])
													{
														echo "<a  class='btn btn-primary' href='update.php?id=".$value->id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='delete.php?id=".$value->id."'>Delete</a>";
													}
													else
													{
														echo "<a class='btn btn-danger' href='delete.php?id=".$value->id."'>Delete</a>";
													}
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
