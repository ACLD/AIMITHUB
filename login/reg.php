<?
extract($_POST);

$rs=mysql_query("select * from user where regnum='$regnum'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Register number  Already Exists</div>";
	echo "<br><br><div class=head2>Sign up again (Choose different user name ypu can add no to it)</div>";
	echo "<br><div class=head1><a href=signup.php>Signup</a></div>";
	
	exit;
}

echo "the Register number is ".$regnum."<br>";

$query="insert into user(regnum,name,email,password,contact) values('$regnum','$name','$email','$password','$contact',)"or die(mysql_error());
$rs=mysql_query($query)or die("Could Not Perform the Query".mysql_error());
echo "<br><br><br><div class=head1>Your Login ID(user name) :  $regnum Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";
?>