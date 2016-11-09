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
	<div id="box1" class="box1 blurred-bg tinted">
		<div class="content">
			<form name="form2" method="post" action="signupuser.php"  id="sigup" enctype="multipart/form-data">
				<a href="index.php" ><input type="Button" class="close1" value="X" ></a>
				<input name="regnum" type="text" id="regnum"  placeholder="Reg Num" pattern="[0-9]+" required >
				<input name="name" type="text" id="name"  placeholder="Full Name" pattern="[a-zA-Z ]+" required title="Insert only the alphabet">
				<input type="password" name="pass" onblur="checkpass()" placeholder="Password" required>
				<input name="password" type="password" id="password" placeholder="Confirm password" required> 
				<input name="email" type="email" id="email" placeholder="Email" required title="Insert a valid email">
				<input name="contact" type="text" id="contact" placeholder="Mobile No"pattern="[0-9]+" required  title="Insert only numbers ">
				<div class="submit">
							<input type="submit" id="btnSignUp" value="Sign-Up" >
				</div>
			</form>
		</div>
	</div>
</body>

