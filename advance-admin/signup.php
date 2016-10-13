
<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>


<link href="assets/css/signup.css" rel="stylesheet" type="text/css">
	 
</head>

<body>
<?php
include("header.php");

?>

   <h1 align="center"><span id="signuphead">New User Signup</span></h1>
   <form name="form1" method="post" action="signupuser.php"  enctype="multipart/form-data">

       <table class="sign">
          <tr>
				
			  <td>
					<input name="regnum" type="text" id="regnum"  placeholder="Reg Num" pattern="[0-9]+" required >
			 </td>
         </tr>
	
		  <tr>
          
           <td><input name="name" type="text" id="name"  placeholder="Full Name" pattern="[a-zA-Z ]+" required title="Insert only the alphabet"></td>
         </tr>
	     <tr>
		     <td><input type="password" name="pass" onblur="checkpass()" placeholder="Password" required></td>
		</tr>
		   
        <tr>
		    <td><input name="password" type="password" id="password" placeholder="Confirm password" required></td>
         </tr>
		<tr>  
           <td><input name="email" type="email" id="email" placeholder="Email" required title="Insert a valid email"></td>
         </tr>
	
      
         <tr>
          
            <td><input name="contact" type="text" id="contact" placeholder="Mobile No"pattern="[0-9]+" required  title="Insert only numbers "></td>
         </tr>
		 
         <tr>
           <td>
		    <button type="submit" class="button" style="vertical-align:middle"><span>Sign-Up</span></button>
           </td>
         </tr>
       </table>
     </form>
 <form>
 <p>&nbsp; </p>
</body>
</html>
