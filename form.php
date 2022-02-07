<?php
//include'connection.php';
    //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['done'])) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $emp_id = $_POST['emp_id'];
        $gender = $_POST['gender'];
        $uname = $_POST['uname'];
        $int = $_POST['int'];
        $number = $_POST['number'];
        $comm = $_POST['comm'];
        $agree = $_POST['agree'];
       
        /*echo '<strong>Success</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';*/
      $userName="root";
$password="";
$server='localhost';
$database='basic';

$con=mysqli_connect($server,$userName,$password,$database);

        if ($con) {
            echo "connection successful";
            // $sql = "INSERT INTO `form` ( `first`, `last`,`emp_id`,`gender`,`uname`,`int`,`number`,`comm`,`agree`) VALUES ( '$first', '$last','$emp_id','$gender','$uname','$int','$number','$comm','$agree')";
            $sql = "INSERT INTO `form` ( `first`, `last`,`emp_id`,`gender`,`uname`,`int`,`number`,`comm`,`agree`) VALUES ( $first, $last,$emp_id,$gender,$uname,$int,$number,$comm,$agree)";
            $result = mysqli_query($con, $sql);
            echo "Executed!";

            /*if ($result) {
                echo 'Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
            }
        } else {
            echo "connection failed";*/
        // }
    }
  }


    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
  <style>
    body {
      background-image: url('k.jpg');
    }
    </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.html"style="color: black;">icddrb</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./List.html">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./form.html">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./update.html">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./view.html">view</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

    <div class="container mx-auto">
        <form class="row g-3 needs-validation" action="form.php" method="post"  >
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" placeholder="Text" aria-label="Text" aria-describedby="basic-addon1">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control"placeholder="Text" aria-label="Text" id="validationCustom02"  required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Employee ID </label>
            <div class="input-group has-validation">
              
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
                
              </div>
            </div>
            
          </div>
          
          <div class="col-md-0" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Male</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Female</label>
          
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Other</label>
          </div>
          
          <div class="col-md-5">
            <label for="validationCustom03" class="form-label">University Name</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Interest</label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
              <option>Front-End Engineering Intern</option>
              <option>Back-End Engineering Intern</option>
              <option>Full Stack Software Engineering Intern</option>
              <option>PakMobile Engineering Internistan</option>
              <option>Product Management Intern</option>
              <option>Data Scientist Intern</option>
              
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
    
          <section class="col-12">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Text" aria-label="Text" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">
              </label>
            </div>
          </section>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <input class="btn btn-primary" type="submit" name="done">Submit form</button>

          </div>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>