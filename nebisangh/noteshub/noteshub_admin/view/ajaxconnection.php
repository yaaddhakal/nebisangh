<?php
$con = mysqli_connect('localhost','root','','db_notehub');
function showuni($con)
{
	$output = '';
	$sql="select * from tbl_universities";
	$res= mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($res))
	{
		$output .= "<option value='".$row["name"]."''>".$row["name"]."</option>";
	}
	return $output;
}
function showlevel($con)
{
	$output = '';
	$sql = "select * from tbl_level";
	$res= mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($res))
	{
		$output .= "<option>".$row["level_name"]."</option>";
	}
	return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script src="jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
</head>
<body>
<select name="uni" id="uni">
	<option>Select University </option>
	<?php
	echo showuni($con);
	 ?>
</select>
<select name="level" id="level">
	<option> Select Level </option>

</select>
</body>
</html>
<!-- <script>
	$(document).ready(function(){
		$('#uni').change(function(){
			var university_name = $(this).val(#uni);
			$.ajax({
				url:"load_data.php",
				method:"POST",
				data:{university_name:university_name},
				success:function(data){
				$('#level').html(data);
			}
			});
		});
	});
</script> -->
<script>
	$(document).ready(function(){
		$('#uni').change(function(){
			var university_name = $(this).val();
			$.ajax({
				url:"load_data.php",
				method:"POST",
				data:{university_name:university_name},
				dataType:"text",
				success:function(data)
				{
					$('#level').html(data);
				}
			});
		});
	});

</script>