<?php
// Initialize the session
session_start();
    //Call database config.php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Handling</title>
</head>
<body style="background:url('assets/img/treerainbow.jpg'); background-color:black;">
  <center>
    <h1>File Upload with <span style="color:dodgerblue">PHP </span> and <span style="color:deeppink;">SQL</span><span> Maria DB</span></h1><hr><br>

    <!-- Must be added enctype for the file to be uploaded successfully -->
    <form method="POST" action="file_handling_action.php" enctype="multipart/form-data" style="padding: 10px;">
      <input type="file" name="file">
      <input style="padding: 10px; border:none; color:white; background-color:blueviolet;" type="submit"  name="upload" value="Upload">
    </form>

    <!-- Display uploaded images -->
    <table>
      <?php 
      $tampil = mysqli_query($link, "SELECT * FROM upload");
      while($data = mysqli_fetch_array($tampil)):
      ?>
      <tr> 
        <td>
          <br><img src="<?php echo "assets/file/".$data['file_name'] ?>">
        </td>
      </tr>
      <?php endwhile;?>
    </table>
  </center>
</body>
</html>