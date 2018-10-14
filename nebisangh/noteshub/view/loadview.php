
<?php
$con=mysqli_connect('localhost','root','','db_notehub');
$output = '';
$query= $_POST['query']
$sql="select * from tbl_universities where name LIKE'".$query."%'";
$res = mysqli_query($con,$sql);
$output= '<ul class="list-unstyled">';
while($row=mysqli_fetch_assoc($res))
{
	$output .= '<li>'.$row["name"].'</li>';
}
$output .="</ul>";
echo $output;

?>