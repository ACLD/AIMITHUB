<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIMIT HUB 2016</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script type="text/javascript">
		function Hide(a)
		{
			document.getElementById('main').style.visibility="visible";
			document.getElementById('by').opacity="50%";	
		}
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
                <a class="navbar-brand" href="index.php">AIMIT HUB</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" title="New Message"><img src="main\message.png"  height="41" width="41"></a>
              <a href="message-task.html"  title="New Task"><img src="main\notification.png"  height="41" width="41"></a>
              <a title="Login" onclick="Hide('0')"><img src="main\logout.png" height="41" width="41"> </a>


            </div>
        </nav>
                <!-- /. NAV TOP END  -->
				 <!-- /. NAV SIDE START  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                Arun Mathew Jose
                            <br />
                                <small>Last Login : 2 Days Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        
						<a  href="blank.html"><img src="main\dash.png"  height="41" width="41"> <b>Dashboard</b></a>
                    </li>
                    
                   
                    <li>
                        <a href="#"><img src="main\print counter.png"  height="42" width="42"> <b>Print Counter</b><span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                            
                             <li>
                                <a href="Advance-admin\sprint.html"><img src="main\sprint.png"  align ="left" height="30" width="30"> <b>Student Print</b></a>
                            </li>
                             
                           
                        </ul>
                    </li>
                     
                     <li>
                        <a href="librarybook.html"><img src="main\library.png"  height="42" width="42"> <b>Library</b></a>
                    </li>
                     <li>
                        <a href="#"><img src="main\essential.png"  height="42" width="42"> <b>Essential </b><span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="mca.html"><img src="main\MCA.png"  align ="left" height="30" width="30"><b> Master of Computer Applications</b></a>
                            </li>
                            <li>
                                <a href="mba.html"><img src="main\mba.png"  align ="left" height="30" width="30"><b> Master of Business Administration</b></a>
                            </li>
                             <li>
                                <a href="mscst.html"><img src="main\mscst.png"  align ="left" height="30" width="30"><b> Msc Software Technology</b></a>
                            </li>
                             <li>
                                <a href="mscbio.html"><img src="main\bio.png"  align ="left" height="30" width="30"><b> Msc Bio-Informatics</b></a>
                            </li>
                            <li>
                                <a href="pgdca.html"><img src="main\pgdca.png"  align ="left" height="30" width="30"><b> PG Diploma in Computer Applications</b></a>
                            </li>
                            </ul>
                            
                           </li>
                         
                    
                        <li>
                        <a href="#"><img src="main\about.png"  height="42" width="42"><b> About AIMIT HUB</b><span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Vision</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Developers</a>
                            </li>
                                </ul>
                            </li>
                      
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
</body>
</html>		