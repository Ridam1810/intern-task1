<?php

//  exit();
include "init.php";
include "validation.php";

if ($_SESSION['utype']!=0 && !isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['submit'])) {
  
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$generator = substr(str_shuffle($chars), 0, 8);



  $file = $_FILES['file'];

  // print_r($file);
  $fileName = $_FILES['file']['name'];
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
      'surname' => $_POST['surname'],
      'email' => $_POST['email'],
      'date' => $_POST['date'],
      'ptype' => $_POST['ptype'],
      'file' => $fileNameNew,
      'address' => $_POST['address'],
      'gender' => $_POST['gender'],
      'password' => 	$generator,
      'utype' => $_POST['utype']
      
    ];



    // foreach ($data['tech'] as $chk1) {
    //   $chk .= $chk1 . ",";
    // }
    if ($source->Query(
      "INSERT INTO `users` (name,surname,email,date,gender,address,ptype,file,utype,password) VALUES (?,?,?,?,?,?,?,?,?,?)",
      [$data['name'], $data['surname'], $data['email'], $data['date'], $data['gender'], $data['address'], $data['ptype'], $data['file'], $data['utype'], $data['password']]
    )) {
    }

    $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
	$subject = "Confirmation";
	$message = "Your Account created succesfully as admin!" . "\n" . "Login information down below." . "\n" . "UserName :" . $_POST['username'] . "\n" . "Email :" . $_POST['email'] . "\n" . "Password :" . $data['password'];
	$headers = "From: " . "rithyamforbe@gmail.com";
	$_SESSION['regname'] = $_POST['username'];
	if (mail($to, $subject, $message, $headers)) {
		// header("Location: patient_confirmation.php");


		echo "
            <script type=\"text/javascript\">
            window.location.href = 'emp_regmsg.php';
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
  <title>Home</title>
  <meta name="viewpost" content="width=device-width, initial-scale=1.0" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style1.css">
  <link rel="stylesheet" href="style/css_responsive.css">
</head>

<body>
  <!-- navbar -->
  <?php include 'splitfile/navbar.php' ?>

	

  <div class="container-fluid">
    <div class="container">
    <h1>Employee Registration</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="fdl" id="fdl1">

          <input type="name" placeholder="First name" name="name" value="<?php if (isset($old_name)) echo $old_name; ?>" required>
          <div class="errors">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <input type="surname" name="surname" placeholder="Surname" value="<?php if (isset($old_name)) echo $old_name; ?>" required>
          <div class="errors">
            <?php echo $errors['surname'] ?? '' ?>
          </div>
          <label for="dob">Date of birth</label>
          <input type="date" name="date" id="dob">
          <div class="gender">
            <input type="radio" name="gender" value="male" <?php if (isset($old_gender) && $old_gender == "male") echo ' checked'; ?> required> Male
            <input type="radio" name="gender" value="female" <?php if (isset($old_gender) && $old_gender == "female") echo ' checked'; ?> required> Female
          </div>
        </div>

        <div class="fdr">
          <input type="email" name="email" placeholder="email address" required>
          <input type="text" name="address" placeholder="Address" required>
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

          <label for="formFileSm" class="form-label">Upload a photo</label>
          <input class="form-control form-control-sm" id="file" name="file" type="file" required>
          <input type="hidden" name="utype" value="1">
        </div>
        <div class="signupbtn">
          <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
        </div>
      </form>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>