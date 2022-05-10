<?php
if (!isset($_SESSION)) {
	session_start();
}
include 'splitfile/navbar.php';
include "init.php";
error_reporting(E_ERROR | E_PARSE);
// if ($_SESSION['utype'] =0 && !isset($_SESSION['username'])) {
//   header("Location: login.php");
// }
// include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

// error_reporting(0);


// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index1.php");
// }

if (isset($_POST['submit'])) {

    $file = $_FILES['test_result'];

    // print_r($file);
    $fileName = $_FILES['test_result']['name'];
  
    // echo $fileName;
    // die('lau');
  
    $fileTmpName = $_FILES['test_result']['tmp_name'];
    $fileSize = $_FILES['test_result']['size'];
    $fileError = $_FILES['test_result']['error'];
    $fileType = $_FILES['test_result']['type'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
  
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000000) {
          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $fileDestination = 'Test_results/' . $fileNameNew;
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
		'test_result' => $fileNameNew
		
		// 'cpassword' => sha1($_POST['cpassword'])
	];

	// if ($data['password'] == $data['cpassword']) {




	

		if ($source->Query(
			// "INSERT INTO `guest` (test_result) VALUES (?)",
			// [$data['test_result']]
			"UPDATE guest SET test_result=? where id=?",
    [$data['test_result'], $_GET['id']]
		)) {
			// $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
			// $subject = "Confirmation";
			// $message = "Your Account created succesfully as admin!" . "\n" . "Login information down below." . "\n" . "UserName :" . $_POST['name'] . "\n" . "Email :" . $_POST['email'] . "\n" . "Password :" . $data['password'];
			// $headers = "From: " . "rithyamforbe@gmail.com";
			// $_SESSION['regname'] = $_POST['name'];
			// if (mail($to, $subject, $message, $headers)) {
			// 	// header("Location: patient_confirmation.php");
		
		
			// 	echo "
			// 		<script type=\"text/javascript\">
			// 		window.location.href = 'admin_regmsg.php';
			// 		</script>
			// 	";
			// 	// echo RedirectURL('patient_confirmation.php');
			// } else {
			// 	// header("Location: error.php");
			// 	echo "
			// 		<script type=\"text/javascript\">
			// 		window.location.href = 'error.php';
			// 		</script>
			// 	";
			// }
			// echo "<script>alert('Wow! User Registration Completed.')</script>";
			// // $username = "";
			// // $email = "";
			// // $_POST['password'] = "";
			// // $_POST['cpassword'] = "";
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	
	
	// } else {
	// 	echo "<script>alert('Password Not Matched.')</script>";
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

		<h1>Upload Your Tests results</h1>

		<form action="" method="post" enctype="multipart/form-data">

			<div class="fdl">

            <label for="formFileSm" class="form-label"> Upload JPG file and if you have multiple image then convert it into a single PDF.</label>
        <input class="form-control form-control-sm" id="file" name="test_result" type="file" >
        <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
			</div>
			<!-- <div class="fdr">

				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="alex.hunter@email.com" required>

			</div> -->
		

			<!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
			
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>