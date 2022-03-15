<?php 

include "init.php";
include "validation.php";


// error_reporting(0);


// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index1.php");
// }

if (isset($_POST['submit'])) {

	$data = [
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'password' => sha1($_POST['password']),
		'cpassword' => sha1($_POST['cpassword'])
		
	  ];

	

	if ($data['password'] == $data['cpassword']) {


		$query = $source->Query("Select * FROM users where email='".$_POST['email']."'");
		$result = $source->SingleRow();



		if (!$result) {

			if ($source->Query(
				"INSERT INTO `users` (username,email,password) VALUES (?,?,?)",
				[$data['username'], $data['email'],$data['password']]))
			 {
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
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>