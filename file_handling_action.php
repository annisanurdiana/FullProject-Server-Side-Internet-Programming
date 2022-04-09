<?php 
//  Calling database connection
include "config.php";
// Testing if the upload button is clicked
if(isset($_POST['upload'])){
  // Uploadable file extensions
  $ekstensi_available = array('png','jpg','jpeg','gif','mp4','pdf','zip','rar');
  // To get the uploaded filename
  $nama = $_FILES['file']['name']; 
  // nama_file.jpg >> yang ditangkap ekstensinya (jpg) nya
  $x = explode(".", $nama);
  $ekstensi = strtolower(end($x));
  // To get the size of the file to be uploaded
  $size = $_FILES['file']['size'];
  // To get temporary of the file to be uploaded
  $file_tmp = $_FILES['file']['tmp_name'];
  // Test if the uploaded file extension matches the one declared above
  if(in_array($ekstensi,$ekstensi_available)===true)
  {
    // Test if the file size is under 2 mb
    if($size < 2044070){
      // Uploaded successfully, then move the uploaded file to the file-assets folder
      move_uploaded_file($file_tmp, 'assets/file/'.$nama);
      // Save file into database
      $save = mysqli_query($link,"INSERT INTO upload VALUES('', '$nama')");
      if($save){
        // Show message
        echo "<script>alert('File berhasil diupload!'); document.location='file_handling.php' </script>";
      } else {
        // If uploaded not successfully
        echo "<script>alert('Gagal upload file!'); document.location='file_handling.php' </script>";
      }
    } else {
      // file size does not matchi
      echo "<script>alert('Ukuran file terlalu besar, MAX 2 MB!'); document.location='file_handling.php' </script>";
    }
  } else {
    echo "<script>alert('Ekstensi File yang diupload tidak terdukung!'); document.location='file_handling.php' </script>";
  }
}
?>