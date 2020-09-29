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
    document.getElementById('email').style.border='';
    document.getElementById('first').style.border='';
    document.getElementById('last').style.border='';
    document.getElementById('pass1').style.border='';
    document.getElementById('pass2').style.border='';
    document.getElementById('image').style.border='';
    document.getElementById('contact').style.border='';
    document.getElementById('user').style.border='';
document.getElementById('gender').style.border='';

var first=document.forms['myform']['first'].value;
var last=document.forms['myform']['last'].value;
var email=document.forms['myform']['email'].value;
var pass1=document.forms['myform']['pass1'].value;
var pass2=document.forms['myform']['pass2'].value;
var img=document.forms['myform']['image'].value;
var user=document.forms['myform']['user'].value;
var cont=document.forms['myform']['contact'].value;
var gender=document.forms['myform']['gender'].value;
var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var reimg= /\.(gif|jpg|jpeg|tiff|png)$/i;
if (first=="") {
  alert("This field is required");
  document.getElementById('first').style.border='2px solid red';
  document.getElementById('first').focus();
return false;
}
if (last=="") {
  alert("This field is required");
  document.getElementById('last').style.border='2px solid red';
  document.getElementById('last').focus();
return false;
}
if (user=="") {
  alert("This field is required");
  document.getElementById('user').style.border='2px solid red';
  document.getElementById('user').focus();
return false;
}
if (re.test(email)==false) {
  alert('Invalid Email Address');
  document.getElementById('email').style.border='2px solid red';
  document.getElementById('email').focus();
return false;
}
if (pass1=="") {
  alert("Please Enter a valid Password.");
  document.getElementById('pass1').style.border='2px solid red';
  document.getElementById('pass1').focus();
  return false;
}
else if (pass1!=pass2){
  alert('Password do not Match. Please check.');
  document.getElementById('pass1').style.border='2px solid red';
  document.getElementById('pass1').focus();
return false;}

if (cont.length!=10) {
  alert("Invalid Number");
  document.getElementById('contact').style.border='2px solid red';
  document.getElementById('contact').focus();
  return false;
}

if(reimg.test(img)==false){
	alert("Invali File Format.");
  document.getElementById('image').style.border='2px solid red';
  document.getElementById('image').focus();
	return false;}
if (gender=="") {
  alert("Gender should be selected.");
  document.getElementById('genderid').style.border='2px solid red';
  document.getElementById('genderid').focus();
  return false;
}

  }
</script>
    <div class="container register ftco-animate">
                    <div class="row ftco-animate">

                        <div class="col-md-3 register-left ftco-animate">
                            <a href="index.php"><img src="images/jump.png" alt="jumping logo"/></a>
                            <h3 class="well ftco-animate">Register Now !!</h3>
                            <p class="ftco-animate">Welcome, <br>You are 30 seconds away from being the partner of the world's best fitness organization.</p>
                            <a href="login.php"><input type="submit" name="login" class="ftco-animate" value="Login Here"/><br/></a>
                        </div>

                        <div class="col-md-9 register-right">

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                              <h3 class="register-heading">Register as a Civilian</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group ftco-animate">
                                     <form action="registercheck.php" method="post" name="myform" onsubmit="return myf()" enctype="multipart/form-data">

                                                <input type="text" class="form-control ftco-animate" placeholder="First Name *" name="first_name" id="first" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control ftco-animate" placeholder="Username *" name="user" id="user" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control ftco-animate" name="password" placeholder="Password *" id="pass1" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control ftco-animate" name="contact" placeholder="Contact No. *" id="contact" value="" />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl" id="genderid">
                                                    <label class="radio inline ftco-animate">
                                                        <input type="radio" name="gender" id="gender" value="male">
                                                        <span> Male </span>
                                                    </label>
                                                    <label class="radio inline ftco-animate">
                                                        <input type="radio" name="gender" id="gender" value="female">
                                                        <span>Female </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a href="register.php" class="ftco-animate" style="font-weight:700;text-align:center;">Change Account Type</a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control ftco-animate" placeholder="Last Name *" name="last_name" id="last" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" minlength="10" maxlength="30" name="email" id="email" class="form-control ftco-animate" placeholder="Your Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                              <input type="password" class="form-control ftco-animate" name="password"  placeholder="Confirm Password *" id="pass2" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control ftco-animate" name="image" id="image" placeholder="Your Profile Picture *" value="" />
                                            </div>
                                              <input type="hidden" name="user_type" value="Civilian">
                                              <input type="submit" class="btnRegister ftco-animate" name="reg" value="submit"/>
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
