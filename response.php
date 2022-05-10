<?php

include "init.php";
include "validation.php";
error_reporting(E_ERROR | E_PARSE);

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

$query = $source->Query("Select * FROM guest where id=?", [$_GET['id']]);
$profile = $source->singleRow();

if (isset($_POST['submit'])) {


  

  


  $data = [
    'response' => $_POST['response'],
    'test_list' => $_POST['test_list']

  ];
  
  foreach ($data['test_list'] as $chk1) {
    
    $chk .= $chk1 . ",";
  }
  $chk = rtrim($chk, ',');
  $_SESSION['test_list'] = $chk;
  $_SESSION['response'] = $_POST['response'];
  $_SESSION['guestId'] = $profile->id;

  include "reponse_insert.php";



// UPDATE `guest` SET `response`='$data['response']',`test_list`='$data['test_list']' WHERE `id`='$_GET['id']';
// echo $chk;exit();
  // if ($source->Query(
  //   "UPDATE `guest` SET `response`=".$_POST['response'].",`test_list`=".$chk." WHERE `id`=".$_GET['id']
  // )) {

  //   // $to = $profile->email; // Receiver Email ID, Replace with your email ID
  //   // $subject = "Prescription";
  //   // $message = "Name :" . $profile->fullname . "\n" . "Phone :" . $profile->phone . "\n" . "Address :" . $profile->address . "\n"  . "\n" . "\n" . "Wrote the following :" . $profile->ptype. "\n" . "\n" . "Doctor's response :".$_POST['response'];
  //   // $headers = "From: " . "rithyamforbe@gmail.com";
  
  //   // $_SESSION['regname'] = $_POST['fullname'];
  //   // $_SESSION['filename'] = $fileNameNew;
  
  
  //   // if (mail($to, $subject, $message, $headers)) {
  //   //   // header("Location: patient_confirmation.php");
  
  
  //   //   echo "
  //   //           <script type=\"text/javascript\">
  //   //           window.location.href = 'res_msg.php';
  //   //           </script>
  //   //       ";
  //   //   // echo RedirectURL('patient_confirmation.php');
  //   } else {
  //     // header("Location: error.php");
  //     echo "
  //             <script type=\"text/javascript\">
  //             window.location.href = 'error.php';
  //             </script>
  //         ";
  //   }
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

    <h1>Initial Response </h1>

    <form action="" method="post" enctype="multipart/form-data">

      <div class="fdl">

        <label for="name">Full Name</label>
        <input id="name" name="name" type="text" value="<?php echo $profile->name; ?>" readonly>

        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="tel" value="<?php echo $profile->phone; ?>" readonly>
        <label for="phone">Issues</label>
        <input id="message" name="message" type="message" value="<?php echo $profile->message; ?>" readonly>
      
      
        <label for="speciality">Tests List</label>
      <select name="test_list[]" id="speciality" multiple="multiple">
        <option value="TC, DC, ESR, Hemoglibin(CBC)">TC, DC, ESR, Hemoglibin(CBC)</option>
        <option value="B.T, C.T">B.T, C.T</option>
        <option value="M.T. Test">M.T. Test</option>
        <option value="Blood Sugar">Blood Sugar</option>
        <option value="Blood Grouping">Blood Grouping</option>
        <option value="HBs Ag">HBs Ag</option>
        <option value="Serum creatinine">Serum creatinine</option>
        <option value="VDRL">VDRL</option>
        <option value="Urine For P.T.">Urine For P.T.</option>
        <option value="Platelet Count">Platelet Count</option>
        <option value="Dengue NS1">Dengue NS1</option>
        <option value="Urine R|M|E">Urine R|M|E</option>
       
      </select>

      <!-- <label for="speciality">Tests List</label>
      <select   id="speciality" multiple="multiple">
        <option name="test_list[]" value="Allergy and Immunology">Allergy and Immunology</option>
        <option name="test_list[]" value="Anesthesiology">Anesthesiology</option>
        <option name="test_list[]" value="Dermatology">Dermatology</option>
        <option name="test_list[]" value="Diagnostic radiology">Diagnostic radiology</option>
        <option name="test_list[]" value="Emergency medicine">Emergency medicine</option>
        <option name="test_list[]" value="Family medicine">Family medicine</option>
        <option name="test_list[]" value="Internal medicine">Internal medicine</option>
        <option name="test_list[]" value="Medical genetics">Medical genetics</option>
        <option name="test_list[]" value="Neurology">Neurology</option>
        <option name="test_list[]" value="Nuclear medicine">Nuclear medicine</option>
        <option name="test_list[]" value="Obstetrics and gynecology">Obstetrics and gynecology</option>
        <option name="test_list[]" value="Ophthalmology">Ophthalmology</option>
        <option name="test_list[]" value="Pathology">Pathology</option>
        <option name="test_list[]" value="Pediatrics">Pediatrics</option>
        <option name="test_list[]" value="Physical medicine and Rehabilitation">Physical medicine and Rehabilitation</option>
        <option name="test_list[]" value="Preventive medicine">Preventive medicine</option>
        <option name="test_list[]" value="Psychiatry">Psychiatry</option>
        <option name="test_list[]" value="Urology">Urology</option>
      </select> -->


        <label for="response">Reponse</label>
      <textarea name="response" id="message" cols="30" rows="4" placeholder="TEXT"></textarea>
      </div>

      <div class="fdr">

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="<?php echo $profile->email; ?>" readonly>

        <label for="address">Address</label>
        <input id="address" name="address" type="text" value="<?php echo $profile->address; ?>" readonly>

        <label for="formFileSm" class="form-label"></label>
        <img src="Uploads/<?php echo $profile->file; ?>" height=500px width=400px>

      </div>








     

      

      <!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
      <div class="signupbtn">
        <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
      </div>
      <!-- <div class="signupbtn">
        <input type="hold" name="hold" value="Insufficient Information?" class="btn btn-outline-primary">
      </div> -->
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>