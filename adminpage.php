<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login_admin.php");
  exit;
}
?>
 
 <!-- admins -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>AdminPage - Quory</title>
  <link rel="stylesheet" href="../SSIP Project/assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="../SSIP Project/assets/css/home.css">
  <!-- Bootstrap CSS v5.0-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top" class="page_admin">

  <!-- New Add Modal -->
  <div class="modal fade" id="newAdminModal" tabindex="-1" aria-labelledby="newAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newAdminModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameAdminPg" placeholder="Enter full name">
            <label for="nameAdminPg">Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailAdminPg" placeholder="name@example.com">
            <label for="emailAdminPg">Email address</label>
          </div>
          <div class="form-floating">
            <input type="country" class="form-control" id="countryAdminPg" placeholder="country">
            <label for="countryAdminPg">Country</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick= "add_new()">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameAdminUpdate" placeholder="Enter full name">
            <label for="nameAdminUpdate">Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailAdminUpdate" placeholder="name@example.com">
            <label for="emailAdminUpdate">Email address</label>
          </div>
          <div class="form-floating">
            <input type="country" class="form-control" id="countryAdminUpdate" placeholder="country">
            <label for="countryAdminUpdate">Country</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick= "updateDetails()">Update</button>
          <input type="hidden" id="hiddenData"> 
        </div>
      </div>
    </div>
  </div>

  <!-- Header Page / Judul Halaman -->
  <div class="container my-4">
    <h1 class="text-center" id="greeting"></h1>
    <div class="info"  id="add_information">
      <p></p>
      <button class="infobtn" type="button" onclick="loadText()">Get Information</button>
    </div>
    <!-- Pop Up - New admin modal -->
    <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#newAdminModal">
    Add New Data
    </button>
    <a href="login.php"><button type="button" class="btn btn-dark my-4">Login With User Account</button></a>
    <a href="signup_admin.php" target="_blank_"><button type="button" class="btn btn-dark my-4">Sign Up New Admin</button></a>
    <a href="logout.php"><button type="button" class="btn btn-dark my-4">Log Out</button></a>
    <!-- Display Table -->
    <div id="displayDataTable"> </div>
  </div>


  <!-- Splashscreen -->
  <div class="intro">
      <h1 class="wellcome-header"> 
        <span class="wellcome">Login Success!</span>
        <a></a>
        <br><br>
        <span class="wellcome" style="color: white;">You Are Admin</span>
     </h1>
  </div> 
        


  <!-- Local Javascript -->
  <script src="../SSIP Project/assets/js - home/home.js"></script>
  <!-- Bootstrap JS v5.0-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <!-- Jquery AJAX v3.6.0-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 


  <!-- AJAX JQUERY JS -->

  <script> 
  // Display data so the data tidak hilang
  $(document).ready(function(){
    displayData();
  });

  // Display Data
  function displayData(){
    let displayData = "true";
    $.ajax({
      url:"adminpage_display.php",
      type: 'post',
      data: { 
        displaySend:displayData
      },
      success:function(data,status){
        $('#displayDataTable').html(data);
      }
    });
  }

    function add_new(){
      let fullnameAdd = $('#nameAdminPg').val(); // enter value only in the inside 
      let emailAdd = $('#emailAdminPg').val();
      let countryAdd = $('#countryAdminPg').val();

      // >> AJAX - Get Data from Server <<
      // The data who has inserted above will be stored here.
      $.ajax({
        url:'adminpage_insert.php',
        type: 'post',
        data:{
          fullnameSend:fullnameAdd,
          emailSend:emailAdd,
          countrySend:countryAdd
        },
        success: function(data, status){
          // check status
          console.log(status);
          // When we have submitted the modal pop up will disappear without us having to click close
          $('#newAdminModal').modal('hide')
          // function to display data
          displayData()
        }
      })
    }
  // Delete Record
  function deleteAdmin(deleteNum){
    $.ajax({
      url:"adminpage_delete.php",
      type:'post',
      data:{
        deleteSend:deleteNum
      },
      success:function(data, status){
        displayData();
      }
    });
  }

  // Update Function
  function getDetails(updateNum){
    $('#hiddenData').val(updateNum);

    $.post("adminpage_update.php", {updateNum:updateNum},function(data,status){

      // mengambil data sesuai id yang telah ditentukan dan menyimpannya kembali pada database 
      let adminNum = JSON.parse(data);
      $('#nameAdminUpdate').val(adminNum.fullname);
      $('#emailAdminUpdate').val(adminNum.email);
      $('#countryAdminUpdate').val(adminNum.country);
    });
    $('#updateModal').modal("show");
  }
  
    // onclick update event function - update data
    function updateDetails(){
      let nameAdminUpdate = $('#nameAdminUpdate').val();
      let emailAdminUpdate = $('#emailAdminUpdate').val();
      let countryAdminUpdate = $('#countryAdminUpdate').val();
      let hiddenData = $('#hiddenData').val();

      $.post("adminpage_update.php",{
        nameAdminUpdate: nameAdminUpdate,
        emailAdminUpdate: emailAdminUpdate,
        countryAdminUpdate: countryAdminUpdate,
        hiddenData: hiddenData
      }, function(data, status){
        $('#updateModal').modal('hide')
        displayData();
      });
    }

    // AJAX - use to exchange data from document txt
    function loadText(){
      // Create an XMLHttpRequest object
      const xhttp = new XMLHttpRequest();
      // Callback Function 
      // Should contain the code to execute when the response is ready.
      xhttp.onload = function(){
        document.getElementById("add_information").innerHTML = this.responseText;
      }
      // Send a request to a server.
      // POST is more robust and secure than GET, but GET is simpler and faster than POST.
      xhttp.open("GET","../SSIP Project/assets/text/ap_info.html");
      xhttp.send();
    }


  // Display Search Data
  // function displaySearchData(){
  //   let displayData = "true";
  //   $.ajax({
  //     url:"adminpage_search.php",
  //     type: 'post',
  //     data: { 
  //       displaySend:displayData
  //     },
  //     success:function(data,status){
  //       $('#dDataTable').html(data);
  //     }
  //   });
  // }


  </script>
</body>
</html>