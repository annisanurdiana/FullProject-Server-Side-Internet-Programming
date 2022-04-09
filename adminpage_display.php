<?php
include 'config.php';
if(isset($_POST['displaySend'])){
    $table = '<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">No </th>
        <th scope="col">Name </th>
        <th scope="col">Email </th>
        <th scope="col">Country </th>
        <th scope="col">Create At </th>
        <th scope="col">Setting</th>
      </tr>
    </thead>';
    $sql = "SELECT * FROM admins";
    $result = mysqli_query($link, $sql);
    $number = 1;
    while($row=mysqli_fetch_assoc($result)){
      $no = $row['no'];
      $fullname=$row['fullname'];
      $email=$row['email'];
      $country=$row['country'];
      $created_at=$row['created_at'];
      $table.= ' <tr>
            <td scope="row">'.$number.' </td>
            <td>'.$fullname.' </td>
            <td>'.$email.' </td>
            <td>'.$country.' </td>
            <td>'.$created_at.' </td>
            <td>
              <button class="btn btn-primary" onclick="getDetails('.$no.')">Update</button>
              <button class="btn btn-danger" onclick="deleteAdmin('.$no.')">Delete</button>
            </td>
        </tr>';
        $number++;
    }
    $table .= '</table>';
    echo $table; 
}
?>

