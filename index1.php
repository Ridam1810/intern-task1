<?php

//  exit();
include "init.php";
include "validation.php";

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['signup'])) {
  $chk = '';
  $valid= new UserValidation($_POST);
$errors =$valid-> validateForm();

// print_r ($errors);
// die('hello');
  if($errors){
    $old_name=$_POST['name'];
    $old_email=$_POST['email'];
    $old_address=$_POST['address'];
    $old_gender=$_POST['gender'];
    
    //print_r($errors);
  }else{
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
        [$data['name'], $data['email'],$data['gender'],$data['address'],$chk]
      )) {
      
      }
  }
  }
?>


<html>

<head>
  <title>Home</title>
  <meta name="viewpost" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/botstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
  <!-- navbar -->
  <?php include 'splitfile/navbar.php' ?>



  <div class="container-fluid">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="login">
          <h1>Registration</h1>
          <div class="inputall">
            <div class="input">
              <h4>Full Name</h4>
               <input type="name" name="name" value="<?php if(isset($old_name)) echo $old_name; ?>">
               <div class="errors">
                <?php echo $errors['name'] ?? '' ?>
            </div>
            </div>
            <div class="input">
              <h4>Email</h4> <input type="email" name="email" value=" <?php if(isset($old_email)) echo $old_email; ?>" >
              <div class="errors">
                <?php echo $errors['email'] ?? '' ?>
            </div>
            </div>
            <div class="input">
              <h4>Address</h4> <input type="text" name="address" value="<?php if(isset($old_address)) echo $old_address; ?>" >
              <div class="errors">
                <?php echo $errors['address'] ?? '' ?>
            </div>
            </div>
          
            <div class="gender">
              <input type="radio" name="gender" value="male" <?php if(isset($old_gender) && $old_gender=="male") echo ' checked'; ?> >  Male 
              <input type="radio" name="gender" value="female" <?php if(isset($old_gender) && $old_gender=="female") echo ' checked';?> > Female
            </div>

            <tr>
              <td colspan="2">Select techlogy: </td>
            </tr>
            <tr>
              <td>PHP</td>
              <td><input type="checkbox" name="tech[]" value="PHP"></td>
            </tr>
            <tr>
              <td>.Net</td>
              <td><input type="checkbox" name="tech[]" value=".Net"></td>
            </tr>
            <tr>
              <td>Java</td>
              <td><input type="checkbox" name="tech[]" value="Java"></td>
            </tr>
            <tr>
              <td>Javascript</td>
              <td><input type="checkbox" name="tech[]" value="javascript"></td>
            </tr>
            <div class="signupbtn">
              <input type="submit" name="signup" value="Signup" class="btn btn-outline-primary">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>


</body>

</html>