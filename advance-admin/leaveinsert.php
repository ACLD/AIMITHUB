<?php

extract($_POST);
include("conn/config.php");

	
        $regnum=$_POST['regnum'];
	    $date=$_POST['date'];
	    $sub=$_POST['sub'];
	    $description=$_POST['description'];
		
		
		$query=mysql_query("insert into leavenotes(regnum,date,sub,description) values('$regnum','$date','$sub','$description')",$connection)or die(mysql_error());
         $rs=mysql_query("Select * from leavenotes where regnum='$regnum'",$connection)or die("Could Not Perform the Query".mysql_error());
			
			while($row=mysql_fetch_array($rs))
			{  
				$leave_id=$row[0];
			}
		
		 $c=array();
		  for($i=1; $i<=7; $i++)
        {    
			 if($_POST[$i]!=Null)
			 {
				 $c=$_POST[$i];
			    $query=mysql_query("insert into leavesubject(leave_id,subject_code) values('$leave_id' ,'$c')",$connection)or die(mysql_error()); 
			 }
                
        }
		
echo "<br><br><br><H1>Leave note is Submitted </H1>";
echo "<br><H2>Please wait for the approval</H2>";
echo "<br><h3><a href=index.php>Back to home</a></h3>";
?>	