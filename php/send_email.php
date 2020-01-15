<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';


if (count($_POST) == 3) {
  $err = false;
  $msg = '';
  $email = '';
  //Apply some basic validation and filtering to the query
  if (array_key_exists('query', $_POST)) {
    //Limit length and strip HTML tags
    $query = substr(strip_tags($_POST['query']), 0, 16384);
  } else {
    $query = '';
    $err = true;
  }
  //Apply some basic validation and filtering to the name
  if (array_key_exists('name', $_POST)) {
    //Limit length and strip HTML tags
    $name = substr(strip_tags($_POST['name']), 0, 255);
  } else {
    $name = '';
  }
  //Make sure the address they provided is valid before trying to use it
  if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
    $email = $_POST['email'];
  } else {
    $err = true;
  }

  if (!$err) {
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer();

    try {

      //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
      $mail->isSMTP();                                          // Send using SMTP
      $mail->Host = '';                                         // Set the SMTP server to send through
      $mail->SMTPAuth = true;                                   // Enable SMTP authentication
      $mail->Username = '';                                     // SMTP username
      $mail->Password = '';                                     // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port = 0;                                         // TCP port to connect to

      //Recipients
      $mail->setFrom('pippo@pippo.it', 'Mailer');
      $mail->addAddress('pippo@pippo.it', 'Web User');     // Add a recipient

      // Content
      $mail->Subject = 'web';
      $mail->Body = "From " . $name . " with email: \n\n" . $email . "   " . $query;


      $mail->send();
      echo 0;
      return;
    } catch (Exception $e) {
      echo -1;
      return;
    }
  } else {
    echo -1;
    return;
  }
}
echo -1;
