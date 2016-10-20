 <html>
<head>
	<meta charset="utf-8">
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/blur.css" rel="stylesheet" type="text/css">
		<meta name="login" content="width=device-width, initial-scale=1">
		
</head>
<html>
<head>
	<meta charset="utf-8">
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/blur.css" rel="stylesheet" type="text/css">
		<meta name="login" content="width=device-width, initial-scale=1">
		
</head>
<body>
	<div id="box" class="box blurred-bg tinted">
  <div class="content">
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(function() {
	$( ".box" ).draggable();
});
</script>
</body>

