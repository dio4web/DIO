<?php 
  ini_set("include_path", '/home/dio4web/php:' . ini_get("include_path") );

  header('Location: thanks.php');

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once "Mail.php";

  $from = '<noreply@diveintotheocean.org>';
  $to = 'support@diveintotheocean.org';
  $subject = "Brochure submittal by " . $_POST['Name'];
  $body = "Name: " . $_POST['Name'];
  $body .= "\nEmail: " . $_POST['Email'];
  $body .= "\n\nI am interested in:";
  $body .= "\n      More information: [" . $_POST['more-info'] . "]";
  $body .= "\n      Monthly newsletter: [" . $_POST['newsletter'] . "]";
  $body .= "\n      Booking a show: [" . $_POST['booking'] . "]";
  $body .= "\n      Going Brochureless: [" . $_POST['brochureless'] . "]";

  $headers = array(
      'From' => $from,
      'To' => $to,
      'Subject' => $subject
  );

include 'config.php';

  $smtp = Mail::factory('smtp', array(
          'host' => 'relay-hosting.secureserver.net',
          'port' => '25',
          'auth' => true,
          'username' => $username,
          'password' => $pw
          ));

  $mail = $smtp->send($to, $headers, $body);

  if (PEAR::isError($mail)) {
      echo('<p>' . $mail->getMessage() . '</p>');
  } else {
      echo('<p>Message successfully sent!</p>');
  }
?>