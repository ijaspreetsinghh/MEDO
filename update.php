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
<script type="text/javascript">
  function myf(){
    document.getElementById('new_email').style.border='';
    document.getElementById('new_first').style.border='';
    document.getElementById('new_last').style.border='';
    document.getElementById('new_pass1').style.border='';
    document.getElementById('new_pass2').style.border='';
    document.getElementById('new_image').style.border='';
    document.getElementById('new_user').style.border='';
document.getElementById('new_contact').style.border='';

var first=document.forms['myform']['new_first'].value;
var last=document.forms['myform']['new_last'].value;
var email=document.forms['myform']['new_email'].value;
var pass1=document.forms['myform']['new_pass1'].value;
var pass2=document.forms['myform']['new_pass2'].value;
var img=document.forms['myform']['new_image'].value;
var user=document.forms['myform']['new_user'].value;
var cont=document.forms['myform']['new_contact'].value;
var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var reimg= /\.(gif|jpg|jpeg|tiff|png)$/i;
if (first=="") {
  alert("This field is required");
  document.getElementById('new_first').style.border='2px solid red';
  document.getElementById('new_first').focus();
return false;
}
if (last=="") {
  alert("This field is required");
  document.getElementById('new_last').style.border='2px solid red';
  document.getElementById('new_last').focus();
return false;
}
if (user=="") {
  alert("This field is required");
  document.getElementById('new_user').style.border='2px solid red';
  document.getElementById('new_user').focus();
return false;
}
if (re.test(email)==false) {
  alert('Invalid Email Address');
  document.getElementById('new_email').style.border='2px solid red';
  document.getElementById('new_email').focus();
return false;
}
if (pass1=="") {
  alert("Please Enter a valid Password.");
  document.getElementById('new_pass1').style.border='2px solid red';
  document.getElementById('new_pass1').focus();
  return false;
}
else if (pass1!=pass2){
  alert('Password do not Match. Please check.');
  document.getElementById('new_pass1').style.border='2px solid red';
  document.getElementById('new_pass1').focus();
return false;}

if (cont.length!=10) {
  alert("Invalid Number");
  document.getElementById('new_contact').style.border='2px solid red';
  document.getElementById('new_contact').focus();
return false;
}

if(reimg.test(img)==false){
	alert("Invali File Format.");
  document.getElementById('new_image').style.border='2px solid red';
  document.getElementById('new_image').focus();
	return false;}
  }
</script>


<?php
$id=$_GET['id'];
include 'lib.php';
$query="SELECT * FROM `table` WHERE `user_id`='$id' ";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_array($data);
 ?>

    <div class="container register ftco-animate">
                    <div class="row ftco-animate">
                        <div class="col-md-12 register-right">

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                              <h3 class="register-heading">Update Information</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group ftco-animate">
                                     <form action="update2.php" method="post" name="myform" onsubmit="return myf()" enctype="multipart/form-data">
                                       <label>First Name</label>
                                                <input type="text" class="form-control ftco-animate" placeholder="First Name *" name="new_first_name" id="first" value="<?php echo $row['first_name']?>" />
                                            </div>

                                            <div class="form-group">
                                              <label>Password</label>
                                                <input type="password" class="form-control ftco-animate" name="new_password" placeholder="Password *" id="pass1" value="<?php echo $row['password'] ?>" />
                                            </div>
                                              <a href="profile.php" class="ftco-animate goback" style="font-weight:700;text-align:center;">Go Back</a>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Last Name.</label>
                                                <input type="text" class="form-control ftco-animate" placeholder="Last Name *" name="new_last_name" id="last" value="<?php echo $row['last_name']?>" />
                                            </div>
                                            <div class="form-group">
                                              <label> Contact No.</label>
                                                <input type="number" class="form-control ftco-animate" name="new_contact" placeholder="Contact No. *" id="contact" value="<?php echo $row['contact_no']?>" />
                                            </div>

                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                              <input type="submit" class="btnRegister ftco-animate" name="update" value="submit"/>
                                            </form>
                                        </div>
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
