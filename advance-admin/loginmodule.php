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
       <form action="conn/login_check.php" method="post">
						<a href="index.php" ><input type="Button" class="close" value="X" ></a>
						<input type="text" class="text" name="regnum" value="USERNAME" onfocus="this.value = '';">
						<input type="password" value="Password" name="password" onfocus="this.value = '';">
						<div class="submit">
							<input type="submit" value="LOGIN" >
					</div>	
					<a href="signup.php"><input type="button" Value="Join Us" name="butn" class="sign" ></a>
					<a href="#"><input type="button" Value="Forget Password?" name="butn" class="sign" ></a>
			</form> 
      </div>
	</div>
</body>
