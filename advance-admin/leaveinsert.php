
<?php
include('header.php');
?>
<body>
<?php

extract($_POST);
include("conn/config.php");
$rs=mysql_query("select * from student where regnum='$regnum'");
if (mysql_num_rows($rs)==0)
{
	echo "<br><br><br><div class=head1>Registration Number Do not Exists</div>";
	exit;
}
	$regnum=$_POST['regnum'];
	$date=$_POST['date'];
	$sub=$_POST['sub'];
	$description=$_POST['description'];
	$subject=$_POST['subject_id'];


$query="insert into leavenotes(regnum,date,sub,description,subject_id) values('$regnum','$date','$sub','$description','$subject_id')"or die(mysql_error());
$rs=mysql_query($query)or die("Could Not Perform the Query".mysql_error());
echo "<br><br><br><H1>Leave note is Submitted </H1>";
echo "<br><H2>Please wait for the approval</H2>";
echo "<br><h3><a href=index.php>Back to home</a></h3>";


?>
</body>
</html>
