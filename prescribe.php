<?php

if (!isset($_SESSION)) {
  session_start();
}
include 'splitfile/navbar.php';
include "init.php";
$_SESSION['is_condition'] = false;
error_reporting(E_ERROR | E_PARSE);


$_SESSION['tempid']=$_GET['id'];

//  exit();

//  exit();

// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
if (isset($_POST['view'])) {

    echo "
            <script type=\"text/javascript\">
            window.location.href = 'view_pdf.php';
            </script>
        ";
}
// }
$query = $source->Query("Select * FROM guest where id=?", [$_GET['id']]);
$profile = $source->singleRow();
if (isset($_POST['submit'])) {



  




  $data = [
    'prescription' => $_POST['prescription'],
    
    
  ];
  // $data = [
  //   'prescription' => $_POST['prescription'],
  //   'm1' => $_POST['m1'],
  //   't1' => $_POST['t1'],
  //   'd1' => $_POST['d1'],
  //   'm2' => $_POST['m2'],
  //   't2' => $_POST['t2'],
  //   'd2' => $_POST['d2'],
  //   'm3' => $_POST['m3'],
  //   't3' => $_POST['t3'],
  //   'd3' => $_POST['d3'],
  //   'm4' => $_POST['m4'],
  //   't4' => $_POST['t4'],
  //   'd4' => $_POST['d4'],
  //   'm5' => $_POST['m5'],
  //   't5' => $_POST['t5'],
  //   'd5' => $_POST['d5'],
  //   'm6' => $_POST['m6'],
  //   't6' => $_POST['t6'],
  //   'd6' => $_POST['d3'],
  //   'm7' => $_POST['m7'],
  //   't7' => $_POST['t7'],
  //   'd7' => $_POST['d7']

    
  // ];



  // // foreach ($data['tech'] as $chk1) {
  // //   $chk .= $chk1 . ",";
  // // }
  if ($source->Query(
    "UPDATE guest SET prescription=? where id=?",
    [$data['prescription'], $_GET['id']]
  )) {
  }
  // if ($source->Query(
  //   "UPDATE guest SET prescription=?,m1=?, t1=?, d1=?,m2=?, t2=?, d2=?,m3=?, t3=?, d3=?,m4=?, t4=?, d4=?,m5=?, t5=?, d5=?,m6=?, t6=?, d6=?,m7=?, t7=?, d7=?, where id=?",
  //   [$data['prescription'],$data['m1'],$data['t1'],$data['d1'],$data['m2'],$data['t2'],$data['d2'],$data['m3'],$data['t3'],$data['d3'],$data['m4'],$data['t4'],$data['d4'],$data['m5'],$data['t5'],$data['d5'],$data['m6'],$data['t6'],$data['d6'],$data['m7'],$data['t7'],$data['d7'], $_GET['id']]
  // )) {
  // }
  




  // $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
  // $subject = "Confirmation";
  // $message = "Name :" . $_POST['name'] . "\n" . "Phone :" . $_POST['phone'] . "\n" . "Address :" . $_POST['address'] . "\n" . "Problem Type :" . $_POST['ptype'] . "\n" . "\n" . "Wrote the following :" . "\n\n" . $_POST['message'];
  // $headers = "From: " . "rithyamforbe@gmail.com";

  // $_SESSION['regname'] = $_POST['name'];
  // $_SESSION['filename'] = $fileNameNew;


  // if (mail($to, $subject, $message, $headers)) {
  //   // header("Location: patient_confirmation.php");


  //   echo "
  //           <script type=\"text/javascript\">
  //           window.location.href = 'patient_confirmation.php';
  //           </script>
  //       ";
  //   // echo RedirectURL('patient_confirmation.php');
  // } else {
  //   // header("Location: error.php");
  //   echo "
  //           <script type=\"text/javascript\">
  //           window.location.href = 'error.php';
  //           </script>
  //       ";
  // }
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

  <div class="container">

    <h1>Prescription</h1>

    <form action="" method="post" >

     
    <div class="row">
  <div class="col-6">
    <input name="m1" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t1" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d1" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m2" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t2" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d2" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m3" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t3" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d3" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m4" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t4" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d4" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m5" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t5" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d5" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m6" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t6" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d6" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
<div class="row">
  <div class="col-6">
    <input name="m7" type="text" class="form-control" placeholder="Medicine Name" >
  </div>
  <div class="col-2">
    <input name="t7" type="text" class="form-control" placeholder="Time" >
  </div>
  <div class="col-2">
    <input  name="d7" type="text" class="form-control" placeholder="Days" >
  </div>
</div>
        
        

      <label for="prescription">Any Advice</label>
      <textarea name="prescription" id="message" cols="30" rows="10"  required></textarea>
      

      <!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
      <div class="signupbtn">
        <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


<?php

unset($_SESSION['filename']);
?>