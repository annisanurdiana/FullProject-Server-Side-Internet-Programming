<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Intro - Quory</title>
    <link rel="stylesheet" href="../SSIP Project/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../SSIP Project/assets/css/home.css">
</head>

<body id="page-top">

        <div class="container-fluid" style="text-align: center;">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                 <h3 id="greeting">!</h3><br><br>
                    <div style="text-align: center;">
                        <h1>Under Constructure!</h1>
                        <h3><br>
                            Sorry for the inconvenience,
                            this page is under construction.
                            Awesome features will be coming soon</h3>
                        <p><br><br>Back to <a href="logout.php" >Home</a></p>
                    </div>
            </div>
        

            
        <!-- Splashscreen -->
        <!-- <div class="intro">
            <h1 class="wellcome-header"> 
                <span class="wellcome">Wellcome to:</span>
                <a></a>
                <br><br>
                <span class="wellcome" style="color: rgb(221, 49, 255);">"Quory"</span>
            </h1>
        </div>   -->
        

    <script src="../SSIP Project/assets/js - home/greeting.js"></script>
    <script src="../SSIP Project/assets/js - home/home.js"></script>  <!-- Bootstrap JS v5.0-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- Jquery AJAX v3.6.0-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
</body>
</html>