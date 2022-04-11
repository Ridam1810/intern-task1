<?php

//  exit();
include "init.php";
include "validation.php";

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['signup'])) {
  $chk = '';
  $valid = new UserValidation($_POST);
  $errors = $valid->validateForm();

  // print_r ($errors);
  // die('hello');
  if ($errors) {
    $old_name = $_POST['name'];
    $old_email = $_POST['email'];
    $old_address = $_POST['address'];
    $old_gender = $_POST['gender'];

    //print_r($errors);
  } else {
    $data = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'address' => $_POST['address'],
      'gender' => $_POST['gender'],
      'tech' => $_POST['tech'],
    ];



    foreach ($data['tech'] as $chk1) {
      $chk .= $chk1 . ",";
    }
    if ($source->Query(
      "INSERT INTO `user` (name,email,gender,address,tech) VALUES (?,?,?,?,?)",
      [$data['name'], $data['email'], $data['gender'], $data['address'], $chk]
    )) {
    }
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
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="fdl" id="fdl1">

          <input type="name" placeholder="First name" name="name" value="<?php if (isset($old_name)) echo $old_name; ?>">
          <div class="errors">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <input type="surname" name="surname" placeholder="Surname" value="<?php if (isset($old_name)) echo $old_name; ?>">
          <div class="errors">
            <?php echo $errors['surname'] ?? '' ?>
          </div>
          <label for="dob">Date of birth</label>
          <input type="date" name="date" id="dob">
          <div class="gender">
            <input type="radio" name="gender" value="male" <?php if (isset($old_gender) && $old_gender == "male") echo ' checked'; ?>> Male
            <input type="radio" name="gender" value="female" <?php if (isset($old_gender) && $old_gender == "female") echo ' checked'; ?>> Female
          </div>
        </div>

        <div class="fdr">
          <input type="email" placeholder="email address">
          <input type="text" placeholder="Address">
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

          <label for="formFileSm" class="form-label">Upload a photo</label>
          <input class="form-control form-control-sm" id="file" name="file" type="file">

        </div>
        <div class="signupbtn">
          <input type="submit" name="signup" value="Signup" class="btn btn-outline-primary">
        </div>
      </form>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>