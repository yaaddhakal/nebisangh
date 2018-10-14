<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Admin List</h1>
				</div>
			</div>

       	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Basic Table</div> -->
					<div class="panel-body"> 
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" border="2">
       <thead>
       		<tr>

       			<th data-field="sn">S.N</th>
       			<th data-field="name"> Name</th>
       			<th data-field="email"> Email</th>
       			<th data-field="phone"> Phone </th>
       			<th data-field="username">Username</th>
       			<th data-field="role">Role</th>
       			<th data-field="last_login">Last Login</th>
       			<th data-field="action">Action</th>
       		</tr></thead>
       		<?php
       		$n=0;
       		foreach ($this->admins as $ad) {
       			$n++;
       			echo "<tr><td>$n</td>";
       			echo "<td>$ad->name</td>";
       			echo "<td>$ad->email</td>";
       			echo "<td>$ad->phone</td>";
       			echo "<td> $ad->username </td>";
       			echo "<td> $ad->role </td>";
       			echo "<td>$ad->last_login</td>";
       			if($_SESSION['role']=='SuperAdmin' || $_SESSION['admin']==$ad->username)
       			{
       				echo "<td><a href='".base_url()."update/$ad->id' class='btn btn-primary'>Update</a><a href='".base_url()."delete/$ad->id'' class='btn btn-danger'>Delete </a></td>";
       			}
       			else
       			{
       				
       				echo "<td>No permission</td>";
       			}
       		}
       		?>
       	</table>
       </div>
   </div>
</div>
</div>
</div>
</div>
