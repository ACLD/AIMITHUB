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
                <a class="navbar-brand" href="index.html">AIMIT HUB</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" title="New Message"><img src="main\message.png"  height="41" width="41"></a>
              <a href="message-task.html"  title="New Task"><img src="main\notification.png"  height="41" width="41"></a>
              <a title="Login" href="loginmodule.php" ><img src="main\logout.png" height="41" width="41"> </a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
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
		<div id="main">
		</div>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12 ">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">Welcome to AIMIT HUB </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
				 <div class="col-md-4 shad">
                        <div class="main-box mb-green effect2">
                            <a href="acadamic.php">
                                <i ></i>
                                <h5>Academic Performance</h5>
                            </a>
                        </div>
                    </div>
					<div class="col-md-4 shad">
                        <div class="main-box mb-blue effect2">
                            <a href="leave.php">
                                <i ></i>
                                <h5>Leave Applications</h5>
                            </a>
                        </div>
                    </div>
					<div class="col-md-4 shad">
                        <div class="main-box mb-orange effect2">
                            <a href="Essential\Essential.php">
                                <i ></i>
                                <h5>Essentials</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 shad">
                        <div class="main-box mb-red effect2">
                            <a href="assignment.html">
                                <i ></i>
                                <h5>Assignment</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 shad">
                        <div class="main-box mb-dull effect2">
                            <a href="seminar.html">
                                <i ></i>
                                <h5>Seminar</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 shad">
                        <div class="main-box mb-voi effect2">
                            <a href="\Users\dont know\Desktop\AIMIT HUB\advance-admin\project.html">
                                <i ></i>
                                <h5>Project</h5>
                            </a>
                        </div>
                    </div>
					 
					 
					
               
                <!-- /. ROW  -->
               <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>New Task Panel
                            </div>

                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <b >3 New Assignment</b>
                                    <span ><em>12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <b >3 days left for book submission</b>
                                    <span ><em>27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <b>3 days leave note pending</b>
                                    <span ><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                   
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-info btn-block">View All Tasks</a>
                            </div>

                        </div>
						
						<div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>New Task Panel
                            </div>

                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <b >3 New Assignment</b>
                                    <span ><em>12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <b >3 days left for book submission</b>
                                    <span ><em>27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <b>3 days leave note pending</b>
                                    <span ><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                   
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-info btn-block">View All Tasks</a>
                            </div>

                        </div>
						
                    </div>
                </div>
				 
			</div>	
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; AIMIT HUB | Design By : Arshad Sayed, Devdatt Sawant, Linson Lorance & Cecil Mathews <br><a href="http://www.aimithub2016.com/" target="_blank">www.aimithub2016.com</a></br>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>