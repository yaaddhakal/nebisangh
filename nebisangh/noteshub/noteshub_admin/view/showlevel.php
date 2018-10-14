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
       			<th data-field="uniname">Level Name</th>
       			<th data-field="head"> University Name</th>
       			<th data-field="createdby"> Created By </th>
       			<th data-field="createdat">Created At</th>
       			
       			<th data-field="action">Action</th>
       		</tr></thead>
       		<?php
       		$n=0;
       		foreach ($this->showlevel as $ad) {
       			$n++;
                            $unic=$this->uni->selectleveluni($ad->university_id);
                            $unid=$unic[0]->name;
       			echo "<tr><td>$n</td>";
       			echo "<td>$ad->level_name</td>";
       			echo "<td>$unid</td>";
       			echo "<td>$ad->created_by</td>";
       			echo "<td> $ad->created_at </td>";
       			
       			if($_SESSION['role']=='SuperAdmin' || $_SESSION['admin']==$ad->created_by)
       			{
       				echo "<td><a href='".base_url()."updatelevel/$ad->id' class='btn btn-primary'>Update</a><a href='".base_url()."deletelevel/$ad->id'' class='btn btn-danger'>Delete </a></td>";
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
