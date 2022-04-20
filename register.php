<?php

include "init.php";
include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }

// error_reporting(0);


// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index1.php");
// }

if (isset($_POST['submit'])) {

	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$generator = substr( str_shuffle( $chars ), 0, 8 );

	$data = [
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'password' => $generator,
		'utype' => $_POST['utype']
		// 'cpassword' => sha1($_POST['cpassword'])

	];



	// if ($data['password'] == $data['cpassword']) {


	$query = $source->Query("Select * FROM users where email='" . $_POST['email'] . "'");
	$result = $source->SingleRow();



	if (!$result) {

		if ($source->Query(
			"INSERT INTO `users` (username,email,password,utype) VALUES (?,?,?,?)",
			[$data['username'], $data['email'], $data['password'],$data['utype']]
		)) {
			echo "<script>alert('Wow! User Registration Completed.')</script>";
			// $username = "";
			// $email = "";
			// $_POST['password'] = "";
			// $_POST['cpassword'] = "";
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
		echo "<script>alert('Woops! Email Already Exists.')</script>";
	}

	// } else {
	// 	echo "<script>alert('Password Not Matched.')</script>";
	// }
}



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="style/css_responsive.css">


	<title>Register Form - Pure Coding</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<!-- <div class="input-group">
				<input type="password" placeholder="Password" name="password" value="$generator" required>
			</div> -->
			<!-- <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div> -->
			<input type="hidden"  name="utype" value="0" >
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<!-- <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p> -->
		</form>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>