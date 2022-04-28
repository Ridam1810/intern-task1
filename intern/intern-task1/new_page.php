
<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include 'splitfile/navbar.php';
    include "init.php";
    if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }
    




//  exit();

// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

if (isset($_POST['submit'])) {



//   // $chk = '';
//   $valid= new UserValidation($_POST);
// $errors =$valid-> validateForm();

// print_r ($errors);
// die('hello');
  // if($errors){
  //   $old_name=$_POST['name'];
  //   $old_email=$_POST['email'];
  //   $old_address=$_POST['address'];
  //   $old_gender=$_POST['gender'];
    
    //print_r($errors);
  // }else{
    // $file = $_FILES['file'];

    // // print_r($file);
    // $fileName = $_FILES['file']['name'];
    
    
    
    // $fileTmpName = $_FILES['file']['tmp_name'];
    // $fileSize = $_FILES['file']['size'];
    // $fileError = $_FILES['file']['error'];
    // $fileType = $_FILES['file']['type'];
    
    // $fileExt = explode('.', $fileName);
    // $fileActualExt = strtolower(end($fileExt)); 
    // $allowed=array('jpg','jpeg','png','pdf');
    
    // if(in_array($fileActualExt, $allowed)){
    //     if($fileError === 0){
    //         if ($fileSize < 1000000) {
    //             $fileNameNew = uniqid('', true).".". $fileActualExt;
    //             $fileDestination = 'Uploads/'. $fileNameNew;
    //             move_uploaded_file($fileTmpName, $fileDestination);
                
    //             //header("Location: guestentry.php");
                
    
    
    //         }else{
    
    //             echo"File is too big!";
    //         }
    
    
    //     }else{
    
    //         echo"There was one error uploading your file!";
    
    //     }
    
    
    
    // }else{
    
    //     echo "You cannot upload this type of flies!";
    
    // }
    echo $_POST['file'];exit();
    



    $data = [
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
      'address' => $_POST['address'],
      'ptype' => $_POST['ptype'],
      'file' => $_POST['file'],
      'message' => $_POST['message'],
    ];


    // print_r($data);
    // die('lau');

  

    // foreach ($data['tech'] as $chk1) {
    //   $chk .= $chk1 . ",";
    // }

      if ($source->Query(
        "INSERT INTO `guest` (fullname,email,phone,address,ptype,file,message) VALUES (?,?,?,?,?,?,?)",
        [$data['fullname'], $data['email'],$data['phone'],$data['address'],$data['ptype'],$data['file'],$data['message']]
      )) 
      {


      }
    }
      




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
    <select name="ptype" id="speciality">
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
    <label for="checkbox" id="cbtext"><input type="checkbox" id="checkbox">I agree to the <a href="t&c.html">terms of service</a> and <a href="t&c.html">privacy policy</a> .</label>

    <div class="signupbtn">
              <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
            </div>
  </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

