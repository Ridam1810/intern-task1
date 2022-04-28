<?php

if (!isset($_SESSION)) {
  session_start();
}

include "init.php";
$_SESSION['is_condition'] = false;
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}



//  exit();

//  exit();

// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

$to = $_POST['email']; // Receiver Email ID, Replace with your email ID
  $subject = "Confirmation";
  $message = "Name :" . $_POST['fullname'] . "\n" . "Phone :" . $_POST['phone'] . "\n" . "Address :" . $_POST['address'] . "\n" . "Problem Type :" . $_POST['ptype'] . "\n" . "\n" . "Wrote the following :" . "\n\n" . $_POST['message'];
  $headers = "From: " . "rithyamforbe@gmail.com";

  $_SESSION['regname'] = $_POST['fullname'];
  $_SESSION['filename'] = $fileNameNew;


  if (mail($to, $subject, $message, $headers)) {
    // header("Location: patient_confirmation.php");


    echo "
            <script type=\"text/javascript\">
            window.location.href = 'patient_confirmation.php';
            </script>
        ";
    // echo RedirectURL('patient_confirmation.php');
  } else {
    // header("Location: error.php");
    echo "
            <script type=\"text/javascript\">
            window.location.href = 'error.php';
            </script>
        ";
  }










?>