<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('location:login.php');
}
if(!isset($_GET['id']))
{
	$access="What to update?";
	header('location:error.php?conflict='.$access);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MEDO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
<link rel=icon href=images/favicon.png sizes="16px*8px" type="image/png">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<?php
$user_type=$_GET['user_type'];
$id=$_GET['id'];
include 'lib.php';
if($user_type=='Doctor')
{
  $doctor_id=$_GET['doctor_id'];
}
if($user_type=='Laboratorian')
{
  $lab_id=$_GET['lab_id'];
}
$query="SELECT * FROM `documents` WHERE `doc_id`='$id' ";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_array($data);
 ?>

    <div class="container register ftco-animate">
                    <div class="row ftco-animate">
                        <div class="col-md-12 register-right">

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                              <h3 class="register-heading">Update Prescription</h3>
                                    <div class="row register-form">

                                      <div class="col-md-6">
                                        <form action="documents.php" method="post" name="myform" enctype="multipart/form-data">
                                          <div class='form-group ftco-animate'>
                                              <label>Patient's ID*</label>
                                              <input type='number' class='form-control ftco-animate' name='patient_id' placeholder='Fullfilled by Doctor or Laboratorian' id='patient_id' value="<?php echo $row['patient_id'];?>" />
                                          </div>
                                          <div class='form-group ftco-animate'>
                                            <label>Patient's AGE</label>
                                          <input type='text' class='form-control ftco-animate' name='patient_age' placeholder='Fullilled by Doctor or Laboratorian' id='patient_age' value="<?php echo $row['patient_age'];?>" />
                                        </div>

                                        <div class='form-group ftco-animate'>
                                          <label>Disease</label>
                                        <input type='text' class='form-control ftco-animate' name='disease' placeholder='Fullilled by Doctor' id='disease' value='<?php echo $row['disease']?>' disabled="<?php if ($user_type=='Doctor')
                                        {echo 'disabled=\'disabled\'';} ?>"/>
                                      </div>
                                          <div class="form-group ftco-animate">
                                                      <label>Document Name</label>
                                              <input type="text" class="form-control ftco-animate" placeholder="Fullfilled by Laboratorian" name="doc_name" id="doc" value="<?php echo $row['doc_name']?>" <?php if ($user_type=='Doctor') {echo "disabled=\"disabled\"";} ?>  />
                                          </div>

                                                <?php
                                                if ($user_type=='Doctor') {
                                                  echo "<input type='hidden' name='doctor_id' value='".$doctor_id."'>";
                                                }
                                                if ($user_type=='Laboratorian') {
                                                  echo "<input type='hidden' name='lab_id' value='".$lab_id."'>";
                                                }
                                                 ?>
                                                <input type="hidden" name="user_type" value="<?php echo $user_type; ?>">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                         <input type="submit" class="btnRegister ftco-animate" name="upload" value="upload"/>
                                      </div>
                                      <div class="col-md-6">
                                        <?php

                                        if ($user_type=='Doctor') {
                                          echo "<div class='form-group ftco-animate'>";
                                          echo "<label>Laboratorian's ID*</label>";
                                          echo "<input type='number' class='form-control ftco-animate' placeholder='Fullfilled by Doctor' value='".$row['lab_id']."' name='lab_id' id='lab_id'  />";
                                          echo "</div>";
                                        }

                                        if ($user_type=='Laboratorian') {
                                          echo "<div class='form-group ftco-animate'>";
                                          echo "<label>Doctor's ID*</label>";
                                          echo "<input type='number' class='form-control ftco-animate' placeholder='Fullfilled by Laboratorian'  value='".$row['doctor_id']."'name='doctor_id' id='doctor_id' />";
                                          echo "</div>";
                                        }
                                         ?>
                                        <div class='form-group ftco-animate'>
                                          <label>Medicine and Dosage</label>
                                          <textarea name='desc' rows='6' cols='80' class='form-control ftco-animate' placeholder='Fullfilled by Laboratorian or Doctor' value='<?php echo $row["dis_desc"];?>' name='dis_desc' id='dis_desc' ></textarea>
                                      </div>
                                        <div class="form-group ftco-animate">
                                            <label>Document Description</label>
                                            <textarea name="desc" rows="5" cols="80" class="form-control ftco-animate" placeholder="Fullfilled by Laboratorian" value="<?php echo $row['desc'];?>" id="desc" <?php if ($user_type=='Doctor') {echo "disabled=\"disabled\"";} ?> ></textarea>
                                        </div>
                                      </div>
                                      </form>


                                    </div>
                               </div>





                            </div>
                        </div>
                    </div>

                </div>

<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#01c8ee"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
