<?php 
    session_start();
    include('database.php');
   if (isset($_SESSION['name'])) {

?>

<?php include('header.php'); ?>

      <!-- BEGIN SLIDER AREA-->
	    <div class="slider_area ">
	        <!-- BEGIN SLIDER-->          
	        <div id="slides"  style="position: relative; overflow: hidden; width: 100%; height: 700px;">
				<div class="slides-control container" style="position: relative; height: 100%; width: 1349px; left: -2698px;">
					<ul class="slides-container" style="margin: 0px; padding: 0px; list-style: none; position: relative; height: 100%; display: block;">
							<!-- THE FIRST SLIDE-->
						<li style="display: block; left: 2698px; position: absolute; overflow: hidden; height: 100%; width: 1349px; top: 0px; z-index: 0;">
							<!-- FIRST SLIDE OVERLAY -->
							<div class="slider_overlay">
							</div>
								<!-- FIRST SLIDE MAIN IMAGE -->
								<img src="landing/img/cover.jpg" alt="img" style="backface-visibility: hidden; position: absolute; left: 0px; top: -249px; z-index: -1; max-width: none; height: 946.333px; width: 1349px;">
						</li>
					</ul>
				</div>
				<!-- BEGAIN SLIDER NAVIGATION -->
				
				<!-- FIRST SLIDE CAPTION-->
	<div class="slider_caption">

				<?php

				if(isset($_POST['submit']) ){
    

 
    			$name = $_POST['name'];
      			$phone = $_POST['phone'];
        		$city = $_POST['city'];
          		$sector = $_POST['sector'];
            	$status = $_POST['status'];
              	$location = $_POST['location'];
              	$title = $_POST['title'];
              	$datee = $_POST['datee'];
    
			    $sql ="INSERT INTO post (title, name, phone, city, sector, status, location,datee) VALUES ('$title','$name', '$phone','$city','$sector', '$status', '$location','$datee')";
			    $obj = mysqli_query($connection, $sql);

			    if ($obj==true) {
			       ?>
			       		<div class="alert alert-success">
  							<strong>Success!</strong> Post successful SEE <a href="newsfeed.php">NEWSFEED
						</div>


			       <?php

			    }else{
			        echo mysqli_errno($connection) . ": " . mysqli_error($connection) . "\n";;
			    }
				}
				?>


					<h2>You want to To-let your home</h2>
  <!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open from</button>
					
                        <h5 class="hidden-xs"><span style="opacity: .6;">want to home?</span>
						<a href="newsfeed.php" style="color: #337ab7;font-weight: bold;">SEE HERE</a></h5>

                        <h5 class="visible-xs">want to home?</h5>
                        <a class="visible-xs" href="newsfeed.php" style="color: #337ab7;font-weight: bold; margin: 0 !important; padding: 0 !important;">SEE HERE</a>
                       	<h4><i class="fa fa-phone"></i> 01756 441122</h4>
				</div>
	        </div>
			<div id="next_content_arrow" class="hidden-xs">
				<a href="#" id="next_content_arrow_scroll"><i class="fa fa-angle-down fa-2x"></i></a>
			</div>
	    </div>
      <!-- END SLIDER AREA -->
      
		<div class="modal fade" id="hireTutorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog ezCustTrans" style="margin-top: 50px !important;">
		    	<div class="modal-content" style="border-radius: 0px !important;">
		    		<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
		  	</div>
		</div>
    </header>
    

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <h3 class="modal-title" id="myModalLabel" style="color: #0072bf;">Fill up your requirements for free</h3>
			<p style="font-size: 14px;">Fill up your requirements within minutes. </p><hr>
		</div>
				    <form class="form-horizontal parent_registration_form" id="parent_registration_form" method="post" role="form">
				    	<div class="modal-body">
				    		<div id="parent_registration_form_first_part">
				    			<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">

			<?php 
			    
			    include('database.php');
			   if (isset($_SESSION['name'])) {
			   		$username = $_SESSION['name'];
			   		$sql = "SELECT * FROM admin WHERE name = '$username'";
			   		$obj = mysqli_query($connection, $sql);

			   		foreach ($obj as $key => $value) {
			   		

			?>



								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<input type="hidden" required="required" class="form-control" name="name" id="full_name" placeholder="Name" value="<?php echo $value['name']; ?>">
								    	</div>
								  	</div>

								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<input type="hidden" required="required" class="form-control" name="phone" id="full_name" placeholder="Phone number" value="<?php echo $value['phone']; ?>">
								    	</div>
								  	</div>
			<?php } } ?>
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<input type="text" required="required" class="form-control" name="title" id="full_name" placeholder="title for to-let">
								    	</div>
								  	</div>
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<input type="date" required="required" class="form-control" name="datee" id="full_name" ">
								    	</div>
								  	</div>
									<div class="col-sm-12 col-xs-12">
								    	<select class="form-control selcity" name="city" id="selcity" required="required">
											<option value="1">--Select One--</option>
											<option value="Dhaka">Dhaka</option>
										</select>
								    </div>
								  	</div>
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
									    	<select class="form-control sellocation" name="sector" id="sellocation" required="required">
												<option>Select Location</option>
												<option value="Banani">Banani</option>
												<option value="Uttara">Uttara</option>
												<option value="Nikunjo">Nikunjo</option>
											</select>
										</div>
								  	</div>
							  	
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
									    	<select class="form-control selcat" name="status" id="selcat" required="required">
												<option value="">Select Category</option>
												<option value="Bachalor">Bachalor </option>
												<option value="Family">Family </option>
												<option value="Sub-let"> Sub-let</option>										</select>
										</div>
								  	</div>
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<input type="text" required="required" class="form-control" name="phone" id="full_name" placeholder="Phone number" ">
								    	</div>
								  	</div>
								  	<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">
								    	<div class="col-sm-12 col-xs-12">
								    		<textarea name="location" rows="3" cols="70" placeholder="HOUSE NO | ROAD NO "></textarea>
								    	</div>
								  	</div>								  	
							  	</div>
						  	</div>
				    	</div>
					    <div class="modal-footer">
	        				<button type="submit" name="submit" class="btn btn-caretutors" >POST</button>
							<p> <i class="fa fa-check-square" aria-hidden="true"></i> If you are confirm then submit</p>
	      				</div>

      				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
    

 <section id="upper_footer">
	<div class="container"> 
    	<div class="row">
    		<div class="col-lg-12 col-md-12">
	            <!-- BEGAIN SERVICE  -->
	            <div class="service_area">
	              <div class="row">
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInLeft">
	                    <h2 class="service_title">ABOUT US</h2>
	                    <p style="text-align: justify;">to-let.com- The first ever online to-let matching platform in Bangladesh. </p>
	                  </div>
	                </div>
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInRight">
	                    <h2 class="service_title">SUPPORT</h2>
	                    <p>
	                    	<a style="color: #448aff;" href="http://caretutors.com/landing/contact">CONTACT</a>
	                    	<br>
	                    	<a style="color: #448aff;" href="http://caretutors.com/landing/faq">FAQ</a>
	                    </p>
	                  </div>
	                </div>
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInLeft">
	                    <h2 class="service_title">CONNECT</h2>
	                    <div class="footer_left">
							<ul class="social_nav">
								<li><a target="_blank" href="https://www.facebook.com/CareTutors"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/caretutors"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://plus.google.com/u/0/104260980042042571554"><i class="fa fa-google-plus"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/company/care-tutors"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
	                  </div>
	                </div>             
	              </div>
	            </div>
	          </div>
    	</div>
  	</div>
</section>


<?php include('footer.php'); ?>


<?php 
	}else{
	
?>

<html lang="en" class=" js csstransitions"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>TO-LET for home</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="http://caretutors.com/assets/img/favicon.png">

    <link href="http://caretutors.com/assets/landing/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="http://caretutors.com/assets/landing/css/font-awesome.min.css" rel="stylesheet">
   
    <!-- Main structure css file -->
    <link href="http://caretutors.com/assets/landing/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://caretutors.com/assets/landing/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="http://caretutors.com/assets/landing/css/build.css">
    
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
                           
							<li><a href="index.php">Home</a></li>
							<li><a style="cursor: pointer;" data-toggle="modal" data-target="#myModa">News feed</a></li>
							<li><a href="registration.php">Registration</a></li>               
							<li><a href="#" >contract</a></li>
                            <li><a href="login.php">Login</a></li>               

							                        
						</ul>           
					</div><!--/.nav-collapse -->
				</div>     
			</nav>  
		</div>
      <!-- END MENU -->

       <!-- BEGIN SLIDER AREA-->
	    <div class="slider_area ">
	        <!-- BEGIN SLIDER-->          
	        <div id="slides"  style="position: relative; overflow: hidden; width: 100%; height: 700px;">
				<div class="slides-control container" style="position: relative; height: 100%; width: 1349px; left: -2698px;">
					<ul class="slides-container" style="margin: 0px; padding: 0px; list-style: none; position: relative; height: 100%; display: block;">
							<!-- THE FIRST SLIDE-->
						<li style="display: block; left: 2698px; position: absolute; overflow: hidden; height: 100%; width: 1349px; top: 0px; z-index: 0; margin-left: -160px">
							<!-- FIRST SLIDE OVERLAY -->
							<div class="slider_overlay">
							</div>
								<!-- FIRST SLIDE MAIN IMAGE -->
								<img src="landing/img/cover.jpg" alt="img" style="backface-visibility: hidden; position: absolute; left: 0px; top: -249px; z-index: -1; max-width: none; height: 946.333px; width: 1349px;">
						</li>
					</ul>
				</div>
				<!-- BEGAIN SLIDER NAVIGATION -->
				
				<!-- FIRST SLIDE CAPTION-->
	<div class="slider_caption">

			
					<h2>You want to To-let your home</h2>
  <!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open from</button>
					
                        <h5 class="hidden-xs"><span style="opacity: .6;">want to home?</span>
						<a href="newsfeed.php" style="color: #337ab7;font-weight: bold;">SEE HERE</a></h5>

                        <h5 class="visible-xs">want to home?</h5>
                        <a class="visible-xs" href="newsfeed.php" style="color: #337ab7;font-weight: bold; margin: 0 !important; padding: 0 !important;">SEE HERE</a>
                       	<h4><i class="fa fa-phone"></i> 01756 441122</h4>
				</div>
	        </div>
			<div id="next_content_arrow" class="hidden-xs">
				<a href="#" id="next_content_arrow_scroll"><i class="fa fa-angle-down fa-2x"></i></a>
			</div>
	    </div>
      <!-- END SLIDER AREA -->
      
		<div class="modal fade" id="hireTutorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog ezCustTrans" style="margin-top: 50px !important;">
		    	<div class="modal-content" style="border-radius: 0px !important;">
		    		<div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
		  	</div>
		</div>
    </header>
    

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        
				    <form class="form-horizontal parent_registration_form" id="parent_registration_form" method="post" role="form">
				    	<div class="modal-body">
				    		<div id="parent_registration_form_first_part">
				    			<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 input_margin_bottom">

									<div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Registration/Login First</h4>
								      </div>
								      <div class="modal-body">
								        <p><a href="registration.php">Registration</a></p><br>
								        <p><a href="login.php">Login</a></p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>

							  	
							  	</div>
						  	</div>
				    	</div>
					    

      				</form>
        </div>
       
      </div>
      
    </div>
  </div>
   
    

 <section id="upper_footer">
	<div class="container"> 
    	<div class="row">
    		<div class="col-lg-12 col-md-12">
	            <!-- BEGAIN SERVICE  -->
	            <div class="service_area">
	              <div class="row">
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInLeft">
	                    <h2 class="service_title">ABOUT US</h2>
	                    <p style="text-align: justify;">to-let.com- The first ever online to-let matching platform in Bangladesh. </p>
	                  </div>
	                </div>
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInRight">
	                    <h2 class="service_title">SUPPORT</h2>
	                    <p>
	                    	<a style="color: #448aff;" href="">CONTACT</a>
	                    	<br>
	                    	<a style="color: #448aff;" href="">FAQ</a>
	                    </p>
	                  </div>
	                </div>
	                <div class="col-lg-4 col-md-4 col-sm-4">
	                  <!-- BEGAIN SINGLE SERVICE -->
	                  <div class="single_service wow fadeInLeft">
	                    <h2 class="service_title">CONNECT</h2>
	                    <div class="footer_left">
							<ul class="social_nav">
								<li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
	                  </div>
	                </div>             
	              </div>
	            </div>
	          </div>
    	</div>
  	</div>
</section>


<?php

		include('footer.php');


	}

?>

<div id="myModa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration/Login First</h4>
      </div>
      <div class="modal-body">
        <p><a href="registration.php">Registration</a></p><br>
        <p><a href="login.php">Login</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>