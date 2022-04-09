<?php 
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
  if(isset($_POST['submit-add'])){
    $baris1 = $_POST['baris1'];
    $kolum1 = $_POST['kolum1'];
    $baris2 = $_POST['baris2'];
    $kolum2 = $_POST['kolum2'];

    $ary = array(array());

    for ($i = 0; $i < $baris1; $i++){
      for($j = 0; $j < $kolum1; $j++){
        
        $ary[$i][$j] = $_POST['txt'.$i.$j];

        if($_POST['txt'.$i.$j]==" "){
          $ary[$i][$j] = 0;
        }
      }
    }
    
    $ary1 = array(array());

    for ($y = 0; $y < $baris2; $y++){
      for($z = 0; $z <$kolum2; $z++){

        $ary1[$y][$z] = $_POST['txta'.$y.$z];
        
        if($_POST['txta'.$y.$z]==" "){
          $ary1[$y][$z] = 0;
        }
      }
    }

    $ary2 = array(array());

    for ($i = 0; $i < $row; $i++){
      for($j = 0; $j < $column; $j++){
        $ary2[$i][$j] = 0;
        for ($k = 0; $k < $p; $k++){
          $ary2[$i][$j] += $ary[$i][$k] * $ary1[$k][$j];
        }
      }
    }
  }

  // --------------------------------------------------------------------------------//
    //  Sum of the matrix
    $sum = "";
    echo"<h4> The Sum of matrix is:</h4>";
    for ($r=0; $r < $row; $r++){
      echo"";
      for ($c=0; $c < $column; $c++) {
        if (is_numeric($matrix1[$r][$c])&&is_numeric($matrix2[$r][$c])){
          $val =$matrix1[$r][$c] + $matrix2[$r][$c];
          $sum = $sum ." ".$val;
        }else{
          echo "<h4>Enter an number</h4>";
          break;
        }
      }
      $sum = $sum."</br>";
    }
    echo $sum;

  // --------------------------------------------------------------------------------//
  print"<p>The Result: </p><br>";
  print"<div id = matrixresult> <br>";
  for ($i = 0; $i < $row; $i++){
    for ($j = 0; $j < $column; $j++){
      echo $ary2[$i][$j];
      print"&nbsp&nbsp";
    }
    print"<br><br>";
  }
  print"</div>";

  ?>
  <a id="Return" href="matriks.php">Return</a>


  
</body>
</html>