<?php
include "init.php";

?>


<html>

<head>
    <title>Home</title>
    <meta name="viewpost" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css_responsive.css">
</head>

<body>
    <!-- navbar -->
    <?php 
    include 'splitfile/navbar.php';

    if(!empty($_SESSION['delete_user'])){
        // echo $_SESSION['delete_user'];
    }
    
    ?>




    <div class="container-fluid">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-1">Name</th>
                        <th class="col-1">Email</th>
                        <th class="col-1">Phone</th>
                        <th class="col-1">Address</th>
                        <th class="col-1">Problem type</th>
                        <th class="col-1">message</th>
                        <th class="col-1">picture</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $source->Query("SELECT * FROM guest");
                    $details = $source->FetchAll();
                    $numrow = $source->CountRows();

                    if ($numrow > 0) {
                        foreach ($details as $row) :

                            echo "
                <tr>
                <td>" . $row->id . "</td>
                <td>" . $row->fullname . "</td>
                <td>" . $row->email . "</td>
                <td>" . $row->phone . "</td>
                <td>" . $row->address . "</td>
                <td>" . $row->ptype . "</td>
                <td>" . $row->message . "</td>
                <td>" . $row->file . "</td>


                



                <td>  
                 <a href='deleteguest.php?deleteuser=".$row->id."' class='.btn-sm btn-outline-danger mr-2'>Delete</a> </td>
                </tr>";

                        endforeach;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>



SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = mail@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"



<div class="login">

          <h5> INDEX PAGE FOR REGISTER EMPLOYEE </h5>

          <div class="inputall">
            <div class="input">
              <h4>Full Name</h4>
              <input type="name" name="name" value="<?php if (isset($old_name)) echo $old_name; ?>">
              <div class="errors">
                <?php echo $errors['name'] ?? '' ?>
              </div>
            </div>
            <div class="input">
              <h4>Email</h4> <input type="email" name="email" value=" <?php if (isset($old_email)) echo $old_email; ?>">
              <div class="errors">
                <?php echo $errors['email'] ?? '' ?>
              </div>
            </div>
            <div class="input">
              <h4>Address</h4> <input type="text" name="address" value="<?php if (isset($old_address)) echo $old_address; ?>">
              <div class="errors">
                <?php echo $errors['address'] ?? '' ?>
              </div>
            </div>

            <div class="gender">
              <input type="radio" name="gender" value="male" <?php if (isset($old_gender) && $old_gender == "male") echo ' checked'; ?>> Male
              <input type="radio" name="gender" value="female" <?php if (isset($old_gender) && $old_gender == "female") echo ' checked'; ?>> Female
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