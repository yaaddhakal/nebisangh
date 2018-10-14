<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="jquery.js"></script>
</head>
<body>
<input type="text"  name="uni" class="form-control" id="uni">
<div id="university"></div>
</body>
</html>
<script>
	$($document).ready(function(){
		$('#uni').keyup(function(){
			var query = $(this).val();
			if(query != '')
			{
				$.ajax({
					url:"loadview.php",
					method:"POST",
					data:{query:query},
					success:function(data){
						$('#university').fadeIn();
						$('#university').html(data);
				}
				});
			}

		});
	});
</script>