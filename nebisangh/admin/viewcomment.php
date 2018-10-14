<?php
    require_once 'class/common.class.php';
    require_once 'class/news.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $value=new news;
    if(isset($_GET['id']))
    {
    	$value->id=$_GET['id'];
    	$ret=$value->selectcommentbyid();
    }
?>	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Comments</h1>
	<?php
	foreach($ret as $r){
	 ?>
	
	<div class="comment_box" style="height:200px;width:100%;">
		
		<p style="font-size:40px;"><?php echo $r->name ?></p><br>
		<p style="font-size: 20px"><?php echo $r->email ?></p>
	<p><?php echo $r->comments ?></p>
<a href= "deletecomment.php?id=<?php echo $r->id ?>&&news_id=<?php echo $value->id ?>" class="btn btn-danger">Delete
		</a>		
	</div><?php } ?>
</div>
		
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