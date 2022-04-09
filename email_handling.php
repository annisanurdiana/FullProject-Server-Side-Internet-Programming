<!--
     Sambungkan terlebih dahulu dengan library 
-->
<?php 
 use PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 // Include library phpmailer
 include('assets/PHPMailer-master/src/Exception.php');
 include('assets/PHPMailer-master/src/PHPMailer.php');
 include('assets/PHPMailer-master/src/SMTP.php');

//  $email = $_POST['email'];
//  $password = $_POST['password'];

$mysqli->query("INSERT INTO adminn VALUES('$email','$password')");

 if(($mysqli)){
     $email_pengirim = 'nurdianaannisa111@gmail.com';
     $nama_pengirim = 'Quory_SSIP_2021';

     // ambil email penerima dari input form
     $email = $_POST['email'];
     $subjek = 'Registration New Admin Quory_SSIP_2021';

     // Body email = send message to sender
     $pesan = 'Congratulations, your account has been successfully added by e-mail '.$email.'with your password '.$password.'please try to login to the system. If an error occurs, please contact the admin, Thank you.';

     // Call PHPMailer class
     $mail = new PHPMailer\PHPMailer;
     // Tipe pengiriman emailnya SMTP
     $mail -> isSMTP();

     // Karena menggunakan gmail maka SMTP gmail.com
     $mail->Host = 'smtp.gmail.com';
     // Username menggunakan email_pengirim
     $mail->Username = $email_pengirim;
     // Isikan dengan password email_pengirim
     $mail->Password = 'gxirxyrlsippmmdi';

     // Jika memakai outlook maka kode port nya akan berbeda lagi
     $mail->Port = 465;

     $mail->SMTPAuth = true;
     $mail->SMTPSecure = 'ssl';

     // Diaktifkan untuk melakukan debuging
     $mail->SMTPDebug=2;

     $mail->setFrom($email_pengirim, $nama_pengirim);
     $mail->addAddress($email);

     // Diaktifkan jika isi emailnya berupa html
     $mail->isHTML(true);

     $mail->Subject = $subjek;
     $mail->Body = $pesan;

     $send = $mail->send();

     if($send){
        //  Jika email berhasil dikirim
        echo "<h1>Email sent successfully!</h1><br> back to <a href='signup_admin.php'>admin page</a>";
     }else{
        //  Jika email tidak berhasil dikirim
        echo "<h1>ERROR: Email not send,</h1><br> back to <a href='signup_admin.php'>admin page</a>";
     }
     echo "<script>
     alert('The new admin data has been successfully added and the notification email has been sent successfully.
     </script>";

     echo "<script type='text/javascript'> document.location = 'signup_admin.php';</script>";
 }
?>