<?php

if (!isset($_SESSION)) {
  session_start();
}
include 'splitfile/navbar.php';
include "init.php";
$_SESSION['is_condition'] = false;
error_reporting(E_ERROR | E_PARSE);




//  exit();

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
  $file = $_FILES['file'];

  // print_r($file);
  $fileName = $_FILES['file']['name'];

  // echo $fileName;
  // die('lau');

  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 10000000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = 'Uploads/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);

        //header("Location: guestentry.php");



      } else {

        echo "File is too big!";
      }
    } else {

      echo "There was one error uploading your file!";
    }
  } else {

    echo "You cannot upload this type of flies!";
  }





  $data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'ptype' => $_POST['ptype'],
    'file' => $fileNameNew,
    //'file' => 'abc.jpg',
    'message' => $_POST['message'],
    'response' => $_POST['response'],
    'test_list' => $_POST['test_list'],
    'guestId' => $_POST['guestId']
  ];




  // // foreach ($data['tech'] as $chk1) {
  // //   $chk .= $chk1 . ",";
  // // }
  if ($source->Query(
    "INSERT INTO `guest` (name,email,phone,address,ptype,file,message,response,test_list,guestId) VALUES (?,?,?,?,?,?,?,?,?,?)",
    [$data['name'], $data['email'], $data['phone'], $data['address'], $data['ptype'], $data['file'], $data['message'],$data['response'],$data['test_list'],$data['guestId']]
  )) {
  }




  $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
  $subject = "Confirmation";
  $message = "Name :" . $_POST['name'] . "\n" . "Phone :" . $_POST['phone'] . "\n" . "Address :" . $_POST['address'] . "\n" . "Problem Type :" . $_POST['ptype'] . "\n" . "\n" . "Wrote the following :" . "\n\n" . $_POST['message'];
  $headers = "From: " . "rithyamforbe@gmail.com";

  $_SESSION['regname'] = $_POST['name'];
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

    <h1>Patient Details</h1>

    <form action="" method="post" enctype="multipart/form-data">

      <div class="fdl">

        <label for="name">Full Name</label>
        <!-- <input id="name" name="fullname" type="text" placeholder="Alex Hunter" required> -->
        <input id="name" type="name" name="name" value="<?php echo $_SESSION['username']; ?>" readonly>
        <label for="phone">Phone</label>
        <?php if($_SESSION['utype']!=3) {?>
        <input id="phone" name="phone" type="tel" placeholder="+880-1787-748377" required>
        <?php  } else{ ?>
          <input id="phone" type="phone" name="phone" value="<?php echo $_SESSION['phone']; ?>" readonly>

<?php  }?>
      </div>

      <div class="fdr">

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="<?php echo $_SESSION['email']; ?>" readonly>

        <label for="address">Address</label>
        <?php if ($_SESSION['utype']>0) {?>
				<input id="address" type="address"  name="address" value="<?php echo $_SESSION['add']; ?>" readonly>
				<?php  } else{ ?>
          <input id="address" name="address" type="address" placeholder="Street" required>
			<?php  } ?>

        <label for="formFileSm" class="form-label"></label>
        <input class="form-control form-control-sm" id="file" name="file" type="file" >

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
      <textarea name="message" id="message" cols="30" rows="4" placeholder="Write down your messages here" required></textarea>
      <input id="response" type="response" name="response" value="(Pending)" hidden>
      <input id="test_list" type="test_list" name="test_list" value="(Pending)" hidden>
      <input id="guestId" type="guestId" name="guestId" value="<?php echo $_SESSION['idno']; ?>" hidden>

      <br>
      <label for="checkbox" id="cbtext"><input type="checkbox" id="checkbox" required>I agree to the <a href="t&c.html">terms of service</a> and <a href="t&c.html">privacy policy</a> .</label>

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