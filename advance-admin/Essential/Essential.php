<!DOCTYPE html>
<html>
	<head>
		
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIMIT HUB 2016</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script type="text/javascript">
		function Hide(a)
		{
			document.getElementById('main').style.visibility="visible";
			document.getElementById('by').opacity="50%";	
		}
	</script>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
	<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" href="css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<!-- elFinder JS (REQUIRED) -->
		<script src="js/elfinder.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#elfinder').elfinder({
					url : 'php/connector.minimal.php'  // connector URL (REQUIRED)
					
				});
			});
		</script>
	</head>
	<body id="by">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AIMIT HUB</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" title="New Message"><img src="..\main\message.png"  height="41" width="41"></a>
              <a href="message-task.html"  title="New Task"><img src="..\main\notification.png"  height="41" width="41"></a>
              <a title="Login" href="..\loginmodule.php" ><img src="..\main\logout.png" height="41" width="41"> </a>


            </div>
        </nav>
		
		<div id="elfinder">
			<form name="video" enctype="multipart/form-data" method="post" action="">
				
			</form>
		</div>
		
		<div id="footer-sec">
        &copy; AIMIT HUB | Design By : Arshad Sayed, Devdatt Sawant, Linson Lorance & Cecil Mathews <br><a href="http://www.aimithub2016.com/" target="_blank">www.aimithub2016.com</a></br>
    </div>

	</body>
</html>
