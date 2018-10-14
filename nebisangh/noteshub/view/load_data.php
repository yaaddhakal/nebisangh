<?php
require_once 'db_connect.php';
$output="<option> Choose Level </option>";
if(isset($_POST['university_id']))
{
	if($_POST['university_id'] != '')
	{
		$uni_id = $_POST['university_id'];
		$sql = "select * from tbl_level where university_id='$uni_id'";
		

		$res= mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
	while ($row= mysqli_fetch_assoc($res)) {
		$output .="<option value='".$row['id']."'>".$row['level_name']."</option>";
	}
	
	}
	
} 
	
	echo $output;
}

?>