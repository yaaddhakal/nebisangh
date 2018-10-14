
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$err=[];
if(isset($_POST['submit']))
{
	
	if(isset($_POST['username']) || !empty($_POST['username']) )
	{
		$this->admin->username = $this->admin->escapestring($_POST['username']);
	}
	else
	{
		$err[0]="Username can't be empty";
	}
	if(isset($_POST['password']) || !empty($_POST['password']) )
	{
		$password = $this->admin->escapestring($_POST['password']);
	}
	else
	{
		$err[1]="Password can't be empty";
	}
	if(count($err)==0)
	{
		$return=$this->admin->showadminbyusername();
		
		if(!$return)
		{
			$err[0]="Username doesn't match";
		}
		else
		{
			$salt=$return[0]->salt;
			$dpassword=$return[0]->password;
			$npassword=sha1($salt.$password);
			if($dpassword==$npassword)
			{
				sessionhelper::set('admin',$this->admin->username);
				sessionhelper::set('role',$return[0]->role);

			$tz = 'Asia/Kathmandu';
			$timestamp = time();
			$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
			$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
			$this->admin->last_login= $dt->format('Y.m.d H:i:s');
			
				$this->admin->updatelastlogin();
			echo header('location:'.base_url().'dashboard');

			}
			else
			{
				$err[0]="Password didn't match";
			}
		}
	}

}
?>
<!DOCTYPE HTML>

<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url().'view/css/bootstrap.min.css'?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(). 'view/css/style.css' ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'view/css/font-awesome.css'?>" rel="stylesheet"> 
<script src="<?php echo base_url().'view/js/jquery.min.js'?>"> </script>
<script src="<?php echo base_url().'view/js/bootstrap.min.js'?>"> </script>
</head>
<body>
	<div class="login">
		<h1><a>NSU LEC </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form method="post" action='<?php echo base_url(). "index"?>'>
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" name="username" placeholder="username" required="">
					
				</div>
				<div class="login-mail">
					<input type="password" name="password" placeholder="Password" required="">
					
					
				</div>
				   

			
			</div>
			<div class="col-md-6 login-do">
				<?php
					foreach($err as $e){
						echo $e;
					}
					?>
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="submit" value="login">
					</label>
					

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> Developed by Sanjok Gyawali and supported by Milan Khadka Sunar  </p>
            <p>Diploma In Computer Engineering Batch:2072</p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

