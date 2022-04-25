<?php

include "init.php";
include "validation.php";
error_reporting(E_ERROR | E_PARSE);

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

$query = $source->Query("Select * FROM users where id=?", [$_GET['id']]);
$profile = $source->singleRow();

if (isset($_POST['submit'])) {


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
    'date' => $_POST['date'],
    'ptype' => $_POST['ptype'],
    'file' => $fileNameNew,
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'gender' => $_POST['gender'],
    'utype' => $_POST['utype']

  ];


  if (!empty($data['file'])) {

    $path = "Uploads/" . $profile->file;
    //echo $path;exit();
    unlink($path);
  } else {
    $data['file'] = $profile->file;
  }
  if ($source->Query(
    "UPDATE users SET name=?,surname=?,email=?,date=?,gender=?,address=?,ptype=?,file=? where id=?",
    [$data['name'], $data['surname'], $data['email'], $data['date'], $data['gender'], $data['address'], $data['ptype'], $data['file'], $_GET['id']]
  )) {

    header("location:list.php");
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
      <h1>Update profile</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="fdl" id="fdl1">

          <input type="name" placeholder="First name" name="name" value="<?php echo $profile->name; ?>">
          <div class="errors">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <input type="surname" name="surname" placeholder="Surname" value="<?php echo $profile->surname; ?>">
          <div class="errors">
            <?php echo $errors['surname'] ?? '' ?>
          </div>
          <label for="dob">Date of birth</label>
          <input type="date" name="date" value="<?php echo $profile->date; ?>" id="dob">
          <div class="gender">
            <?php

            if ($profile->gender == "male") { ?>
              <input type="radio" name="gender" checked> Male <input type="radio" name="gender"> Female
            <?php
            } else { ?>

              <input type="radio" name="gender"> Male <input type="radio" name="gender" checked> Female
            <?php } ?>
          </div>
        </div>

        <div class="fdr">
          <input type="email" name="email" value="<?php echo $profile->email; ?>" placeholder="email address">
          <input type="text" name="address" value="<?php echo $profile->address; ?>" placeholder="Address">
          <label for="speciality">Choose A speciality</label>
          <select name="ptype" id="speciality" value="<?php echo $profile->ptype; ?>">
            <?php
            //$type =  $profile->ptype;
            ?>
            <!-- <option value="<?php //echo $profile->ptype; 
                                ?>"><?php //echo="$type"; 
                                                                  ?> -->
            <!-- </option> -->
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