 
<?php
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['name'])&& !empty($_POST['name'])){
     $this->uni->name= $this->uni->escapestring($_POST['name']);
  }
  else
  {
    $err[0]="Please insert name of university";
  }
  if(isset($_POST['name'])&& !empty($_POST['name'])){
     $this->uni->headquater_city= $this->uni->escapestring($_POST['head']);
  }
  else
  {
    $err[1]="Please insert name of university";
  }
  if(count($err)==0)
  {
   $this->uni->created_by = $_SESSION['admin'];
  $tz = 'Asia/Kathmandu';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
      $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
      $this->uni->created_at= $dt->format('Y.m.d H:i:s');
      $return = $this->uni->insertuniversity();
      if($return)
      {
        echo "<script> alert('Inserted Successfully')</script>";
      }
      else
      {
         echo "<script> alert('Insertion was Unsuccessfully')</script>";
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
  	    
        <form method="post" action="<?php echo base_url().'adduniversity' ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">University Name</label>
              <input type="text" name="name" placeholder="University Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">HeadQuater City</label>
              <input type="text" name="head" placeholder="HeadQuater City" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            
              
             
            
             
            
             
            
             
           
            
             
             
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

