<?php
$host = "localhost";
$username = "id17543620_mm2021b";
$password = "F]{_QRYQ9EoY0jJz";
$dbname = "id17543620_2021ssip";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
    echo "ERROR: could not connect.".mysqli_connect_error();
} else {
    echo "Successfully connected...";
}

$query = "select * from users";
$result = mysqli_query($conn, $query);
foreach($result as $row){
    echo "ID:$row[id], username:$row[username], password:$row[passsword]<br>";
}

?>