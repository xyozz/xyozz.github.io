    <?php
$malil = 'd.vanonckelen@hotmail.be';
$to = $malil;




    $name = trim(stripslashes($_POST['contactName']));
    $email = trim(stripslashes($_POST['contactEmail']));
    $subject = trim(stripslashes($_POST['contactSubject']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));



$subject = "Your order has been placed.";

// Set From: header
    $from =  $name . " <" . $email . ">";

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


////////////////***********Html format*****************//////////////////
 $message .= "Email from: " . $name . "<br />";
 $message .= "Email address: " . $email . "<br />";
 $message .= "Message: <br />";
 $message .= $contact_message;
 $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";


$result=mail($to,$subject,$message,$headers);
  if($result){
      echo 'mail Send';
  }else{
      echo 'Mail not send';
  }
  ?>