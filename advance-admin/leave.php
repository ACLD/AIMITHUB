<<<<<<< HEAD
<?php 
include('header.php');

?>
<?php





?>    
=======

>>>>>>> origin/master
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js//jquery-ui.min.js"></script>

  
  <script>
  $(document).ready(function() {
<<<<<<< HEAD
=======
	 
>>>>>>> origin/master
    $("#datepicker").datepicker();
  });
  </script>
</head>
<body>
<<<<<<< HEAD
 
=======
<?php 
include('header.php');

?>     
>>>>>>> origin/master
   
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
						
							<form method="POST" action="leaveinsert.php">
                            <div >
                                From  <input type="text" name="regnum" placeholder="regnum"/>
								<br>
								<br>
								To   <input type="text" placeholder="Professor Name" /><br><br>

								 <form>
<<<<<<< HEAD
									Date:<input id="datepicker" name="date" placeholder="click to choose the date"/>
=======
									Date:<input id="datepicker"  placeholder="click to choose the date"/>
>>>>>>> origin/master
								</form><br><br>
								 
								<br>
								Subject <input type="text"  name="sub" style="margin: 0px; width: 500px; height: 20px;" /><br><br>
								Reason for the Absence<br>
<<<<<<< HEAD
								<textarea height="400" width="400" style="margin: 0px; width: 551px; height: 261px;" name="description"></textarea><br><br>
=======
								<textarea height="400" width="400" style="margin: 0px; width: 551px; height: 261px;" name="reason"></textarea><br><br>
>>>>>>> origin/master
								<br>
								<br>
								<div class="panel panel-default">
								<div class="panel-heading">
								<h4>Subjects</h3>
								<b>9:00 AM to 10:00 AM</b><br>

<<<<<<< HEAD
								<select name="subject_id">
								
								<option >P.601.3(E1) Data structure & Analysis of Algorithms</option>
=======
								<select name="lecture1">
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
>>>>>>> origin/master
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>10:00 AM to 11:00 AM</b><br>
								
								
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>11:00 AM to 12:00 PM</b><br>
								
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>12:00 PM to 1:00 PM</b><br>
								
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>2:00 PM to 3:00 PM</b><br>
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>3:00 PM tO 4:00 PM</b><br>
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<b>4:00PM to 5:00 PM</b><br>
								<select>
								
								<option>P.601.3(E1) Data structure & Analysis of Algorithms</option>
								<option>P.602.3(E1) Software Engineering</option>
								<option>P.603.3(E1)Object Oriented programming with Java</option>
								<option>P.604.3(E1)Database Management System</option>
								<option>P.605.3(E2)Optimization Technique</option>
								<option>P.606.3 Data Structures using Java UML Lab</option>
								<option>P.607.3 Java programming & DBMS Lab</option>
								<option>P.608.3 Business Communication</option>
								
								</select>
								<br>
								<br>
								<input type="submit" value="Submit"></input>
								
								</div>
						    </form>		
						</div>
								
								
								
								
								
								
								
								
                            </div>
                        </div>
                    </div>
                     <!-- End  completed -->
                </div>
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
