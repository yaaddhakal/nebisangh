<?php
require_once 'db_connect.php';
$output="<option> Select Semester </option>";
if(isset($_POST['faculty_id']))
{
	if($_POST['faculty_id'] != '')
	{
		$faculty_id = $_POST['faculty_id'];
		$sql = "select * from tbl_semesteroryear where faculty_id='$faculty_id'";
		

		$res= mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
	while ($row= mysqli_fetch_assoc($res)) {
		$output .="<option value='".$row['id']."'>".$row['sem_name']."</option>";
	}
	
	}
	
} 
	
	echo $output;
}

?>