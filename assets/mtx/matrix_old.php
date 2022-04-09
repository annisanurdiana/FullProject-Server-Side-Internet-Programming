<?php 
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrix 10x10</title>
</head>
<body style="background:url('../img/wave.gif'); background-color:black; background-size:cover;">
  <form action="matrix.php" method="POST">
    <table>
      <h1 style="text-align: center;">Matrix 10x10</h1>
      <!-- <tr>
        <td>M1 </td>
        <td>
        <input type="text" name="M100" style="margin: 9px 0; width:7%" autofocus required/>
        <input type="text" name="M101" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M102" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M103" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M104" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M105" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M106" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M107" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M108" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M109" style="margin: 9px 0; width:7%" required/><br>
        Row 2 
        <input type="text" name="M110" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M111" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M112" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M113" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M114" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M115" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M116" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M117" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M118" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M119" style="margin: 9px 0; width:7%" required/><br>
        Row 3 
        <input type="text" name="M120" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M121" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M122" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M123" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M124" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M125" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M126" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M127" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M128" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M129" style="margin: 9px 0; width:7%" required/><br>
        Row 4 
        <input type="text" name="M130" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M131" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M132" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M133" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M134" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M135" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M136" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M137" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M138" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M139" style="margin: 9px 0; width:7%" required/><br>
        Row 5 
        <input type="text" name="M140" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M141" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M142" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M143" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M144" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M145" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M146" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M147" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M148" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M149" style="margin: 9px 0; width:7%" required/><br>
        Row 6 
        <input type="text" name="M150" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M151" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M152" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M153" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M154" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M155" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M156" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M157" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M158" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M159" style="margin: 9px 0; width:7%" required/><br>
        Row 7 
        <input type="text" name="M160" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M161" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M162" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M163" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M164" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M165" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M166" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M167" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M168" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M169" style="margin: 9px 0; width:7%" required/><br>
        Row 8 
        <input type="text" name="M170" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M171" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M172" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M173" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M174" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M175" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M176" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M177" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M178" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M179" style="margin: 9px 0; width:7%" required/><br>
        Row 9 
        <input type="text" name="M180" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M181" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M182" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M183" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M184" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M185" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M186" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M187" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M188" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M189" style="margin: 9px 0; width:7%" required/><br>
         Row 10 
        <input type="text" name="M190" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M191" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M192" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M193" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M194" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M195" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M196" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M197" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M198" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M199" style="margin: 9px 0; width:7%" required/><br>
      </tr> -->
    </table>
    <br><hr>
    <table>
      <?php
        print "<h2> Matrix 1 </h2>";
        for($i = 0; $i<=2; $i++){
          for($j = 0; $j<=2; $j++){
            print"<input name = M1$i$j type = text style='margin: 9px 0; width:5%' required/>";
            print"&nbsp&nbsp";
          }
          print"<br><br>";
        }
        print"<br>";
        print "<h2> Matrix 2 </h2>";
        for($y = 0; $y<=2; $y++){
          for($z = 0;$z<=2; $z++){
            print"<input name = M2$y$z type = text style='margin: 9px 0; width:5%' required/>";
            print"&nbsp&nbsp";
          }
          print"<br><br>";
        }
      ?>
<!--       
        <td>M2 </td>
        <td>
        <input type="text" name="M200" style="margin: 9px 0; width:7%" autofocus required/>
        <input type="text" name="M201" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M202" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M203" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M204" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M205" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M206" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M207" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M208" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M209" style="margin: 9px 0; width:7%" required/><br>
         Row 2 //
        <input type="text" name="M210" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M211" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M212" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M213" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M214" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M215" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M216" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M217" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M218" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M219" style="margin: 9px 0; width:7%" required/><br>
         Row 3 //
        <input type="text" name="M220" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M221" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M222" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M223" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M224" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M225" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M226" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M227" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M228" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M229" style="margin: 9px 0; width:7%" required/><br>
         Row 4 //
        <input type="text" name="M230" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M231" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M232" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M233" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M234" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M235" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M236" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M237" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M238" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M239" style="margin: 9px 0; width:7%" required/><br>
         Row 5 //
        <input type="text" name="M240" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M241" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M242" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M243" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M244" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M245" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M246" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M247" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M248" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M249" style="margin: 9px 0; width:7%" required/><br>
         Row 6 //
        <input type="text" name="M250" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M251" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M252" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M253" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M254" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M255" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M256" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M257" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M258" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M259" style="margin: 9px 0; width:7%" required/><br>
         Row 7 //
        <input type="text" name="M260" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M261" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M262" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M263" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M264" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M265" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M266" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M267" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M268" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M269" style="margin: 9px 0; width:7%" required/><br>
         Row 8 //
        <input type="text" name="M270" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M271" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M272" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M273" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M274" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M275" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M276" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M277" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M278" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M279" style="margin: 9px 0; width:7%" required/><br>
        // Row 9 //
        <input type="text" name="M280" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M281" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M282" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M283" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M284" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M285" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M286" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M287" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M288" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M289" style="margin: 9px 0; width:7%" required/><br>
        // Row 10 //
        <input type="text" name="M290" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M291" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M292" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M293" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M294" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M295" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M296" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M297" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M298" style="margin: 9px 0; width:7%" required/>
        <input type="text" name="M299" style="margin: 9px 0; width:7%" required/><br>
      </tr> -->
      <!-- Submit Buttom  -->
      <tr>
        <td><input type="submit" name="pop" value="Calculate"></td>
      </tr>

    </table>
    
  </form>

<?php 
  if(isset($_POST["pop"])){
  
    // Matrix - 1
    for($i = 0; $i<=2; $i++){
      for($j = 0; $j<=2; $j++){
        $M1.$i.$j = $_POST["M1$i$j"];
      }
    }

    // Matrix - 2
    for($y = 0; $y<=2; $y++){
      for($z = 0;$z<=2; $z++){
        $M2.$y.$z = $_POST["M2$y$z"];
      }
    }
// //-----------------------------------------------//
//     $M100 = $_POST["M100"];
//     $M101 = $_POST["M101"];
//     $M102 = $_POST["M102"];
//     $M103 = $_POST["M103"];
//     $M104 = $_POST["M104"];
//     $M105 = $_POST["M105"];
//     $M106 = $_POST["M106"];
//     $M107 = $_POST["M107"];
//     $M108 = $_POST["M108"];
//     $M109 = $_POST["M109"];
    
// // M-1 Row 2

//     $M110 = $_POST["M110"];
//     $M111 = $_POST["M111"];
//     $M112 = $_POST["M112"];
//     $M113 = $_POST["M113"];
//     $M114 = $_POST["M114"];
//     $M115 = $_POST["M115"];
//     $M116 = $_POST["M116"];
//     $M117 = $_POST["M117"];
//     $M118 = $_POST["M118"];
//     $M119 = $_POST["M119"];
    
// // M-1 Row 3

//     $M120 = $_POST["M120"];
//     $M121 = $_POST["M121"];
//     $M122 = $_POST["M122"];
//     $M123 = $_POST["M123"];
//     $M124 = $_POST["M124"];
//     $M125 = $_POST["M125"];
//     $M126 = $_POST["M126"];
//     $M127 = $_POST["M127"];
//     $M128 = $_POST["M128"];
//     $M129 = $_POST["M129"];
    
// // M-1 Row 4

//     $M130 = $_POST["M130"];
//     $M131 = $_POST["M131"];
//     $M132 = $_POST["M132"];
//     $M133 = $_POST["M133"];
//     $M134 = $_POST["M134"];
//     $M135 = $_POST["M135"];
//     $M136 = $_POST["M136"];
//     $M137 = $_POST["M137"];
//     $M138 = $_POST["M138"];
//     $M139 = $_POST["M139"];
    
// // M-1 Row 5

//     $M140 = $_POST["M140"];
//     $M141 = $_POST["M141"];
//     $M142 = $_POST["M142"];
//     $M143 = $_POST["M143"];
//     $M144 = $_POST["M144"];
//     $M145 = $_POST["M145"];
//     $M146 = $_POST["M146"];
//     $M147 = $_POST["M147"];
//     $M148 = $_POST["M148"];
//     $M149 = $_POST["M149"];
    
// // M-1 Row 6

//     $M150 = $_POST["M150"];
//     $M151 = $_POST["M151"];
//     $M152 = $_POST["M152"];
//     $M153 = $_POST["M153"];
//     $M154 = $_POST["M154"];
//     $M155 = $_POST["M155"];
//     $M156 = $_POST["M156"];
//     $M157 = $_POST["M157"];
//     $M158 = $_POST["M158"];
//     $M159 = $_POST["M159"];
    
// // M-1 Row 7

//     $M160 = $_POST["M160"];
//     $M161 = $_POST["M161"];
//     $M162 = $_POST["M162"];
//     $M163 = $_POST["M163"];
//     $M164 = $_POST["M164"];
//     $M165 = $_POST["M165"];
//     $M166 = $_POST["M166"];
//     $M167 = $_POST["M167"];
//     $M168 = $_POST["M168"];
//     $M169 = $_POST["M169"];
    
// // M-1 Row 8

//     $M170 = $_POST["M170"];
//     $M171 = $_POST["M171"];
//     $M172 = $_POST["M172"];
//     $M173 = $_POST["M173"];
//     $M174 = $_POST["M174"];
//     $M175 = $_POST["M175"];
//     $M176 = $_POST["M176"];
//     $M177 = $_POST["M177"];
//     $M178 = $_POST["M178"];
//     $M179 = $_POST["M179"];
    
// // M-1 Row 9

//     $M180 = $_POST["M180"];
//     $M181 = $_POST["M181"];
//     $M182 = $_POST["M182"];
//     $M183 = $_POST["M183"];
//     $M184 = $_POST["M184"];
//     $M185 = $_POST["M185"];
//     $M186 = $_POST["M186"];
//     $M187 = $_POST["M187"];
//     $M188 = $_POST["M188"];
//     $M189 = $_POST["M189"];
    
// // M-1 Row 10

//     $M190 = $_POST["M190"];
//     $M191 = $_POST["M191"];
//     $M192 = $_POST["M192"];
//     $M193 = $_POST["M193"];
//     $M194 = $_POST["M194"];
//     $M195 = $_POST["M195"];
//     $M196 = $_POST["M196"];
//     $M197 = $_POST["M197"];
//     $M198 = $_POST["M198"];
//     $M199 = $_POST["M199"];


// //-----------------------------------------------//
//     $M200 = $_POST["M200"];
//     $M201 = $_POST["M201"];
//     $M202 = $_POST["M202"];
//     $M203 = $_POST["M203"];
//     $M204 = $_POST["M204"];
//     $M205 = $_POST["M205"];
//     $M206 = $_POST["M206"];
//     $M207 = $_POST["M207"];
//     $M208 = $_POST["M208"];
//     $M209 = $_POST["M209"];
    
// /// M-2 Row 2

//     $M210 = $_POST["M210"];
//     $M211 = $_POST["M211"];
//     $M212 = $_POST["M212"];
//     $M213 = $_POST["M213"];
//     $M214 = $_POST["M214"];
//     $M215 = $_POST["M215"];
//     $M216 = $_POST["M216"];
//     $M217 = $_POST["M217"];
//     $M218 = $_POST["M218"];
//     $M219 = $_POST["M219"];
    
// /// M-2 Row 3

//     $M220 = $_POST["M220"];
//     $M221 = $_POST["M221"];
//     $M222 = $_POST["M222"];
//     $M223 = $_POST["M223"];
//     $M224 = $_POST["M224"];
//     $M225 = $_POST["M225"];
//     $M226 = $_POST["M226"];
//     $M227 = $_POST["M227"];
//     $M228 = $_POST["M228"];
//     $M229 = $_POST["M229"];
    
// /// M-2 Row 4

//     $M230 = $_POST["M230"];
//     $M231 = $_POST["M231"];
//     $M232 = $_POST["M232"];
//     $M233 = $_POST["M233"];
//     $M234 = $_POST["M234"];
//     $M235 = $_POST["M235"];
//     $M236 = $_POST["M236"];
//     $M237 = $_POST["M237"];
//     $M238 = $_POST["M238"];
//     $M239 = $_POST["M239"];
    
// /// M-2 Row 5

//     $M240 = $_POST["M240"];
//     $M241 = $_POST["M241"];
//     $M242 = $_POST["M242"];
//     $M243 = $_POST["M243"];
//     $M244 = $_POST["M244"];
//     $M245 = $_POST["M245"];
//     $M246 = $_POST["M246"];
//     $M247 = $_POST["M247"];
//     $M248 = $_POST["M248"];
//     $M249 = $_POST["M249"];
    
// /// M-2 Row 6

//     $M250 = $_POST["M250"];
//     $M251 = $_POST["M251"];
//     $M252 = $_POST["M252"];
//     $M253 = $_POST["M253"];
//     $M254 = $_POST["M254"];
//     $M255 = $_POST["M255"];
//     $M256 = $_POST["M256"];
//     $M257 = $_POST["M257"];
//     $M258 = $_POST["M258"];
//     $M259 = $_POST["M259"];
    
// /// M-2 Row 7

//     $M260 = $_POST["M260"];
//     $M261 = $_POST["M261"];
//     $M262 = $_POST["M262"];
//     $M263 = $_POST["M263"];
//     $M264 = $_POST["M264"];
//     $M265 = $_POST["M265"];
//     $M266 = $_POST["M266"];
//     $M267 = $_POST["M267"];
//     $M268 = $_POST["M268"];
//     $M269 = $_POST["M269"];
    
// /// M-2 Row 8

//     $M270 = $_POST["M270"];
//     $M271 = $_POST["M271"];
//     $M272 = $_POST["M272"];
//     $M273 = $_POST["M273"];
//     $M274 = $_POST["M274"];
//     $M275 = $_POST["M275"];
//     $M276 = $_POST["M276"];
//     $M277 = $_POST["M277"];
//     $M278 = $_POST["M278"];
//     $M279 = $_POST["M279"];
    
// /// M-2 Row 9

//     $M280 = $_POST["M280"];
//     $M281 = $_POST["M281"];
//     $M282 = $_POST["M282"];
//     $M283 = $_POST["M283"];
//     $M284 = $_POST["M284"];
//     $M285 = $_POST["M285"];
//     $M286 = $_POST["M286"];
//     $M287 = $_POST["M287"];
//     $M288 = $_POST["M288"];
//     $M289 = $_POST["M289"];
    
// /// M-2 Row 10

//     $M290 = $_POST["M290"];
//     $M291 = $_POST["M291"];
//     $M292 = $_POST["M292"];
//     $M293 = $_POST["M293"];
//     $M294 = $_POST["M294"];
//     $M295 = $_POST["M295"];
//     $M296 = $_POST["M296"];
//     $M297 = $_POST["M297"];
//     $M298 = $_POST["M298"];
//     $M299 = $_POST["M299"];

    //------------------------End Declaration of Column-----------------------------//

    // transpose matrix
    // $matrix1 = array(
    //   array($M100, $M101, $M102, $M103, $M104, $M105, $M106, $M107, $M108, $M109), 
    //   array($M110, $M111, $M112, $M113, $M114, $M115, $M116, $M117, $M118, $M119), 
    //   array($M120, $M121, $M122, $M123, $M124, $M125, $M126, $M127, $M128, $M129), 
    //   array($M130, $M131, $M132, $M133, $M134, $M135, $M136, $M137, $M138, $M139), 
    //   array($M140, $M141, $M142, $M143, $M144, $M145, $M146, $M147, $M148, $M149),
    //   array($M150, $M151, $M152, $M153, $M154, $M155, $M156, $M157, $M158, $M159),  
    //   array($M160, $M161, $M162, $M163, $M164, $M165, $M166, $M167, $M168, $M169), 
    //   array($M170, $M171, $M172, $M173, $M174, $M175, $M176, $M177, $M178, $M179), 
    //   array($M180, $M181, $M182, $M183, $M184, $M185, $M186, $M187, $M188, $M189), 
    //   array($M190, $M191, $M192, $M193, $M194, $M195, $M196, $M197, $M198, $M199)
    // );

    $matrix1 = array(array());

    for ($i = 0; $i <= 2; $i++){
      for($j = 0; $j <= 2; $j++){
        
        $matrix1[$i][$j] = $_POST['M1'.$i.$j];

        if($_POST['M1'.$i.$j]==" "){
          $matrix1[$i][$j] = 0;
        }
      }
    }

    
    // $matrix2 = array(
    //   array($M200, $M201, $M202, $M203, $M204, $M205, $M206, $M207, $M208, $M209), 
    //   array($M210, $M211, $M212, $M213, $M214, $M215, $M216, $M217, $M218, $M219), 
    //   array($M220, $M221, $M222, $M223, $M224, $M225, $M226, $M227, $M228, $M229), 
    //   array($M230, $M231, $M232, $M233, $M234, $M235, $M236, $M237, $M238, $M239), 
    //   array($M240, $M241, $M242, $M243, $M244, $M245, $M246, $M247, $M248, $M249),
    //   array($M250, $M251, $M252, $M253, $M254, $M255, $M256, $M257, $M258, $M259),  
    //   array($M260, $M261, $M262, $M263, $M264, $M265, $M266, $M267, $M268, $M269), 
    //   array($M270, $M271, $M272, $M273, $M274, $M275, $M276, $M277, $M278, $M279), 
    //   array($M280, $M281, $M282, $M283, $M284, $M285, $M286, $M287, $M288, $M289), 
    //   array($M290, $M291, $M292, $M293, $M294, $M295, $M296, $M297, $M298, $M299)
    // );

    $matrix2 = array(array());

    for ($i = 0; $i <= 2; $i++){
      for($j = 0; $j <= 2; $j++){
        
        $matrix2[$i][$j] = $_POST['M2'.$i.$j];

        if($_POST['M2'.$i.$j]==" "){
          $matrix2[$i][$j] = 0;
        }
      }
    }

    //$matrix2 = array(array($M200, $M201), array($M210,$M211));
    
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

    // if($colCount1 == $rowCount2){
    //   for($i=0; $i < $rowCount1; $i++){
    //     for($j=0; $j < $rowCount1; $j++){
    //       $result [$i][$j] = 0;
    //       for($k=0; $k < $rowCount1; $k++){
    //         $result [$i][$j] += $matrix1[$i][$k] * $matrix2[$j][$k];
    //       }
    //     }
    //   }
    //   for($i = 0; $i<$rowCount1; $i++){
    //     echo "</br>";
    //     for($j = 0; $j<$rowCount1; $j++){
    //       echo $result[$i][$j]." ";
    //     }
    //   echo"<hr>";
    //   }
    // }
    // else {
    //   echo "<h5>The matrix multiplication is not possible.</h5>";
    // }
  }
  
  ?>

</body>
</html>