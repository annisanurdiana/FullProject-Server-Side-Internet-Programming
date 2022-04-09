<?php 
error_reporting(1);
?>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Matrix 10x10</title>
</head>
<body style="background-color:white;">
  <form action="" method="POST">
    
    <table>
      <h1 style="text-align: center;">Matrix Calculator</h1>
    </table>
    <br><hr>
    
    <table>
      <?php
        print "<h2> Matrix 1 </h2>";
        print"<textarea name = M1 type = text style='margin: 9px 0; width:20%; height:20%;' required/></textarea>";
        print"<br>";
        print "<h2> Matrix 2 </h2>";
        print"<textarea name = M2 type = text style='margin: 9px 0; width:20%; height:20%;' required/></textarea>";
      ?>
      <tr>
        <td><input type="submit" name="pop" value="Calculate"></td>
      </tr>
    </table>
  </form>


<?php 
  if(isset($_POST["pop"])){
    // Matrix - 1
    $M1j = explode("\n",$_POST["M1"]);
    $rowCount = count($M1j);
    for($j = 0; $j < $rowCount; $j++){
        $M1ij = explode(" ", $M1j[$j]);
        $colCount = count($M1ij);
        for($i = 0; $i < $colCount; $i++){
            $M1[$j][$i] = $M1ij[$i];
        }
    }
    
    // Matrix - 2
    $M2j = explode("\n",$_POST["M2"]);
    $rowCount = count($M2j);
    for($j = 0; $j < $rowCount; $j++){
        $M2ij = explode(" ", $M2j[$j]);
        $colCount = count($M2ij);
        for($i = 0; $i < $colCount; $i++){
            $M2[$j][$i] = $M2ij[$i];
        }
    }
    
    $matrix1 = array(array());
    $matrix2 = array(array());
    $matrix1 = $M1;
    $matrix2 = $M2;
    
    $rowCount1 = count($matrix1);
    $colCount1 = count($matrix1[0]);
    $rowCount2 = count($matrix2);
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

    /*
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
    // Columns
    for($c=0; $c < $colCount1; $c++){
      echo "</br>";
      // Rows
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
    echo"<hr>";*/
    // Matrix Multiplication
    echo "<h4>Multiplication of Matrix</h4>";

    if($colCount1 == $rowCount2){
        for($i=0; $i < $rowCount1; $i++){
            for($j=0; $j < $colCount2; $j++){
                for($k=0; $k < $rowCount2; $k++){
                    $result [$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }
        for($i = 0; $i<$rowCount1; $i++){
            echo "</br>";
            for($j = 0; $j<$colCount2; $j++){
                echo $result[$i][$j]." ";
            }
            echo"<hr>";
        }
    }
}
  ?>

</body>
</html>