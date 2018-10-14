
<?php
if($this->selectlevelbyid==NULL)
{
   echo "<script>window.location='".base_url()."showlevel'</script>";
}

if($this->selectlevelbyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showlevel'</script>";
}
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['name'])&& !empty($_POST['name']))
  {
    $this->level->name=$this->level->escapestring($_POST['name']);
  }
  else
  {
    $err[0]="Please insert level name";
  }
  if(isset($_POST['uni'])&& !empty($_POST['uni']))
  {
    $this->level->universities=$this->level->escapestring($_POST['uni']);
  }
  else
  {
    $err[1]="Please select university";
  }
  if(count($err)==0)
  {
    $this->level->created_by = $_SESSION['admin'];
  $tz = 'Asia/Kathmandu';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
      $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
      $this->level->created_at= $dt->format('Y.m.d H:i:s');
      $return = $this->level->updatelevel($this->selectlevelbyid[0]->id);
      if($return)
      {
        echo "<script> alert('Updated Successfully')</script>";
         echo "<script> window.location='".base_url()."updatelevel/".$this->selectlevelbyid[0]->id."'</script>";
      }
      else
      {
         echo "<script> alert('Updation was Unsuccessfully')</script>";
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
  	    
        <form method="post" action="<?php echo base_url().'updatelevel/'.$this->selectlevelbyid[0]->id ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Level Name</label>
              <input type="text" name="name" value="<?php echo $this->selectlevelbyid[0]->level_name ?>" placeholder="Example Bachlore" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Universities</label><br><br>
              <select name="uni" style="height:35px;width:300px;margin-top:-1em;">
                <?php 
               $ret=  $this->uni->selectleveluni($this->selectlevelbyid[0]->university_id);
                echo "<option value='$this->selectlevelbyid[0]->university_id'>".$ret[0]->name."</option>";
                foreach ($this->showuni as $s) {
                  
                  if($ret[0]->name!=$s->name){
                 echo "<option value='$s->id'>$s->name</option>";
               }
                }
                ?>
                
              </select>
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

