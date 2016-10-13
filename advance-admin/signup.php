
<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>

<link href="assets/css/signup.css" rel="stylesheet" type="text/css">
<link href="assets/css/blur.css" rel="stylesheet" type="text/css">
	 
	
</head>

<body>
<?php
include("header.php");

?>
	 <div id="signupwrap">
        <h1 align="center"><span>New User Signup</span></h1>

		   <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" enctype="multipart/form-data">

			   <table class="sign">
				  <tr>
						
						<td>
							<input name="regnum" type="text" id="regnum" onblur="check()" placeholder="Reg Num" pattern="[0-9]+" 
								required title="Insert the registration number of your college">
						</td>
						
				 </tr>
			
				  <tr>
				   
				   <td><input name="name" type="text" id="name" onblur="checkname()" placeholder="Full Name" pattern="[a-zA-Z ]+" 
								required title="Enter the Full Name">
					</td>
				  
				 </tr>
				  
				 <tr>
				 
				   <td><input type="password" name="pass" onblur="checkpass()" placeholder="Password" required></td>
					
				 </tr>
				 <tr>
					<td><input name="password" type="password" id="password" onblur="check()" placeholder="Confirm password" required></td>
				 </tr>
				 
				 <tr>
			   
				   <td><input name="email" type="email" id="email" onblur="checkemail()" placeholder="Email"
						required title="Enter a valid email">
					</td>
					   	   
				 </tr>
							  
				 <tr>
					<td><input name="contact" type="text" id="contact" onblur="check()" placeholder="Mobile No"pattern="[0-9]+" 
					  required  title="Insert only numbers not char">
					 </td>
				 </tr>
				 <tr>
				   
				   <td>
					<button type="submit" class="button" style="vertical-align:middle"><span>Sign-Up</span></button>
				   </td>
				 </tr>
			   </table>
			 </form>
		 <form>
	</div>	 
 <p>&nbsp; </p>
</body>
</html>