

      <div class="container results-table center-content">

        <table class="table display responsive" cellspacing="0" width="100%" id="resultsTable">

          <thead>
            <th>S No.</th>
            <th>Topic</th>
            <th>Subject</th>
            <th>Provider</th>
            <th>Type</th>

            <th>Download</th>
           
          </thead>

          <tbody>
            <?php
            $n=0;
            foreach($this->showpdf as $s){
            $n++; 
            ?>


                          <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $s->title ?></td>
                <td><?php echo $s->sub_name ?></td>
                <td><?php echo $s->provider ?></td>
                <td><?php echo $s->type ?></td>
             
  
             <?php

             echo "<td><a href='".base_url()."noteshub_admin/view/pdfs/".$s->pdf_notes."'> Download Pdf</a>";
             ?>
                <!--<td></td>-->
                

              </tr><?php } ?>
                                         
          </tbody>

        </table>

      </div>

      <br/>
      

      <br/>

<div class="container marketing">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
  
</script>

<!-- Three columns of text below the carousel -->



<!-- OPEN UPLOAD CSS FILE -->
<link rel="stylesheet" type="text/css" href="https://noteshub.co.in/dist/css/openUpload.css">

<!-- OPEN UPLOAD BUTTON -->


<!-- OPEN UPLOAD MODAL -->
<div class="modal fade" id="openUpload" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<div class="container" style="padding:0;">
				<span class="close" type="button" data-dismiss="modal" aria-label="Close"><span style="vertical-align: text-top;" aria-hidden="true" class="glyphicon glyphicon-menu-left"></span></span>
				<h2 class="modal-title" style="display: inline-block;">&nbsp;&nbsp;Upload and Share</h2>
			</div>
		</div>
		
		<div class="modal-body container">
			<p>Upload your study material and be a helping hand to your buddies out there.</p>
			<br/>
			<div style="display:none;">
				<span id="uploadpercentage"></span>
				<div class="progress">
				    <div style="background:#000;" class="bar"></div >
				    <div class="percent">0%</div >
				</div>
				<div id="status"></div>
			</div>
			  <progress id="progressBar" value="0" max="100" style="width:100%; transition:.2s ease-in-out; display:none"></progress>
			  <h3 id="status"></h3>
			  <p id="loaded_n_total"></p>
			  
			  <!--<div id="bar_blank">
			   <div id="bar_color"></div>
			  </div>
			  <div id="status"></div>-->
			
			<form action="https://noteshub.co.in/open_upload_request.php" enctype="multipart/form-data" method="post" class="form-horizontal" id="open-upload-form">
			           <!--<input type="hidden" value="open-upload-form"
    name="PHP_SESSION_UPLOAD_PROGRESS">-->

			        <div class="form-group container row">
			          <div class="form-check col-xs-3 text-center">
			            <input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="notes" required>
			            <label class="form-check-label" for="exampleRadios1">
			              Notes
			            </label>
			          </div>
			          <div class="form-check col-xs-3 text-center">
			            <input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="practicalfiles" required>
			            <label class="form-check-label" for="exampleRadios2">
			              Practical Files
			            </label>
			          </div>
			          <div class="form-check col-xs-3 text-center">
			            <input class="form-check-input" type="radio" name="category" id="exampleRadios3" value="questionpapers" required>
			            <label class="form-check-label" for="exampleRadios3">
			              Question Papers
			            </label>
			          </div>
			          <div class="form-check col-xs-3 text-center">
			            <input class="form-check-input" type="radio" name="category" id="exampleRadios4" value="ebooks" required>
			            <label class="form-check-label" for="exampleRadios4">
			              eBooks
			            </label>
			          </div>
			        </div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="">Attach file</label>
					<div class="col-sm-10">
						<input required type="file" class="form-control" placeholder="" name="file" accept=".pdf,.doc,.docx,.rtf,.ppt,.pptx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="">Topic</label>
					<div class="col-sm-10">
						<input required type="text" class="form-control" placeholder="Topic" name="topic">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="">Subject</label>
					<div class="col-sm-10">
						<input required type="text" class="form-control" placeholder="Subject" name="subject" id="subject" autocomplete="off">
						<div id="subjectList"></div>
					</div>
				</div>
			        <div class="form-group">
			          <label class="col-sm-2 control-label" for="">Credits</label>
			          <div class="col-sm-10">
			            <input required type="text" class="form-control" placeholder="Your Name" name="credit">
			          </div>
			        </div>
			
				<div class="col-sm-offset-2">
					<input type="submit" class="btn btn-primary" value="Upload :)" onSubmit="uploadFile();">
				</div>
			</form>
		</div>
		
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
 $(document).ready(function(){
	  $('#subject').keyup(function(e){
	  	var code= e.keycode | e.which;
	  	//alert(code);
	  	if(code!=38&&code!==40) { 
	  	//var e= $.Event('keyup'); e.which=code; $("#subject").trigger(e); 
		   var query = $(this).val();
		   if(query != '')
		   {
				$.ajax({
					 url:"subject_autocomplete.php",
					 method:"POST",
					 data:{query:query},
					 success:function(data)
					 {
						  $('#subjectList').fadeIn();
						  $('#subjectList').html(data);
					 }
				});
		   }else if(query == ''){
			$('#subjectList').fadeOut();
		   }
	  }
	  });
	  
	  $(document).on('click', '.list-group-item', function(){
		   $('#subject').val($(this).text());
		   $('#subjectList').fadeOut();
	  });
 });

</script>

<!--<script>

//Upload Progress bar
/*function toggleBarVisibility() {
    var e = document.getElementById("bar_blank");
   // e.style.display = (e.style.display == "block") ? "none" : "block";
}

function createRequestObject() {
    var http;
    if (navigator.appName == "Microsoft Internet Explorer") {
        http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else {
        http = new XMLHttpRequest();
    }
    return http;
}

function sendRequest() {
    var http = createRequestObject();
    http.open("GET", "progress.php");
    http.onreadystatechange = function () { handleResponse(http); };
    http.send(null);
}

function handleResponse(http) {
    var response;
    if (http.readyState == 4) {
        response = http.responseText;
        alert("Response"+response);
        document.getElementById("bar_color").style.width = response + "%";
        document.getElementById("status").innerHTML = response + "%";

        if (response < 100) {
            setTimeout("sendRequest()", 1000);
        }
        else {
            toggleBarVisibility();
            document.getElementById("status").innerHTML = "Done.";
        }
    }
}

function startUpload() {
    toggleBarVisibility();
    setTimeout("sendRequest()", 1000);
}

(function () {
    document.getElementById("open-upload-form").onsubmit = startUpload;
})();*/
</script>-->

<script>

//FETCHING FILE UPLOAD PERCENTAGE 


</script>




     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script>window.jQuery || document.write('<script src="https://noteshub.co.in/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://noteshub.co.in/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://noteshub.co.in/assets/js/vendor/holder.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://noteshub.co.in/assets/js/ie10-viewport-bug-workaround.js"></script>


<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://noteshub.co.in/tables/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>


<!--<script>
 $('#internTable').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for internship in '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
</script>-->

     <!--Banner type text effect , navbar out of focus close -->
     <script src="https://noteshub.co.in/dist/js/typed.js"></script>
     <script src="https://noteshub.co.in/dist/js/banner.js"></script>

     <script src="https://noteshub.co.in/dist/js/sellBooks.js"></script>


       

<!--<script>
      window.fbMessengerPlugins = window.fbMessengerPlugins || {
        init: function () {
          FB.init({
            appId            : '1678638095724206',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
          });
        }, callable: []
      };
      window.fbAsyncInit = window.fbAsyncInit || function () {
        window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
        window.fbMessengerPlugins.init();
      };
      setTimeout(function () {
        (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) { return; }
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      }, 0);
      </script>

      <div
        class="fb-customerchat"
        page_id="910123809127452"
        ref="">
      </div>-->
      <footer style="float:center;height:20%;width:100%">Developed by Sanjok Gyawali and supported by Milan Khadka Sunar</footer>

     </body>
     
<!-- Mirrored from noteshub.co.in/notes.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Apr 2018 13:56:55 GMT -->
</html>
