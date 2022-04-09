<?php 
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrix 5x5</title>
</head>
<body style="background:url('../img/wave.gif'); background-color:black; background-size:cover;">
  <form action="" method="POST">
    
    <table>
      <h1 style="text-align: center;">Matrix Calculator</h1>
    </table>
    <br><hr>
    
    <table>
      <?php
        print "<h2> Matrix 1 </h2>";
        for($i = 0; $i<=4; $i++){
          for($j = 0; $j<=4; $j++){
            print"<input name = M1$i$j type = text style='margin: 9px 0; width:5%' required/>";
            print"&nbsp&nbsp";
          }
          print"<br><br>";
        }
        print"<br>";
        print "<h2> Matrix 2 </h2>";
        for($y = 0; $y<=4; $y++){
          for($z = 0;$z<=4; $z++){
            print"<input name = M2$y$z type = text style='margin: 9px 0; width:5%' required/>";
            print"&nbsp&nbsp";
          }
          print"<br><br>";
        }
      ?>
      <tr>
        <td><input type="submit" name="pop" value="Calculate"></td>
      </tr>
    </table>
  </form>

<?php 
  if(isset($_POST["pop"])){
    // Matrix - 1
    for($i = 0; $i<=4; $i++){
      for($j = 0; $j<=4; $j++){
        $M1.$i.$j = $_POST["M1$i$j"];
      }
    }
    // Matrix - 2
    for($y = 0; $y<=4; $y++){
      for($z = 0;$z<=4; $z++){
        $M2.$y.$z = $_POST["M2$y$z"];
      }
    }

    $matrix1 = array(array());
    for ($i = 0; $i <=4; $i++){
      for($j = 0; $j <=4; $j++){
        
        $matrix1[$i][$j] = $_POST['M1'.$i.$j];

        if($_POST['M1'.$i.$j]==" "){
          $matrix1[$i][$j] = 0;
        }
      }
    }

    $matrix2 = array(array());
    for ($i = 0; $i <=4; $i++){
      for($j = 0; $j <=4; $j++){
        
        $matrix2[$i][$j] = $_POST['M2'.$i.$j];

        if($_POST['M2'.$i.$j]==" "){
          $matrix2[$i][$j] = 0;
        }
      }
    }
    
    //Provides the rowcount of matrix 1
    $rowCount1 = count($matrix1); 
    //Provides the column count of matrix 1
    $colCount1 = count($matrix1[0]);

    //Provides the rowcount of matrix 2
    $rowCount2 = count($matrix2);
    //Provides the column count of matrix 2
    $colCount2 = count($matrix2[0]);

    // Display the entered matrix
    echo"<hr>"; 
    echo"<h4>matrix1</h4>";
    // Row
    for($r=0; $r < $rowCount1; $r++){
      echo "</br>";
      // Colum
      for($c=0; $c < $colCount1; $c++){
        echo $matrix1[$r][$c]. " ";
      }
    }    

    echo"<hr>"; 
    echo"<h4>matrix2</h4>";
    // Row
    for($r=0; $r < $rowCount2; $r++){
      echo "</br>";
      // Colum
      for($c=0; $c < $colCount2; $c++){
        echo $matrix2[$r][$c]. " ";
      }
    }
    echo"<hr>";

    //The sum of the matrix
    echo "<h4>The Sum of matrix is:</h4>";
    $sumerr=false;
    $sum="";
    for ($r = 0; $r < $rowCount1; $r++) {
      for ($c = 0; $c < $colCount1; $c++) {
        if(is_numeric($matrix1[$r][$c]) && is_numeric($matrix2[$r][$c])){
          $val = $matrix1[$r][$c] + $matrix2[$r][$c];
          $sum = $sum . " " . $val;
        }else $sumerr=true;
      }
      $sum = $sum . " <br>";
      if($sumerr==true) break;
    }
    if($sumerr==true){
      echo "Addition of these Matrices is not Possible";
    } else {
    echo $sum;
    }

    // Transpose of matrix
    echo"<hr>"; 
    echo"<h4>Transpose of matrix1</h4>";
    // Kolum
    for($c=0; $c < $colCount1; $c++){
      echo "</br>";
      // Baris
      for($r=0; $r < $rowCount1; $r++){
        echo $matrix1[$r][$c]. " ";
      }
    }    
    echo"<hr>"; 
    echo"<h4>Transpose of matrix2</h4>";
    // Kolum
    for($c=0; $c < $colCount2; $c++){
      echo "</br>";
      // Baris
      for($r=0; $r < $rowCount2; $r++){
        echo $matrix2[$r][$c]. " ";
      }
    }
    echo"<hr>";

    // Matrix Multiplication
    echo "<h4>Multiplication of Matrix</h4>";

    if($colCount1 == $rowCount2){
      for($i=0; $i < $rowCount1; $i++){
        for($j=0; $j < $rowCount1; $j++){
          for($k=0; $k < $rowCount1; $k++){
            $result [$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
          }
        }
        //echo $res[$j][$i]=$result [$i][$j];
      }
      for($i = 0; $i<$rowCount1; $i++){
        echo "</br>";
        for($j = 0; $j<$rowCount1; $j++){
          echo $result[$i][$j]." ";
        }
      echo"<hr>";
      }
    }
    else {
      echo "<h5>The matrix multiplication is not possible.</h5>";
    }
  }
  
  ?>

</body>
</html>