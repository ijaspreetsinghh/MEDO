<?php
session_start();
if (isset($_SESSION['id'])) {
  header('location:profile.php');
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

if (isset($_COOKIE['user'])) {
  $user=$_COOKIE['user'];
  $pass=$_COOKIE['pass'];
}
else {
  $user="";
  $pass="";
}

 ?>

 <div class="container register ftco-animate login">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <a href="index.php"><img src="images/jump.png" alt="jumping logo"/></a>
                            <h3 class="well ftco-animate">Login Now !!</h3>
                            <p class="ftco-animate">Welcome Back, Partner.</p>
                            <a href="register.php"><input type="submit" name="login" class="ftco-animate" value="Register Here"/><br/></a>
                        </div>
                        <div class="col-md-9 register-right ">
                            <div class="tab-content " id="myTabContent">


                                <div class="tab-pane fade show active" id="doc" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading ftco-animate">Login Here</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6 logform">
                                            <div class="form-group">
                                              <form action="login1.php" method="post">
                                                <input type="text" class="form-control ftco-animate" placeholder="Username" name="user" value="<?php echo $user; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control ftco-animate" placeholder="Password" name="password" value="<?php echo $pass; ?>" />
                                            </div>
                                            <label class="checkcontainer">Remember Me
                                              <input type="checkbox" name="logincheck" checked="checked">
                                              <span class="checkmark"></span>
                                              </label>
                                            <input type="hidden" name="user_type" value="Doctor">
                                              <input type="submit" class="btnRegister ftco-animate" name="login" value="Login"/>
                                              </form>
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
