<?php 
//server - username - pw - dbname
$conn=new mysqli('localhost','root','','ssip');
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "connection succesful";
}
?>