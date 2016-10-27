
<?php 
include('header.php');

?>
   
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js//jquery-ui.min.js"></script>

  
  <script>
  $(document).ready(function() {


    $("#datepicker").datepicker();
  });
  </script>
</head>
<body>

   
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 >Leave Application Submission and Status</h1>
                        <h1 class="page-subhead-line">Welcome to AIMIT HUB </h1>

                    </div>
                </div>
				
				<div class="row">
                <div class="col-md-12">
                  <!--   Assignments -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><b>Leave Applications</b></h3>
                        </div>
                        <div class="panel-body">
						
					<form method="POST" action="leaveinsert.php" name='leaveform'>
                            <div >
							
                                From  <input type="text" name="regnum" placeholder="regnum"/>
								<br>
								<br>
								To   <input type="text" placeholder="Professor Name" /><br><br>

								 <form>

									Date:<input id="datepicker" class=".datepicker" name='date' placeholder="click to choose the date"/>
								</form><br><br>
								 
								<br>
								Subject <input type="text"  name="sub" style="margin: 0px; width: 500px; height: 20px;" /><br><br>
								Reason for the Absence<br>

								<textarea height="400" width="400" style="margin: 0px; width: 551px; height: 261px;" name="description"></textarea><br><br>
								<br>
								<br>
								<div class="panel panel-default">
								<div class="panel-heading">
									<?php include("leavenotesub.php");?>
									
							</div>
                        </div>
                    </div>
                     <!-- End  completed -->
                </div>
					</form>
				</div>
				</div>
				
				
				 <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; AIMIT HUB | Design By :Arun Jose,Puneeth Pai & Kevin Milan Sequeira <br><a href="http://www.aimithub2016.com/" target="_blank">www.aimithub2016.com</a></br>
    </div>


</body>
</html>
