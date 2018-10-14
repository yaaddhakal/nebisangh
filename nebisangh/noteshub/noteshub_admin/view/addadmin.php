
<?php
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['username'])&& !empty($_POST['username']))
  {
    $this->admin->username= $this->admin->escapestring($_POST['username']);
  }
  else
  {
    $err[0]="Please insert username";
  }
  if(isset($_POST['password'])&& !empty($_POST['password'])&& isset($_POST['rpass'])&& !empty($_POST['rpass']))
  {
    if($_POST['password']==$_POST['rpass'])
    {
    $password= $this->admin->escapestring($_POST['password']);
  }
  else
  {
    $err[1]="Password and Repeated Password didn't matched";
  }
  }
  else
  {
    $err[1]="Please insert password";
  }
  if(isset($_POST['email'])&& !empty($_POST['email']))
  {
    $this->admin->email= $this->admin->escapestring($_POST['email']);
  }
  else
  {
    $err[2]="Please insert email";
  }
 if(isset($_POST['name'])&& !empty($_POST['name']))
  {
    $this->admin->name= $this->admin->escapestring($_POST['name']);
  }
  else
  {
    $err[1]="Please insert name";
  }
  if(isset($_POST['phone'])&& !empty($_POST['phone']))
  {
    $this->admin->phone= $this->admin->escapestring($_POST['phone']);
  }
  else
  {
    $err[1]="Please insert phone";
  }
  if(count($err)==0)
  {
    $this->admin->salt=uniqid();
    $this->admin->role="Moderator";
    $this->admin->password=sha1($this->admin->salt.$password);
    $return=$this->admin->insertuser();
    if($return)
    {
      echo "<script>alert('Creation of Admin is Successfull')</script>";
    }
    else
    {
     echo "<script>alert('Creation of Admin is Unsuccessfull')</script>"; 
    }
  }

}
?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
        <?php
        foreach ($err as $e) {
          echo $e;
        }
        ?>
 
 	<!--banner-->	
		   <!-- <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div> -->
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="<?php echo base_url().'adduser' ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Username</label>
              <input type="text" name="username" placeholder="Username" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-6 form-group1 group-mail >
              <label class="control-label">Email</label>
              <input type="email" name="email" placeholder="Email" required="" >
            </div>
             <div class="clearfix"> </div>
            
              
             
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" name="phone" placeholder="Phone Number" required="">
            </div>
           
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="password" placeholder="Create a password" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" name="rpass" placeholder="Repeated password" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
             <div class="clearfix"> </div>
           
            
             
             
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

