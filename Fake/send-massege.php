<?php
    $to      = 'ahmadrabah272@gmail.com';
    $subject = 'Tracking';
    $message = $_POST['txtName'];
    $header = "From:ahmadrabah272@gmail.com \r\n";
   $header .= "Cc:ahmadrabah272@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            header('location:index.php');
         }else {
            header('location:index.php');
         }

?>