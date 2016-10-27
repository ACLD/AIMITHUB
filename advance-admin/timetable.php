<?php
//include('header.php');
extract($_POST);
include("conn/config.php");

$query = mysql_query("select * from timetable where monday='B'",$connection) or die(mysql_error());
while ($row = mysql_fetch_array($query))
	   {     
            $facultyquery = mysql_query("select * from faculty where faculty_id='$row[1]'",$connection) or die(mysql_error());
             while ($row1 = mysql_fetch_array($facultyquery))
	        { 
				$faculty=$row1[1];
				echo $faculty;
			}
			 $subjectquery = mysql_query("select * from subject where faculty_id='$row[1]'",$connection) or die(mysql_error());
             while ($row1 = mysql_fetch_array($subjectquery))
	        { 
				$sub_name=$row1[1];
				echo $sun_name;
			}
		echo"<table>";
          echo"<tr>";
						 echo"<td ><input type=text value='$row[0]' name=q_id disabled></td>";
						 echo"<td><input type=text value='$row[1]' name=test_id></td>";
						 echo"<td><input type=text value='$faculty'</td>";
						 echo"<td><input type=text value='$sub_name'</td>"; 
						 echo"<td><input type=text value='$row[2]' name=question></td>";
						 echo"<td><input type=text value='$row[3]' name=op1></td>";
						 echo"<td><input type=text value='$row[4]' name=op2></td>";
						 echo"<td><input type=text value='$row[5]' name=op3></td>";
						 echo"<td><input type=text value='$row[6]' name=op4></td>";
						 echo"<td><input type=text value='$row[7]' name=ans></td>";
						  echo"<td><input type=text value='$row[8]' name=ans></td>";
						   echo"<td><input type=text value='$row[9]' name=ans></td>";
						 echo"<td><input type=button  value=Submit></td>";			
		echo'</tr>';	
		  echo"</table>";

	   }
?>


