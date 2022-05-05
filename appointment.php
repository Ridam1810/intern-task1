<?php

if (!isset($_SESSION)) {
  session_start();
}
include 'splitfile/navbar.php';
include "init.php";
$_SESSION['is_condition'] = false;
error_reporting(E_ERROR | E_PARSE);



$query = $source->Query("Select * FROM users where id=?", [$_GET['id']]);
$profile = $source->singleRow();





//  exit();

//  exit();

// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

if (isset($_POST['submit'])) {
  $query = $source->Query("SELECT *  FROM `appointment` WHERE `docId` =". $profile->id );

  $all = $source->FetchAll();
  $numrow = $source->CountRows();
  // $query = $source->Query("Select * FROM users where id=".$profile->id. "AND date=".$_POST['date']);
  // $details = $source->FetchAll();
$token=bin2hex(random_bytes(15)) ;

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
  // }else
  // echo $fileName;
  // die('lau');

  // $query = $source->Query("Select * FROM users where date=".$_POST['date']. "AND time=". $_POST['time']);
  // $details = $source->FetchAll();
  // $numrow = $source->CountRows();

  $data = [
    'docId' => $_POST['docId'],
    'doc' => $_POST['doc'],
    'docEmail' => $_POST['docEmail'],
    'time' => $_POST['time'],
    'patientName' => $_POST['patientName'],
    'date' => $_POST['date'],
    'patientEmail' => $_POST['patientEmail'],
    'status' => $_POST['status']
  ];
  // `time` = ".$_POST['date'] ."AND `date` = ".$_POST['date'] ."AND 
  // $query = $source->Query("Select * FROM appointment where docId=".$profile->id."AND date=".$_POST['date']. "AND time=". $_POST['time']);
  $query = $source->Query("SELECT *  FROM `appointment` WHERE `docId` =". $profile->id );

  $all = $source->SingleRow();
  $numrow = $source->CountRows();
if($all->date == $_POST['date'] && $all->time == $_POST['time']){

  echo "
            <script type=\"text/javascript\">
            window.location.href = 'booked.php';
            </script>
        ";

}else{

  if ($source->Query(
    "INSERT INTO `appointment` (docId,doc,docEmail,time,patientName,date,patientEmail,status) VALUES (?,?,?,?,?,?,?,?)",
    [$profile->id, $profile->name, $profile->email, $_POST['time'], $_SESSION['username'], $_POST['date'],$_SESSION['email'], $data['status']]
  )) {
  }
}
  // // foreach ($data['tech'] as $chk1) {
  // //   $chk .= $chk1 . ",";
  // // 



  // $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
  // $subject = "Confirmation";
  // $message = "Name :" . $_POST['fullname'] . "\n" . "Phone :" . $_POST['phone'] . "\n" . "Address :" . $_POST['address'] . "\n" . "Problem Type :" . $_POST['ptype'] . "\n" . "\n" . "Wrote the following :" . "\n\n" . $_POST['message'];
  // $headers = "From: " . "rithyamforbe@gmail.com";

  // $_SESSION['regname'] = $_POST['fullname'];
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

    <h1>Appointment</h1>

    <form action=" " method="post" enctype="multipart/form-data">

      <div class="fdl">
      <label for="speciality">Doctor's Name</label>
      <input type="name"  name="name" value="<?php echo $profile->name; ?>" readonly>
      <label for="speciality">Doctor's Speciality</label>
      <input type="name"  name="name" value="<?php echo $profile->ptype; ?>" readonly>
      <label for="speciality">Choose A Date</label>
      <select name="date" id="speciality">
        <option value="<?php 
        $t = date('Y-m-d');
        echo $t;
        // $date = "Sun, 01 May 2022 12:40:00 +880";
        // $newdate = date("Y-m-d G:i:s",strtotime ( '+1 day' , strtotime ( $date ) )) ;
        // echo $newdate;
        ?>
        "><?php 
       
        echo $t;
        $n=$t;
        // $date = "Sun, 01 May 2022 12:40:00 +880";
        // $newdate = date("Y-m-d G:i:s",strtotime ( '+1 day' , strtotime ( $date ) )) ;
        // echo $newdate;
        ?></option>
        <option value="<?php  $n =date("Y-m-d", strtotime ('+1 day', strtotime($n)));
        echo $n;
        // $date = "Sun, 01 May 2022 12:40:00 +880";
        // $newdate = date("Y-m-d G:i:s",strtotime ( '+1 day' , strtotime ( $date ) )) ;
        // echo $newdate;
        ?>"><?php 
        echo $n;
        // $date = "Sun, 01 May 2022 12:40:00 +880";
        // $newdate = date("Y-m-d G:i:s",strtotime ( '+1 day' , strtotime ( $date ) )) ;
        // echo $newdate;
        ?></option>
        
      </select>

        <label for="name">Available Time</label>
        <select name="time" id="speciality">
        <option value="9:00 am">9:00 am</option>
        <option value="10:00 am">10:00 am</option>
        <option value="11:00 am">11:00 am</option>
        <option value="01:00 pm">01:00 pm</option>
        <option value="02:00 pm">02:00 pm</option>
        <option value="03:00 pm">03:00 pm</option>
        
      </select>
        
        
        <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
      </div>

      








     

      <label for="message"></label>
      <!-- <textarea name="message" id="message" cols="30" rows="4" placeholder="Write down your messages here" required></textarea> -->

     
      <!-- <label for="checkbox" id="cbtext"><input type="checkbox" id="checkbox" required>I agree to the <a href="t&c.html">terms of service</a> and <a href="t&c.html">privacy policy</a> .</label> -->

      <!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
      
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


<?php

unset($_SESSION['filename']);
?>