<?php $connection = mysqli_connect('localhost', 'root','', 'to-let');?>


<html lang="en" class=" js csstransitions"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>TO-LET for home</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="http://caretutors.com/assets/img/favicon.png">

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="landing/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
   
    <!-- Main structure css file -->
    <link href="landing/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="landing/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="/landing/css/build.css">
    
   <script type="text/javascript" async="" id="inspsync" src="http://cdn.inspectlet.com/inspectlet.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript">
		var BASE_URL = "http://caretutors.com/";
	</script>
	
	
	
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="landing/css/bootstrap.min.css">
      <script src="landing/css/jquery.min.js"></script>
      <script src="landing/css/bootstrap.min.js"></script>

    
	
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/13/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/13/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/13/stats.js"></script></head>  <body cz-shortcut-listen="true" style="margin: 0px; overflow: visible;"> 

 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#" style="display: inline;"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
		<div class="menu_area">
			<nav class="navbar navbar-default navbar-fixed-top past-main" role="navigation"> 
				<div class="container">
					<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					
    					<a class="navbar-brand for_change" href="index.php" style="color: black">
                            <img src="img/capture.png">               
                        </a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                            <li><a href="index.php"><?php 
                                 if ($_SESSION['name']) {
                                echo "welcome ".$_SESSION['name'];
                            }else {
                            	echo "";
                            } ?></a></li>
							<li><a href="index.php">Home</a></li>
							<li><a href="newsfeed.php">News feed</a></li>
							<li>
                            <?php 
                                 if ($_SESSION['name']) {
                                echo " ";
                            }else { ?>
                            <a href='registration.php'>registration </a>
                           <?php } ?>
                
              </li>               
							<li><a href="#" >contract</a></li>
                            <li><a href="logout.php">Logout</a></li>               

							                        
						</ul>           
					</div><!--/.nav-collapse -->
				</div>     
			</nav>  
		</div>
      <!-- END MENU -->