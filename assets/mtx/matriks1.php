<?php 
error_reporting(1);
// Initialize the session
session_start();
?>
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
  if(isset($_POST['size-submit'])){
    $baris1 = $_POST['baris1'];
    $kolum1 = $_POST['kolum1'];
    $baris2 = $_POST['baris2'];
    $kolum2 = $_POST['kolum2'];

    if (empty($baris1)|| empty($baris2)|| empty($kolum1)|| empty($kolum2)){
      header("Location: matriks.php?error=emptyspaces");
      exit();
    }
    if($baris2!=$kolum1){
      header("Location: matriks.php?error=no");
      exit();
    }
  }

  ?>
  
  <form method="post" action="matriks2.php">
    <?php 
      print "<h2> Matrix 1 </h2>";
      for($i = 0; $i<$baris1; $i++){
        for($j = 0; $j<$kolum1; $j++){
          print"<input name = M1$i$j type = text/>";
          print"&nbsp&nbsp";
        }
        print"<br><br>";
      }
      print"<br>";
      print "<h2> Matrix 2 </h2>";
      for($y = 0; $y<$baris2; $y++){
        for($z = 0; $z<$kolum2; $z++){
          print"<input name = M2$y$z type = text/>";
          print"&nbsp&nbsp";
        }
        print"<br><br>";
      }
    ?>

    <input type="hidden" name="baris1" value="<php echo $baris1; ?>">
    <input type="hidden" name="baris2" value="<php echo $baris2; ?>">
    <input type="hidden" name="kolum1" value="<php echo $kolum1; ?>">
    <input type="hidden" name="kolum2" value="<php echo $kolum2; ?>">
    <button type="submit" name='submit-add'> Submit </button>
  </form>

  <a id="Return" href="matriks.php">Return</a>
</body>
</html>