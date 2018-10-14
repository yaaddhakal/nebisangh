<?php
if($this->showpdfid==NULL)
{
   echo "<script>window.location='".base_url()."showpdf'</script>";
}

if($this->showpdfid[0]->created_by != $_SESSION['admin'] && $_SESSION['role'] != 'SuperAdmin' ){
  //echo $_SESSION['role'];
  echo "<script>window.location='".base_url()."showpdf'</script>";
}
?>
<?php
$err=[];
if(isset($_POST['submit']))
{
  if(isset($_POST['title'])&& !empty($_POST['title']))
  {
    $this->pdf->title=$this->pdf->escapestring($_POST['title']);
  }
  else
  {
    $err[0]="Please insert Title of pdf file";
  }

   if(isset($_POST['subject'])&& !empty($_POST['subject']))
  {
    $this->pdf->subject=$this->pdf->escapestring($_POST['subject']);
  }
  else
  {
    $err[6]="Please insert Subject name of file";
  }
  if(isset($_POST['provider'])&& !empty($_POST['provider']))
  {
    $this->pdf->provider=$this->pdf->escapestring($_POST['provider']);
  }
  else
  {
    $err[7]="Please insert provider name of file";
  }
  if($_POST['uni']!='Choose University')
  {
    $this->pdf->university = $this->pdf->escapestring($_POST['uni']);
    $this->pdf->type = $this->pdf->escapestring($_POST['type']);
    if($_POST['level']!='Choose Level'){
    $this->pdf->level = $this->pdf->escapestring($_POST['level']);
  }
  else
  {
    $err[1]="Please select Level";
  }
  if($_POST['sem']!='Select Semester'){
    $this->pdf->semester = $this->pdf->escapestring($_POST['sem']);
  }
  else
  {
    $err[1]="Please select Semester";
  }
  if($_POST['faculty']!='Select Faculty'){
    $this->pdf->faculty = $this->pdf->escapestring($_POST['faculty']);
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
    $this->pdf->created_by = $_SESSION['admin'];
  $tz = 'Asia/Kathmandu';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
      $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
      $this->pdf->created_at= $dt->format('Y.m.d H:i:s');
      if($_FILES['pdf']['error']==0 && $_FILES['pdf']['size']!=0)  
    {
      $iname=$_FILES['pdf']['name'];
      move_uploaded_file($_FILES['pdf']['tmp_name'], 'view/pdfs/'.$iname);
        $this->pdf->pdflocation =$iname;
      $return = $this->pdf->updatepdf($this->showpdfid[0]->id);   
      }
      else
      {
       $return= $this->pdf->updatepdfwo($this->showpdfid[0]->id);
      }
     
      if($return)
      {
        echo "<script> alert('Updated Successfully')</script>";
       // echo "<script> window.location='".base_url()."updatepdf/".$this->showpdfid[0]->id."'</script>";
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
<!--  	<div class="validation-system">
 		
 		<div class="validation-form">
 -->
  	    <h1>ADD PDF</h1>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'updatepdf/'.$this->showpdfid[0]->id ?>">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label"> Title</label>
              <input type="text" name="title" value="<?php echo $this->showpdfid[0]->title ?>" placeholder="Example First Title" required="">
            </div>
             <div class="clearfix"> </div>
           
            
             <div class="col-md-6">
             <label class="control-label">Universities</label> 
            <select class="form-control1"  id="uni" name="uni" style="background-color:#fff">
            <option value="<?php echo $this->showpdfid[0]->university_id  ?>"><?php echo $this->uniname[0]->name ?></option>
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
            <option value="<?php echo $this->showpdfid[0]->level_id  ?>"><?php echo $this->levelname[0]->level_name ?></option>
            </select>
          </div>
            <div class="clearfix"> </div>
            <div class="col-md-6">
             <label class="control-label">Faculty</label> 
            <select class="form-control1" id="Faculty" name="faculty"  style="background-color:#fff">
            <option value="<?php echo $this->showpdfid[0]->faculty_id  ?>"><?php echo $this->facultyname[0]->faculty_name ?></option>
            </select>
          </div>
          <div class="clearfix">
          </div>
           <div class="col-md-6">
             <label class="control-label">Semester</label> 
            <select class="form-control1" id='sem' name="sem"  style="background-color:#fff">
          <option value="<?php echo $this->showpdfid[0]->semester_id  ?>"><?php echo $this->semname[0]->sem_name ?></option>
            </select>
          </div>
           <div class="clearfix"> </div>

           
          <div class="col-md-6">
             <label class="control-label">Type</label> 
            <select class="form-control1" id='type' name="type"  style="background-color:#fff">
              <option><?php echo $this->showpdfid[0]->type ?></option>
              <option>Question Bank</option>
              <option>Notes</option>
              <option>Syallabus</option>
          
            </select>
          </div>
           <div class="clearfix"> </div>
            <div class="col-md-6 form-group1">
              <label class="control-label"> Subject</label>
              <input type="text" name="subject" value="<?php echo $this->showpdfid[0]->sub_name ?>" placeholder="Example First Title" required="">
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-6 form-group1">
              <label class="control-label"> Provider</label>
              <input type="text" name="provider" value="<?php echo $this->showpdfid[0]->provider ?>" placeholder="Example First Title" required="">
            </div>
             <div class="clearfix"> </div>

          Add PDF<input type="file" name="pdf" accept="application/pdf" >
       
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
<script>
  $(document).ready(function(){
    $('#level').change(function(){
      var level_id = $(this).val();
      $.ajax({
        url:"../view/load_faculty.php",
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
<script>
  $(document).ready(function(){
    $('#Faculty').change(function(){
      var faculty_id = $(this).val();
      $.ajax({
        url:"../view/load_semester.php",
        method:"POST",
        data:{faculty_id:faculty_id},
        dataType:"text",
        success:function(data)
        {
          $('#sem').html(data);
        }
      });
    });
  });

</script>
</body>
</html>

