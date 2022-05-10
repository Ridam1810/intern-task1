
<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include 'splitfile/navbar.php';
    include "init.php";
   




//  exit();

// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

if (isset($_POST['submit'])) {

// $file='627a94223e2674.28215057.pdf';
// $filename='627a94223e2674.28215057.pdf';
//   header('Content-type: application/pdf');
//   // header("Content-Disposition: inline; filename=627a94223e2674.28215057.pdf");.
//   header('Content-Disposition: inline; filename="' . $filename . '"');
//   header('Content-Transfer-Encoding: binary');
//   header('Accept-Ranges: bytes');
//   @readfile('$file');
echo "
            <script type=\"text/javascript\">
            window.location.href = 'Untitled-1.php';
            </script>
        ";
}
  
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  
  <title>Document</title>
</head>
<body>
<!-- <?php
//include 'splitfile/navbar.php' 
?> -->

<!-- <div class="container">
  
  <h1>Patient Details</h1>

  <form action="" method="post" enctype="multipart/form-data">

    <div class="fdl">

      <label for="name">Full Name</label>
      <input id="name" name="fullname" type="text" placeholder="Alex Hunter">

      <label for="phone">Phone</label>
      <input id="phone" name="phone" type="tel" placeholder="+880-1787-748377">
      

    </div>
      
    <div class="fdr">

      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="alex.hunter@email.com">

      <label for="address">Address</label>
      <input id="address" name="address" type="text" placeholder="Street">

      <label for="formFileSm" class="form-label"></label>
      <input class="form-control form-control-sm" id="file" name="file" type="file">

    </div>
    

    



    

    <label for="speciality">Choose A speciality</label>
    <select name="ptype" id="speciality" >
      <option value="Allergy and Immunology">Allergy and Immunology</option>
      <option value="Anesthesiology">Anesthesiology</option>
      <option value="Dermatology">Dermatology</option>
      <option value="Diagnostic radiology">Diagnostic radiology</option>
      <option value="Emergency medicine">Emergency medicine</option>
      <option value="Family medicine">Family medicine</option>
      <option value="Internal medicine">Internal medicine</option>
      <option value="Medical genetics">Medical genetics</option>
      <option value="Neurology">Neurology</option>
      <option value="Nuclear medicine">Nuclear medicine</option>
      <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
      <option value="Ophthalmology">Ophthalmology</option>
      <option value="Pathology">Pathology</option>
      <option value="Pediatrics">Pediatrics</option>
      <option value="Physical medicine and Rehabilitation">Physical medicine and Rehabilitation</option>
      <option value="Preventive medicine">Preventive medicine</option>
      <option value="Psychiatry">Psychiatry</option>
      <option value="Urology">Urology</option>
    </select>

    <label for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="4" placeholder="Write down your messages here"></textarea>

    <br>
    <label for="checkbox" id="cbtext"><input type="checkbox" id="checkbox">I agree to the  <a href="t&c.html">terms of service</a> and  <a href="t&c.html">privacy policy</a> .</label>

   <button id="submit" type="submit" name="submit" value="submit">Submit</button> 
    <div class="signupbtn">
              <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
            </div>
  </form>
</div> -->





<div class="container">
  <a href="Test_results/627a94223e2674.28215057.pdf" target="_rithyam">View PDF</a>
 
  <!-- header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");
@readfile('path\to\filename.pdf'); -->
  <h1>Patient Details</h1>

  <form action="" method="post" >

    <div class="fdl">

     

    <div class="signupbtn">
              <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
            </div>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

