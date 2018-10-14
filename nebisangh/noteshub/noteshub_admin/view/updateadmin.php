
<?php
if($this->showadminbyid==NULL)
{
   echo "<script>window.location='".base_url()."showadmin'</script>";
}
if($this->showadminbyid[0]->username != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showadmin'</script>";
}
$err=[];
if(isset($_POST['submit']))
{
  
 
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
    if(isset($_POST['password'])&& !empty($_POST['password'])&& isset($_POST['rpass'])&& !empty($_POST['rpass']))
  {
    if($_POST['password']==$_POST['rpass'])
    {
    $password= $this->admin->escapestring($_POST['password']);
    $this->admin->salt=uniqid();
    
    $this->admin->password=sha1($this->admin->salt.$password);
   $return= $this->admin->updatewithpass($this->showadminbyid[0]->id);
  }
  else
  {
    $err[1]="Password and Repeated Password didn't matched";
  }
  }
  else{
    $return=$this->admin->updatewithoutpass($this->showadminbyid[0]->id);
 
  }
    
       if($return==true)
    {
      echo "<script>alert('Update of Admin is Successfull')</script>";
      echo "<script> window.location='".base_url()."update/".$this->showadminbyid[0]->id."'</script>";
    }
    elseif($return=='Duplicate')
    {
echo "<script>alert('Duplicate entry')</script>"; 
echo "<script> window.location='".base_url()."update/".$this->showadminbyid[0]->id."'</script>";
    }
    else
    {
     echo "<script>alert('Update of Admin is Unsuccessfull')</script>"; 
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
  	    
        <form method="post" action="<?php echo base_url().'update/'.$this->showadminbyid[0]->id ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $this->showadminbyid[0]->name ?>" placeholder="Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Username</label>
              <input type="text" name="username" value="<?php echo $this->showadminbyid[0]->username ?>" placeholder="Username" disabled required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="email" value="<?php echo $this->showadminbyid[0]->email ?>" name="email" placeholder="Email" required="">
            </div>
             <div class="clearfix"> </div>
            
              
             
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" name="phone" value="<?php echo $this->showadminbyid[0]->phone ?>" placeholder="Phone Number" required="">
            </div>
           
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="password" placeholder="Create a password" >
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" name="rpass" placeholder="Repeated password">
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

