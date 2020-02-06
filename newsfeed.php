<?php 
    session_start();
    include('database.php');
   if (isset($_SESSION['name'])) {

?>

<?php include('header.php'); ?>


<?php 
    $sql = "SELECT * FROM post ORDER BY `id` DESC";
    $obj = mysqli_query($connection,$sql);
   foreach ($obj as $key => $value) {
    
?>





<div class="container" style=" margin-top: 100px">
<div class="panel panel-primary" style="margin-bottom: 25px !important; border-bottom: 1px solid #e0e0e0 !important; border-top-color: #FFFFFF !important; border-left-color: #FFFFFF !important; border-right-color: #FFFFFF !important; -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);">
						  <div class="panel-body">
						    <div class="row">
								<div class="col-md-9 col-sm-12">
									<p style="font-size: 12px !important; color: #b3b3b3; font-weight: bold !important; margin: 0 !important;">Post ID -  <?php echo $value['id']; ?></p>
									<p style="font-size: 18px; font-weight: 500; margin: 0 !important; color: #212121;"><?php echo $value['title']; ?></p>
									<p style="font-size: 13px !important; margin: 0 !important; font-weight: 500;"><span style="font-weight: 600; color: #212121;">Category : </span><?php echo $value['city']; ?><span style="font-weight: 600; color: #212121;">, Area : </span><?php echo $value['sector'];?>,</p>
									<p style="font-size: 13px !important; margin-top: 8px !important; margin-bottom: 0px !important;"><span style="font-weight: 600; color: #212121;">Name : <?php echo $value['name']; ?> </span> </p>
									 
									<p style="font-size: 13px !important; margin-top: 0px !important; margin-bottom: 8px !important;"><span style="font-weight: 600; color: #212121;">Phone :</span> <?php echo $value['phone']; ?></p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 13px !important; font-weight: 600; color: #212121;"><i class="fa fa-map-marker" style="color: #1976d2;"></i> <?php echo $value['city']; ?>, <?php echo $value['sector']; ?>, <?php echo $value['location']; ?></p>
									<p style="font-size: 13px !important;"><span style="font-weight: 600; color: #212121;">Other Requirements - </span>Interested are Must be <?php echo $value['status']; ?></p>
								</div>
								<div class="col-md-3 col-sm-12 footer">
									<div class="col-md-12 col-xs-3 outer_share" style="padding-right: 0px;" align="right">
										<div id="inner_share">
											
										</div>
					                </div>
					                <div class="col-md-12 col-xs-9 apply" style="padding-right: 0px; margin-top: 80px;" align="right">
					                					             
					                	
					                	<br><br>
					                	
					                	<p class="pull-right" style="font-size: 10px">Posted on <?php echo $value['datee']; ?></p>
					                </div>
								</div>
							</div>
						  </div>
					  </div>
</div>

<?php } ?>

<?php include('footer.php'); ?>

<?php }else{
	header("Location:login.php");
} ?>