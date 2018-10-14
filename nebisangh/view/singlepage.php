
<!-- banner -->
<?php
$err=[];
if(isset($_POST['submit']))
{
	
	if(isset($_POST['comment']) && !empty($_POST['comment']))
	{

	$this->com->comment = $_POST['comment'];	
	}
	else
	{

		$err[0]="Please insert comment";
	}
	if(isset($_POST['name']) && !empty($_POST['name']))
	{
		
	$this->com->name = $_POST['name'];
	}
	else
	{
		$err[1]="Please insert name";
	}
	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		
	$this->com->email = $_POST['email'];
	}
	else
	{
		$err[2]="Please insert email";
	}
	if(count($err)==0)
	{
		
		$ids= $this->newswithid[0]->id;
	$return= $this->com->insertcomment($ids);
	if($return)
	{
		echo "<script> alert('Thank you for comment')</script>";
		?>
		<script>
			window.location.href='<?php echo base_url()."single/$ids" ?>';
		</script>
		
<?php 	}
	else
	{
		echo "<script> alert('Sorry because of technical problem comment can/'t be inserted')</script>";
		
	}	
	}
	}
?>


	<!DOCTYPE HTML>
<html>
<head>
<title>News Nepal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<meta property="og:title" content="<?php echo $this->newswithid[0]->title ?>">
<meta property="og:description" content="<?php echo $this->newswithid[0]->short_desc ?>">
<?php
if($this->newswithid[0]->image != NULL){
echo "<meta property='og:image' content='".base_url()."admin/images".$this->newswithid[0]->image."'>"; 	
}
else
{
echo "<meta property='og:image' content='".base_url()."admin/images/random.jpg'>";	
}
?>


<link href="<?php echo base_url().'view/css/bootstrap.css'?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url().'view/css/style.css' ?>" rel='stylesheet' type='text/css' />	
<script src="<?php echo base_url().'view/js/jquery-1.11.1.min.js' ?>"></script>
<script src="<?php echo base_url().'view/js/bootstrap.min.js'?>"></script>
<!-- animation-effect -->
<link href="<?php echo base_url().'view/css/animate.min.css'?>" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<div class="header" id="ban">
		<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<!-- <div class="header-search">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Search...">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
				</div> -->
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li><img src="<?php echo base_url().'admin/images/s1.jpg' ?>" height="40%" width="40%"></li>
							<li class="active act"><a href="<?php echo base_url().'home' ?>">Home</a></li>
							<?php

			foreach ($this->categoryname as $c) {
			 	$cat=$c;
				?>
				<li class="active act"><a href='<?php echo base_url()."$cat->category_name" ?>'><?php echo $cat->category_name; ?></a></li>
								
							<?php }
							?>
							
							<li class="active act"><a href="<?php echo base_url().'gallery' ?>">Gallery</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					
				</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php">Nepal Student Union</a></h1>
				<p>Lumbini Engineering, Management and Science College</p>
			</div>
		</div>
	</div>
	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		
		<div class="col-md-9 technology-left">
			<div class="agileinfo">
				<?php foreach ($this->newswithid as $n) {
	# code...
 ?>
		 
			<div class="single">
				<?php 
				if($n->image!=NULL)
				{
				?>
			   <img src="<?php echo base_url().'admin/images/'.$n->image ?>" class="img-responsive">
			   <?php }
			   else{
			    ?>
			   <img src="<?php echo base_url().'admin/images/random.jpg' ?>" class="img-responsive">
			   <?php } ?>
			    <div class="b-bottom"> 
			      <h5 class="top"><?php echo $n->title; ?></h5>
				   <p class="sub"><?php echo $n->long_desc ?></p>
				 
				</div>
			 </div>
			  
			 <?php } ?>
			 

			 <div class="col-md-12">
			 	Comments
			 	<?php
			 	foreach ($this->allcom as $a) {
			 		# code...
			 	
			 	echo "
			 	<h4>Name<b>$a->name</b></h4>
			 	<p>$a->comments</p>"; } ?>
			 </div>
			 <div class="clearfix">
			 </div>
			<h3 style="margin-top: 20px;">Enter your Comments here.</h3><br>
			 <div class="col-md-12" style="margin:auto;">
			 	<form method="post" action='<?php echo base_url(). "single/$n->id" ?>'>
			 <input type="text" name="name" placeholder="Enter your Name" style="height:40px;width:80%;text-align:center;margin-top:10px;"><br><?php 
			 if(array_key_exists(1,$err))
			 {
			 	echo $err[1];
			 }
			  ?>
			 <input type="email" name="email" placeholder="Enter your Email" style="height:40px;width:80%;text-align:center;margin-top:10px;"><br>
			 <?php 
			 if(array_key_exists(2, $err))
			 {
			 	echo $err[2];
			 }
			  ?>
			 <br>
             <textarea name="comment" style="height: 120px;width:80%;margin:auto;margin-top:10px;" placeholder="Enter comment here"></textarea>
             <?php 
			 if(array_key_exists(3, $err))
			 {
			 	echo $err[3];
			 }
			  ?>
             <input type="submit" name="submit" value="Submit" style="height: 50px;width:150px;background-color: #f74b2a;color:white;">
			 </div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="tech-btm">
					
					<h4>Popular Posts </h4>
					<?php
					foreach ($this->latestpost as $lat) {
					 	
					 
					?>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href='<?php echo base_url()."single/$lat->id" ?>'>
									<?php 
									if($lat->image!=NULL){
									?>
									<img src="<?php echo base_url().'admin/images/'.$lat->image ?>" class="img-responsive" alt="">
									<?php }
									else{
									 ?>
									 <img src="<?php echo base_url().'admin/images/random.jpg' ?>" class="img-responsive" alt="">
									<?php } ?>
								</a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href='<?php echo base_url()."single/$f->id" ?>'><?php echo $lat->title ?></a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div><?php } ?>
					</div>
						
						
					
					
												<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<?php
require_once 'layout/footer.php';
?>