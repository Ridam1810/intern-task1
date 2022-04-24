<?php
if (!isset($_SESSION)) {
	session_start();
}
include 'splitfile/navbar.php';
include "init.php";
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

	

	$data = [
		'Oldpass' => $_POST['oldpass'],
		'newpass' => $_POST['email'],
		'cnewpass' => $generator
		
		// 'cpassword' => sha1($_POST['cpassword'])

	];

	// if ($data['password'] == $data['cpassword']) {


	$query = $source->Query("Select * FROM users where email='" . $_POST['email'] . "'");
	$result = $source->SingleRow();



	if (!$result) {

		if ($source->Query(
			"INSERT INTO `users` (username,email,password,utype) VALUES (?,?,?,?)",
			[$data['username'], $data['email'], $data['password'], $data['utype']]
		)) {
			// echo "<script>alert('Wow! User Registration Completed.')</script>";
			// // $username = "";
			// // $email = "";
			// // $_POST['password'] = "";
			// // $_POST['cpassword'] = "";
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
		echo "<script>alert('Woops! Email Already Exists.')</script>";
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

		<h1>Admin Registration</h1>

		<form action="" method="post" enctype="multipart/form-data">

			<div class="fdl">

				<label for="username">Username</label>
				<input id="name" name="username" type="text" placeholder="Alex Hunter">

			</div>
			<div class="fdr">

				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="alex.hunter@email.com">

			</div>
			<input type="hidden" name="utype" value="0">

			<!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
			<div class="signupbtn">
				<input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>