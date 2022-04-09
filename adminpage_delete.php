<?php
include 'config.php';

if(isset($_POST['deleteSend'])){
    $unique = $_POST['deleteSend'];

    $sql="DELETE FROM admins WHERE no=$unique";
    $result = mysqli_query($link,$sql);
}

?>