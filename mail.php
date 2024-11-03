<?php
// First, check if the submit button has been pressed - no processing occurs unless the form has been submitted. 
// This is necessary because your $_POST variables do not exist until the form is submitted.
if (isset($_POST['submit'])) {
      // The button has been pressed, so now gather data and set variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $message = $_POST['message'];
      $from = 'The following information was submitted through the contact form on your website';
      $to = 'jjacobs064@gmail.com';
      $subject = 'Enquiery from website';
      $human = $_POST['human'];
      $body = "From: $name\n\r E-Mail: $email\n\r Contact Number: $contact\n\r Message:\n\r $message";

      // Now, validate and process
      if ($name != '' && $email != '' && $contact != '') {
            if ($human == '16') {
                  if (mail($to, $subject, $body, $from)) {
                        echo header('location: https://github.com/JohanJ76/portfolio/thankyou.html');
                  } else {
                        echo '<p>Something went wrong, go back and try again!</p>';
                  }
            } else {
                  echo '<p>You answered the anti-spam question incorrectly!</p>';
            }
      } else {
            echo '<p>You need to fill in all fields!!</p>';
      }
}
