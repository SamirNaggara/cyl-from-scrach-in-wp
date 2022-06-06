<?php
  $dest = "zaackz@yahoo.fr";
  $subjetc = "Test Email";
  $body = "Hi this is a test email send by a php script";
  $headers = "From: gregory.drv@gmail.com";
  if (mail($dest, $subjetc, $body, $headers)) {
    echo "Email successfully sent to $dest ...";
  } else {
    echo "Failed to send email...";
  }
?>