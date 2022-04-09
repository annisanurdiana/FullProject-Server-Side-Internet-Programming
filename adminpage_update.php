<?php
include 'config.php';

if(isset($_POST['updateNum'])){
    $admin_Num = $_POST['updateNum'];

    // Akses semua data yang ada di 'no' di dalam table admins
    $sql="SELECT * FROM admins WHERE no=$admin_Num";
    // 
    $result = mysqli_query($link,$sql);
    $response = array();
    while($row=mysqli_fetch_assoc($result)){
        $response = $row;
    }
    // Dengan JSON kita akan mendapatkan output data yang dibutuhkan
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or Data not Found!";
}

// Update Query
if(isset($_POST['hiddenData'])){
    $uniqueNum = $_POST['hiddenData'];
    $fullname = $_POST['nameAdminUpdate'];
    $email = $_POST['emailAdminUpdate'];
    $country = $_POST['countryAdminUpdate'];
    $sql="UPDATE admins SET fullname = '$fullname', email='$email', country = '$country' WHERE no = $uniqueNum";
    $result = mysqli_query($link,$sql);
}

?>
