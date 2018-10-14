<?php
require_once 'db_connect.php';
$output="<option> Select Faculty </option>";
if(isset($_POST['level_id']))
{
	if($_POST['level_id'] != '')
	{
		$level_id = $_POST['level_id'];
		$sql = "select * from tbl_faculty where level_id='$level_id'";
		

		$res= mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
	while ($row= mysqli_fetch_assoc($res)) {
		$output .="<option value='".$row['id']."'>".$row['faculty_name']."</option>";
	}
	
	}
	
} 
	
	echo $output;
}

?>