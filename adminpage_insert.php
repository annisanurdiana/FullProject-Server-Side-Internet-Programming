<?php
include 'config.php';

// Karena kita memakai AJAX, jadi kita tidak perlu menulis kembali name, usernam, email, country, etc...tapi kita hanya perlu menulis extract function untuk memanggil data dan menyimpannya di sini.

extract($_POST);

if(isset($_POST['fullnameSend']) && isset($_POST['emailSend']) && isset($_POST['countrySend'])){
    
    // Insert query insert into table name (admins)
    $sql="INSERT INTO admins (fullname,email,country) 
    values ('$fullnameSend', '$emailSend', '$countrySend')"; 

    $result = mysqli_query($link, $sql);
}
?>
