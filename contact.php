<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  //$email_from='luxdigtech.com';
  if(isset($_POST['email'])&& $_POST['email']!=''){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      $name= $_POST['name'];
      $email= $_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $to="lynnmtudza@gmail.com";
       $email_body="User Name:$name.\n".
                     "User email:$email.\n".
                     "User message:$message.\n".
                     "Subject:$subject.\n";
    
        // $headers="From:$email_from\r\n";
        // $headers.="Reply-To":$email\r\n
    ;
    mail($to,$subject,$email_body);
    $message_sent=true;
    }
   else{
    $message_sent=false;
   }
  }
 
//header("Location:index.html");
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
