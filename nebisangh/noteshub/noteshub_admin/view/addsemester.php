
<?php
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['name'])&& !empty($_POST['name']))
  {
    $this->semester->semester_name=$this->level->escapestring($_POST['name']);
  }
  else
  {
    $err[0]="Please insert level name";
  }
  if($_POST['uni']!='Choose University')
  {
    $this->semester->university = $this->level->escapestring($_POST['uni']);
    if($_POST['level']!='Choose Level'){
    $this->semester->level = $this->semester->escapestring($_POST['level']);
  }
  else
  {
    $err[1]="Please select Level";
  }
  if($_POST['faculty']!='Select Faculty'){
    $this->semester->faculty = $this->semester->escapestring($_POST['faculty']);
  }
  else
  {
    $err[2]="Please select faculty";
  }
  }
  else
  {
    $err[1]="Please select university";
  }
  if(count($err)==0)
  {
    $this->semester->created_by = $_SESSION['admin'];
  $tz = 'Asia/Kathmandu';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
      $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
      $this->semester->created_at= $dt->format('Y.m.d H:i:s');
      $return = $this->semester->insertsemester();
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
<!--  	<div class="validation-system">
 		
 		<div class="validation-form">
 -->
  	    <h1>ADD SEMESTER</h1>
        <form method="post" action="<?php echo base_url().'addsemester' ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Semester Name</label>
              <input type="text" name="name" placeholder="Example First Semester" required="">
            </div>
             <div class="clearfix"> </div>
           
            
             <div class="col-md-6">
             <label class="control-label">Universities</label> 
            <select class="form-control1"  id="uni" name="uni" style="background-color:#fff">
            <option>Choose University</option>
                <?php

                foreach ($this->university as $s) {

                 echo "<option value='$s->id'>$s->name</option>";
                }
                ?>
            </select>
          </div>
           <div class="clearfix"> </div>

           <div class="col-md-6">
             <label class="control-label">Level</label> 
            <select class="form-control1" id='level' name="level"  style="background-color:#fff">
          
            </select>
          </div>
           <div class="clearfix"> </div>

           <div class="col-md-6">
             <label class="control-label">Faculty</label> 
            <select class="form-control1" id="Faculty" name="faculty"  style="background-color:#fff">
            
            </select>
          </div>
       
           <!--  <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Universities</label><br><br>
              <select name="uni" id="uni">
                <option>Choose University</option>
                
                
              </select> </div> -->
               <!-- <div class="col-md-6 form-group1">
              <label class="control-label" sty>Level Name</label>
             
            
              <select name="level" id="level">
                <option>Show level</option>
              </select></div> -->
              <!-- <div class="col-md-6 form-group1">
              <label class="control-label">Faculty Name</label>
             
            
              <select name="faculty" id="Faculty">
                <option>Choose Faculty</option>
              </select></div> -->
          

              
             
            
             
            
             
            
             
           
            

             
            <div class="col-md-12 form-group" style="margin-top: 1em;">
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
  <script>
  $(document).ready(function(){
    $('#uni').change(function(){
      var university_id = $(this).val();
      $.ajax({
        url:"view/load_data.php",
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
<script>
  $(document).ready(function(){
    $('#level').change(function(){
      var level_id = $(this).val();
      $.ajax({
        url:"view/load_faculty.php",
        method:"POST",
        data:{level_id:level_id},
        dataType:"text",
        success:function(data)
        {
          $('#Faculty').html(data);
        }
      });
    });
  });

</script>
</body>
</html>

