<?php


// if (!isset($_SESSION)) {
//     session_start();
//   }
include 'splitfile/navbar.php';
include "init.php";
$tests=$_SESSION['test_list'] ;
$response=$_SESSION['response']; 
$guestId=$_SESSION['guestId'] ;
// echo $docId;
// echo $time;
// echo $date;
// exit();
// public checking

// echo $numrow;exit();

if ($source->Query(
    "UPDATE `guest` SET `response`='$response' , `test_list`= '$tests' WHERE `id`='$guestId'"
  )) {

    // $to = $profile->email; // Receiver Email ID, Replace with your email ID
    // $subject = "Prescription";
    // $message = "Name :" . $profile->fullname . "\n" . "Phone :" . $profile->phone . "\n" . "Address :" . $profile->address . "\n"  . "\n" . "\n" . "Wrote the following :" . $profile->ptype. "\n" . "\n" . "Doctor's response :".$_POST['response'];
    // $headers = "From: " . "rithyamforbe@gmail.com";
  
    // $_SESSION['regname'] = $_POST['fullname'];
    // $_SESSION['filename'] = $fileNameNew;
  
  
    // if (mail($to, $subject, $message, $headers)) {
    //   // header("Location: patient_confirmation.php");
  
  
    //   echo "
    //           <script type=\"text/javascript\">
    //           window.location.href = 'res_msg.php';
    //           </script>
    //       ";
    //   // echo RedirectURL('patient_confirmation.php');
    echo "
              <script type=\"text/javascript\">
              window.location.href = 'test_msg.php';
              </script>
          ";

    } else {
      // header("Location: error.php");
      echo "
              <script type=\"text/javascript\">
              window.location.href = 'error.php';
              </script>
          ";
    }
  

    unset($_SESSION['test_list']);
    unset($_SESSION['response']);
    unset($_SESSION['guestId']);



?>
