<?php
if (!isset($_SESSION)) {
	session_start();
}

include "init.php";
include "validation.php";
error_reporting(E_ERROR | E_PARSE);

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

$query = $source->Query("Select * FROM users where id=?", [$_GET['id']]);
$profile = $source->singleRow();

if (isset($_POST['Send'])) {


  

  


  $data = [
    'message' => $_POST['message']

  ];

 

    $to = $profile->email; // Receiver Email ID, Replace with your email ID
    $subject = "ICDDR'B";
    $message = "Name :" . $_SESSION['username'] . "\n" . "Email :" . $_SESSION['email'] ."\n". "Message :" . $_POST['message'];
    $headers = "From: " . "rithyamforbe@gmail.com";
  
    // $_SESSION['regname'] = $_POST['fullname'];
    // $_SESSION['filename'] = $fileNameNew;
  
  
    if (mail($to, $subject, $message, $headers)) {
      // header("Location: patient_confirmation.php");
  
  
      echo "
              <script type=\"text/javascript\">
              window.location.href = 'res_msg.php';
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
  
}

// if (isset($_POST['hold'])){

//     $to = $profile->email; // Receiver Email ID, Replace with your email ID
//     $subject = "Insufficient Information";
//     $message = "Name :" . $profile->fullname . "\n" . "Phone :" . $profile->phone . "\n" . "Address :" . $profile->address . "\n"  . "\n" . "\n" . "Wrote the following :" . "\n\n" . $profile->ptype. "\n" . "\n" . "Doctor's response : Your given information was not enough to give you a accurate response.So visit us physically or give your information correctly next time.";
//     $headers = "From: " . "rithyamforbe@gmail.com";
  
//     $_SESSION['regname'] = $_POST['fullname'];
//     $_SESSION['filename'] = $fileNameNew;
  
  
//     if (mail($to, $subject, $message, $headers)) {
//       // header("Location: patient_confirmation.php");
  
  
//     //   echo "
//     //           <script type=\"text/javascript\">
//     //           window.location.href = 'patient_confirmation.php';
//     //           </script>
//     //       ";
//       // echo RedirectURL('patient_confirmation.php');
//     } else {
//       // header("Location: error.php");
//     //   echo "
//     //           <script type=\"text/javascript\">
//     //           window.location.href = 'error.php';
//     //           </script>
//     //       ";
//     }

// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style1.css">
  <link rel="stylesheet" href="style/css_responsive.css">

  <title>Document</title>
</head>

<body>
  <?php
        include 'splitfile/navbar.php' 
        ?>

  <div class="container">

    <h1>Message</h1>

    <form action="" method="post" enctype="multipart/form-data">

      


        <label for="response"></label>
      <textarea name="message" id="message" cols="10" rows="5" placeholder="TEXT" required></textarea>
    

      








     

      

      <!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
      <div class="signupbtn">
        <input type="submit" name="Send" value="Send" class="btn btn-outline-primary">
      </div>
      <!-- <div class="signupbtn">
        <input type="hold" name="hold" value="Insufficient Information?" class="btn btn-outline-primary">
      </div> -->
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>