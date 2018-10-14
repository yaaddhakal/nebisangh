<!DOCTYPE html>
<?php
if(isset($_POST['recommend']))
{
  $uni=$_POST['uni'];
  $level=$_POST['level'];
  $faculty = $_POST['faculty'];
  $semester = $_POST['sem'];
  $type= $_POST['type'];
  echo "<script>window.location='". base_url()."$uni/$level/$faculty/$semester/$type'</script>";
}
?>
<html lang="en">
  
<!-- Mirrored from noteshub.co.in/notes.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Apr 2018 01:19:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="googlebot" content="noodp">
    <meta name="description" content="One  stop solution for engineering students">
    <meta name="keywords" content="GGSIPU,IPU,NotesHub,Notes,B.Tech,engg,engineering,study,material,books,question,paper,papers,practical,files,download,pdf,buy,sell,college,btech,quality,last,year,supplementary,note,notes,indraprastha,university,NotesHub,Computer,science,information,technology,mechanical,civil,electrical,electronics,cs,it,mae,me,eee,ece,cse,download,search,find">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url().'view/favicon.png' ?>">
    <meta name="theme-color" content="#ca2c2c">
    <link rel="manifest" href="<?php echo base_url().'view/manifest.json'?>">

    <title>NotesHub</title>

    <script src="<?php echo base_url().'view/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' ?>"></script>
    <!--<script src="preloader.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/css/preloader.css">-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'view/dist/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url().'view/assets/css/ie10-viewport-bug-workaround.css'?>" rel="stylesheet">

    <!-- Just for debugging purposes. Dont actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url().'view/assets/js/ie-emulation-modes-warning.js'?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'view/ dist/css/select2.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/dist/css/select2-bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/dist/css/modify.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/dist/css/buyBooks.css'?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'view/dist/css/sellBooks.css'?>">


    <link href="<?php echo base_url().'view/dist/css/carousel.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/dist/css/index.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'view/ maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'view/dist/css/footer-basic-centered.css'?>">

    <link href="<?php echo base_url().'view/tables/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'view/cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'view/dist/css/datatables%20customization.css'?>">

    <!--Google ads customization -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'view/dist/css/google%20ads%20customization.css'?>">
    <!-- Google Analytics -->
	<script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-86458385-1', 'auto');
  	ga('send', 'pageview');

	</script>

     <!--Google adsense -->
     <script async src="<?php echo base_url().'view/pagead2.googlesyndication.com/pagead/js/f.txt'?>"></script>
     <script>

     (adsbygoogle = window.adsbygoogle || []).push({
     google_ad_client: "ca-pub-6153632791841759",
     enable_page_level_ads: true
     });

      //install service worker
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
          navigator.serviceWorker.register('sw.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
          }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
          });
        });
      }

     </script>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <div class="jumbotron">
      <div class="container">
        <br>
        <br>
        <h1>NSU LEC</h1>
        <p>We are committed to bring you the best of the best notes of each and every subject. Go explore!</p>

      </div>
    </div>




    <!--select starts here-->
    <div class="container center-content">
      
    <form class="form-horizontal" action="<?php echo base_url().'index'?>" method="post">
                       <div class="row">
                       <div class="col-md-4 col-sm-4 col-xs-12 col-semester">
                          <div class="form-group">

                            <label for="id_label_single">
                            Select your University
                            </label>
                            <br>

                              <select required id="uni"  name="uni"  class="form-control1" style=" width: 90%;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;">

                              <option value=""></option>
                              <?php
                              foreach ($this->showuni as $u) {
                               
                                echo "<option value='$u->id'>$u->name</option>";
                              }
                              ?>
                               
                              </select>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 col-branch">
                          <div class="form-group">

                          <label for="id_label_single">
                            Select your level
                          </label>
                            <br>

                              <select required id="level" name="level" class="form-control1" style=" width: 90%;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;">
                                    <option value=""></option>
                                    
                              </select>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 col-semester">
                          <div class="form-group">

                            <label for="id_label_single">
                            Select your faculty
                            </label>
                            <br>

                              <select required id="Faculty" name="faculty" class="form-control1" style=" width: 90%;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;">
                              <option value=""></option>
                                
                              </select>
                          </div>
                        </div>

                         <div class="col-md-4 col-sm-4 col-xs-12 col-semester">
                          <div class="form-group">

                            <label for="id_label_single">
                            Select your Semester
                            </label>
                            <br>

                              <select required id="sem" name="sem" style=" width: 90%;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;" class="form-control1">
                              <option value=""></option>
                                
                              </select>
                          </div>
                        </div>

                         <div class="col-md-4 col-sm-4 col-xs-12 col-semester">
                          <div class="form-group">

                            <label for="id_label_single">
                            Select your Type
                            </label>
                            <br>

                              <select required id="type" name="type" style=" width: 90%;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;" class="form-control1">
                              <option value=""></option>
                              <option>Question Bank</option>
              <option>Notes</option>
              <option>Syallabus</option>
                                
                              </select>
                          </div>
                        </div>

                        </div>


                          <div class="row">

                          <div class="col-md-4 col-md-offset-4 col-recommend">
                          <div class="form-group">

                              <button type="submit" name="recommend" class="btn btn-primary btn-lg">Recommend Me</button>

                          </div>
                          </div>
                          </div>
                        </form>
      </div>
      <!--selection ends here-->

       <hr style="width: 50%;
                                 height: 10px;
                                 border: 0;
                                 box-shadow: 0 10px 10px -10px #8c8b8b inset;">
                                  <script>
  $(document).ready(function(){
    $('#uni').change(function(){
      var university_id = $(this).val();
      $.ajax({
        url:"<?php echo base_url(). 'view/load_data.php' ?>",
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
        url:"<?php echo base_url(). 'view/load_faculty.php'?>",
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
        url:"<?php echo base_url(). 'view/load_semester.php'?>",
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
