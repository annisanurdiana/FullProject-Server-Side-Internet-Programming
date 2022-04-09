<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Location - Route</title>
</head>
<body style="background: url(../img/stars-colors.gif);">
<!-- 
Create a form that will have an input field for entering address via input field 
and a submit button which when clicked will submit the form. 
-->
<center>
<form method="POST">
  <p>
    <input type="text" name="alamat" placeholder="Enter address">
  </p>
  <input type="submit" name="submit_address">
</form>
<!-- 
PHP block that will be executed when the form submits. In that block, 
we will get the address entered by user in a separate variable.  
-->
<?php
  if (isset($_POST["submit_address"]))
  {
    $alamat = $_POST["alamat"];
    $alamat = str_replace(" ", "+", $alamat);
    ?>
  <!-- 
    I will create an iFrame tag to render the map. "&output=embed" is important since 
    it tells the Google Map’s server that we are going to embed the map in an iFrame. 
  -->
    <iframe width="70%" height="500" src="https://maps.google.com/maps?q=<?php echo $alamat; ?>&output=embed"></iframe>
    <?php
  }
?>
<!-- 
  Create a form again and that will have 2 input fields for entering latitude and longitude 
  via input field and a submit button which when clicked will submit the form. 
-->
<form method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
    <input type="submit" name="submit_coordinates">
</form>
<!-- 
  In that block, I will get the latitude and longitude coordinates entered by user in separate variables.  
-->
<?php
  if (isset($_POST["submit_coordinates"]))
  {
    $Latitude = $_POST["latitude"];
    $Longtitude = $_POST["longitude"];
    ?>
    <!-- 
      Lastly, I will create an iFrame tag and pass those coordinates to render the map
    -->
    <iframe width="70%" height="500" src="https://maps.google.com/maps?q=<?php echo $Latitude; ?>,<?php echo $Longtitude; ?>&output=embed"></iframe>
    <?php
    }
?>

</center>
</body>
</html>



