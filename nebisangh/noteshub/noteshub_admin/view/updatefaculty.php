<?php
if($this->facultybyid==NULL)
{
   echo "<script>window.location='".base_url()."showfaculty'</script>";
}

if($this->facultybyid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showfaculty'</script>";
}
?>

<?php
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['name'])&& !empty($_POST['name']))
  {
    $this->faculty->name=$this->level->escapestring($_POST['name']);
  }
  else
  {
    $err[0]="Please insert level name";
  }
  if($_POST['uni']!='Choose University')
  {
    $this->faculty->universities=$this->level->escapestring($_POST['uni']);
    $this->faculty->level = $this->faculty->escapestring($_POST['level']);
  }
  else
  {
    $err[1]="Please select university";
  }
  if(count($err)==0)
  {
    $this->faculty->created_by = $_SESSION['admin'];
  $tz = 'Asia/Kathmandu';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
      $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
      $this->faculty->created_at= $dt->format('Y.m.d H:i:s');
      $return = $this->faculty->updatefaculty($this->facultybyid[0]->id);
      if($return)
      {
        echo "<script> alert('Updated Successfully')</script>";
        echo "<script> window.location='".base_url()."updatefaculty/".$this->facultybyid[0]->id."'</script>";
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
  	    
        <form method="post" action="<?php echo base_url().'updatefaculty/'.$this->facultybyid[0]->id ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Faculty Name</label>
              <input type="text" name="name" value="<?php echo $this->facultybyid[0]->faculty_name ?>" placeholder="Example Computer Engineering" required="">
            </div>
            <div class="col-md-6">
              <label class="control-label">Universities</label><br><br>
           
              <select name="uni" id="uni" class="form-control1"  style="background-color:#fff">
                <option value="<?php echo $this->facultybyid[0]->university_id ?>"><?php echo $this->uniname[0]->name ?></option>
                <?php

                foreach ($this->university as $s) {

                 echo "<option value='$s->id'>$s->name</option>";
                }
                ?>
                
              </select>
               <div class="col-md-12">
              <label class="control-label">Level Name</label>
             
            
              <select class="form-control1" name="level" id="level" style="background-color:#fff">
                <option value='<?php echo $this->facultybyid[0]->level_id ?>'><?php echo $this->levelname[0]->level_name ?></option>
              </select></div>
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
	<script src="<?php echo base_url(). 'js/jquery.nicescroll.js'?>"></script>
	<script src="<?php echo base_url(). 'js/scripts.js'?>"></script>
	<!--//scrolling js-->
  <script>
  $(document).ready(function(){
    $('#uni').change(function(){
      var university_id = $(this).val();
      $.ajax({
        url:"../view/load_data.php",
        method:"POST",
        data:{university_id:university_id},
        dataType:"text",
        success:function(data)
        {
          $('#level').html(data);
        }
      });
    });
  });

</script>
</body>
</html>

