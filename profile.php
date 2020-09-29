<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MEDO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="fontawesome/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css/aos.css">
		<script type="text/javascript">
		$(document).ready(function(){
		  $("#searchId").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#mytable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
		</script>
    <link rel="stylesheet" href="css/ionicons.min.css">
<link rel=icon href=images/favicon.png sizes="16px*8px" type="image/png">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
	<style media="screen">
		td{word-break: break-all;}
		th{color: black;}
	</style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<!-- Include the above in your HEAD tag ---------->
<?php
include 'lib.php';

$id=$_SESSION['id'];
$user_type=$_SESSION['user_type'];
$query="SELECT * FROM `table` WHERE `user_id`='$id'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_array($data);
 ?>
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <?php echo "<img src='uploads/".$row['image']."'height='50' width='50'>"; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <?php echo $row['first_name']." ".$row['last_name'];
																		 ?>
                                    </h5>
                                    <h6>
                                      <?php
																			echo $row['user_type'] ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
																<?php
																	if ($row['user_type']=='Civilian') {
																	echo "<li class='nav-item'>";
																	echo "<a class='nav-link' id='document-tab' data-toggle='tab' href='#document' role='tab' aria-controls='document' aria-selected='false'>My Prescription</a>";
																echo "</li>";
															}
															else{
														echo "<li class='nav-item'>";
															echo "<a class='nav-link' id='profile-tab' data-toggle='tab' href='#profile' role='tab' aria-controls='profile' aria-selected='false'>Add Prescription</a>";
													echo " </li>";
													echo "<li class='nav-item'>";
													echo "<a class='nav-link' id='document-tab' data-toggle='tab' href='#document' role='tab' aria-controls='document' aria-selected='false'>My Prescription</a>";
												echo "</li>";
													}


													?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 editButton">
                        <?php echo "<a href='update.php?id=".$row['user_id']."'>Edit Profile</a>" ?>
												<br />
												<a href="logout.php">Logout</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                           <div class="col-md-6 ftco-animate">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6 ftco-animate">
                                                <p><?php  echo $row['user_id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ftco-animate">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6 ftco-animate">
                                                <p><?php echo $row['username']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ftco-animate">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6 ftco-animate">
                                                <p><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" style="color:#0062cc;"><?php echo $row['email']; ?></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ftco-animate">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6 ftco-animate">
                                                <p><?php echo $row['contact_no'] ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
																					<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
					                                    <div class="row register-form">
					                                        <div class="col-md-6">
																										<form action="documents.php" method="post" name="myform" enctype="multipart/form-data">
																											<div class='form-group ftco-animate'>
																													<label>Patient's ID*</label>
																													<input type='number' class='form-control ftco-animate' name='patient_id' placeholder='Fullfilled by Doctor or Laboratorian' id='patient_id' <?php if (isset($patient_id)) {echo "disabled=\"disabled\"";} ?> />
																											</div>
																											<div class='form-group ftco-animate'>
																												<label>Patient's AGE</label>
																											<input type='text' class='form-control ftco-animate' name='patient_age' placeholder='Fullilled by Doctor or Laboratorian' id='patient_age' <?php if(isset($patient_id)) {echo "disabled=\"disabled\"";} ?> />
																										</div>

																										<div class='form-group ftco-animate'>
																											<label>Disease</label>
																										<input type='text' class='form-control ftco-animate' name='disease' placeholder='Fullilled by Doctor' id='disease' <?php if ($user_type=='Laboratorian') {echo "disabled=\"disabled\"";} ?> />
																									</div>
																										  <div class="form-group ftco-animate">
																								 									<label>Document Name</label>
					                                                <input type="text" class="form-control ftco-animate" placeholder="Fullfilled by Laboratorian" name="doc_name" id="doc" <?php if ($user_type=='Doctor') {echo "disabled=\"disabled\"";} ?>  />
					                                            </div>
						                                            <div class="form-group ftco-animate">
																													<label>Document File *</label>
						                                                <input type="file" class="form-control ftco-animate" name="doc" id="image" />
																														<?php
																														if ($user_type=='Doctor') {
																															echo "<input type='hidden' name='doctor_id' value='".$id."'>";
																														}
																														if ($user_type=='Laboratorian') {
																															echo "<input type='hidden' name='lab_id' value='".$id."'>";
																														}
																														 ?>
																														<input type="hidden" name="user_type" value="<?php echo $user_type; ?>">
						                                            </div>
																										 <input type="submit" class="btnRegister ftco-animate" name="upload" value="upload"/>
					                                        </div>
					                                        <div class="col-md-6">
																										<?php

																										if ($user_type=='Doctor') {
																											echo "<div class='form-group ftco-animate'>";
																											echo "<label>Laboratorian's ID*</label>";
																											echo "<input type='number' class='form-control ftco-animate' placeholder='Fullfilled by Doctor' name='lab_id' id='lab_id' />";
																											echo "</div>";
																										}
																										if ($user_type=='Laboratorian') {
																											echo "<div class='form-group ftco-animate'>";
																											echo "<label>Doctor's ID*</label>";
																											echo "<input type='number' class='form-control ftco-animate' placeholder='Fullfilled by Laboratorian' name='doctor_id' id='doctor_id' />";
																											echo "</div>";
																										}
																										 ?>
																										<div class='form-group ftco-animate'>
																											<label>Medicine and Dosage</label>
																											<textarea name='desc' rows='6' cols='80' class='form-control ftco-animate' placeholder='Fullfilled by Laboratorian or Doctor' name='dis_desc' id='dis_desc' ></textarea>
																									</div>
																										<div class="form-group ftco-animate">
																												<label>Document Description</label>
																												<textarea name="desc" rows="5" cols="80" class="form-control ftco-animate" placeholder="Fullfilled by Laboratorian" name="desc" id="desc" <?php if ($user_type=='Doctor') {echo "disabled=\"disabled\"";} ?> ></textarea>
																										</div>
					                                        </div>
																									</form>
					                                    </div>
					                                </div>
                                         </div>
                        		</div>
														<div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
																				<div class="row ftco-animate">
																					<?php
																					if ($row['user_type']=='Civilian') {
																						echo "<input id='searchId' type='text' placeholder='Search Prescription'>";
																						echo "<br>";
								$query="SELECT * FROM `documents`";
																						$data=mysqli_query($conn,$query);
																						echo "<table id='doc_content'>";
																						echo "<thead>";
																						echo "<tr colspan='5'>";
																						echo "<th>Document File</th>";
																						echo "<th>Document Name</th>";
																						echo "<th>Description</th>";
																						echo "<th>Date</th>";
																						echo "<th>Action</th>";
																						echo "</tr>";
																						echo "</thead>";
																						echo "<tbody id='mytable'>";
																					while ($row=mysqli_fetch_array($data)) {
																						if ($id==$row['patient_id']) {
																						echo "<tr>";
																						echo "<td><img src='documents/".$row['doc']."'height='150' width='150' /></td>";
																						echo "<td>".$row['doc_name']."</td>";
																						echo "<td>".$row['desc']."</td>";
																						echo "<td>".$row['date']."</td>";
																						echo "<td><a href='delete.php?id=".$row['doc_id']."'>Delete</a></td>";
																						echo "</tr>";
																					}
																					}
																					echo "</tbody>";
																				echo "</table>";

																					}

																					if ($row['user_type']=='Doctor') {
																						echo "<input id='searchId' type='text' placeholder='Search Prescription'>";
																						echo "<br>";
								$query="SELECT * FROM `documents`";
																						$data=mysqli_query($conn,$query);
																						echo "<table id='doc_content'>";
																						echo "<thead>";
																						echo "<tr colspan='5'>";
																						echo "<th>Document File</th>";
																						echo "<th>Document Name</th>";
																						echo "<th>Description</th>";
																						echo "<th>Date</th>";
																						echo "<th>Action</th>";
																						echo "<th>Action</th>";
																						echo "</tr>";
																						echo "</thead>";
																						echo "<tbody id='mytable'>";
																					while ($row=mysqli_fetch_array($data)) {
																						if ($id==$row['doctor_id']) {
																						echo "<tr>";
																						echo "<td><img src='documents/".$row['doc']."'height='150' width='150' /></td>";
																						echo "<td>".$row['doc_name']."</td>";
																						echo "<td>".$row['desc']."</td>";
																						echo "<td>".$row['date']."</td>";
																						echo "<td><a href='docupdate.php?id=".$row['doc_id']."&user_type=Doctor&doctor_id=".$row['doctor_id']."'>Update</a>";
																						echo "<td><a href='delete.php?id=".$row['doc_id']."'>Delete</a></td>";
																						echo "</tr>";
																					}
																					}
																					echo "</tbody>";
																				echo "</table>";

																					}

																					if ($row['user_type']=='Laboratorian') {
																						echo "<input id='searchId' type='text' placeholder='Search Prescription'>";
																						echo "<br>";
								$query="SELECT * FROM `documents`";
																						$data=mysqli_query($conn,$query);
																						echo "<table id='doc_content'>";
																						echo "<thead>";
																						echo "<tr colspan='5'>";
																						echo "<th>Document File</th>";
																						echo "<th>Document Name</th>";
																						echo "<th>Description</th>";
																						echo "<th>Date</th>";
																						echo "<th>Action</th>";
																						echo "<th>Action</th>";
																						echo "</tr>";
																						echo "</thead>";
																						echo "<tbody id='mytable'>";
																					while ($row=mysqli_fetch_array($data)) {
																						if ($id==$row['lab_id']) {
																						echo "<tr>";
																						echo "<td><img src='documents/".$row['doc']."'height='150' width='150' /></td>";
																						echo "<td>".$row['doc_name']."</td>";
																						echo "<td>".$row['desc']."</td>";
																						echo "<td>".$row['date']."</td>";
																						echo "<td><a href='docupdate.php?id=".$row['doc_id']."&user_type=Laboratorian&lab_id=".$row['lab_id']."'>Update</a>";

																						echo "<td><a href='delete.php?id=".$row['doc_id']."'>Delete</a></td>";
																						echo "</tr>";
																					}
																					}
																					echo "</tbody>";
																				echo "</table>";

																					}
																					?>
																				 </div>
														</div>

                </div>
        </div>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#01c8ee"/></svg></div>
<script type="text/javascript">
$('document').ready(function() {
	$('#mytable img').click(function(){
		var img=$(this).attr('src')
		$('body').append('<div class="curtain"></div>');
		$('body').append('<img src="'+img+'" class="light">');
		$('body').append('<img src="images/x.svg" class="cross">');
 $('.light').animate({'opacity':'1','top':'150px'},500);
		$('.cross').click(function(){
			$('.light').remove();
			$('.curtain').remove();
			$('.cross').remove();
		})
		$(document).on('keydown', function(e) {
			if(e.keyCode===27){
				$('.curtain').remove();
				$('.light').remove();
				$('.cross').remove();
			}
		})
	})
});

</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
