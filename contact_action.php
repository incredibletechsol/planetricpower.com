<?php
  if(isset($_POST['submit']))
{
	$name  =  $_POST['name'];
	$email  =  $_POST['email'];
	$mobile  =  $_POST['mobile'];
	$messages  =  $_POST['message'];

         $to = "planetricpower@gmail.com";
         // $to = "sachininfotech.in@gmail.com";
         $subject = "Mail From Contact form of planetric website";
         
         $header .= "Content-type: text/html\r\n";
         $message  = "Name : ".$name;
         $message .= "\r\nEmail : ".$email;
         $message .= "\r\nMobile : ".$mobile;
         $message .= "\r\nMessage : ".$messages;
      
         
         // $header = "info@parkingwala.com \r\n";
         // $header .= "Cc:afgh@somedomain.com \r\n";
         // $header .= "MIME-Version: 1.0\r\n";
   
         $retval = mail ($to,$subject,$message,$header);
         if( $retval == true ) {
         	// alert("Message has sent...");
            echo '<script>window.location = "contact.php" </script>';
         }else {
     
            alert("Message could not be sent...");
         }
}
      ?>
						