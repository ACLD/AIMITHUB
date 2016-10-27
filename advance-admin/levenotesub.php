<?php
extract($_POST);
include("conn/config.php");


echo "<h4>Subjects</h3>";
$query = mysql_query("select * from timetable where monday='B'",$connection) or die(mysql_error());

while ($row = mysql_fetch_array($query))
	   {     
            $facultyquery = mysql_query("select * from faculty where faculty_id='$row[1]'",$connection) or die(mysql_error());
             while ($row1 = mysql_fetch_array($facultyquery))
	        { 
				$faculty=$row1[1];
				echo "<b>$row[8]</b><br>

								<select name=lecture1>";
								
								
							
				
			}
			 $subjectquery = mysql_query("select * from subject where faculty_id='$row[1]'",$connection) or die(mysql_error());
             while ($row1 = mysql_fetch_array($subjectquery))
	        { 
				$sub_name=$row1[1];
			

								
								echo"<option>$row1[1]</option>
								
								</select>";
			}
	   }
	
?>								
								