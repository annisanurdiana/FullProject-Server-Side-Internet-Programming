<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!-- ////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>My Repository</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
  <link rel="stylesheet" href="assets/css/Login-Form.css">
</head>

<body id="page-top">
  <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="swing" href="#">SSIP</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive"aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item nav-link js-scroll-trigger"><a class="nav-link active js-scroll-trigger" data-bs-hover-animate="pulse" href="index.html">Home</a></li>
          <li class="nav-item nav-link js-scroll-trigger"><a class="nav-link js-scroll-trigger"  data-bs-hover-animate="flash" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
    
  <section id="contact" class="content-section text-center" style="background: url('assets/img/black_n_snakes.gif');">
    <div class="container">
      <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-lg-8 mx-auto">
          <h2>My Repositories</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<a data-bs-hover-animate="flash" href="#">&nbsp;Display overview page</a>&nbsp;  </p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item"><a href="login.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Log-In</span></button></a></li>

              <li class="list-inline-item"><a href="signup.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Sign-Up</span></button></a></li>

              <li class="list-inline-item"><a href="adminpage.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;CRUD</span></button></a></li>

              <li class="list-inline-item"><a href="ss_pagination.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;SSP</span></button></a></li>
            </ul>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item"><a href="file_handling.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Upload</span></button></a></li>

              <li class="list-inline-item"><a href="assets/tbot/telegram_bot.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;ChatBot</span></button></a></li>

              <li class="list-inline-item"><a href="assets/mtx/matrix.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Matrix_1</span></button></a></li>

              <li class="list-inline-item"><a href="assets/mtx/_MATRIX_.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Matrix_2</span></button></a></li>
            </ul>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item"><a href="assets/location/location_route.php" target="_blank_">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Route</span></button></a></li>
                        
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week 5</span></button></a></li>
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week 6</span></button></a></li>
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week 7</span></button></a></li>
            </ul>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week ..</span></button></a></li>
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week ..</span></button></a></li>
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week ..</span></button></a></li>
              <li class="list-inline-item"><a href="#">&nbsp;<button class="btn btn-primary btn-lg btn-default" data-bs-hover-animate="swing" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;Week ..</span></button></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  <footer>
    <div class="container text-center">
      <p>Copyright ©&nbsp;Quory 2021</p>
    </div>
  </footer>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="assets/js/grayscale.js"></script>
</body>
</html>