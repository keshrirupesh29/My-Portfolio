<?php 
if(isset($_POST["send"]))
{
   $email =  $_POST["email"];
   $msg =  $_POST["message"];
    
    $to = "keshrirupesh29@gmail.com";
    $subject = "Message rupesh.nita";
    $header = "From: $email \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $message = "$msg";
     if(mail ($to,$subject,$message,$header))
     {
         echo "<script>alert('Email sent sucessfully');</script>";
     }
    else
    {
        echo "<script>alert('Email sending failed !');</script>";
    }
}
echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a></p>';    
?>