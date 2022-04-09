<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks 10x10</title>
</head>
<body>
  <?php 
      if(isset($_GET['error'])){
        if($_GET['error']=="emptyspaces"){
          echo '<p class="error">Fill in all fields</p>';
        }
        if($_GET['error']=="no"){
          echo '<p class="errors"> First column must be the same size with second row </p>';
        }
      }
  ?>

  <form id="size" method="post" action="matriks1.php">
    <h3>Matrix 1</h3>
    <a>Rows: </a>
     <input type="text" name="baris1" placeholder="Enter rows"><br><br>
     <a>Columns: </a>
     <input type="text" name="kolum1" placeholder="Columns">
     <!-- Matrix 2 -->
     <h3>Matrix 2</h3>
     <a>Rows: </a>
     <input type="text" name="baris2" placeholder="Enter rows"><br><br>
     <a>Columns: </a>
     <input type="text" name="kolum2" placeholder="Columns">
     <button type="submit" name="size-submit">Submit</button>
  </form>
</body>
</html>