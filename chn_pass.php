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

// echo $_SESSION['username'];
// die('kodu');

$query = $source->Query("Select * FROM users where email=?", [$_SESSION['email']]);
$result = $source->singleRow();

// print_r($profile);
// die('kodu');


if (isset($_POST['submit'])) {



// echo $_SESSION['username'];
// die('kodu');

	$data = [
		'oldpass' => $_POST['oldpass'],
		'email' => $_POST['email'],
		'newpass' => $_POST['newpass'],
		'cpass' => $_POST['cpass']

		// 'cpassword' => sha1($_POST['cpassword'])

	];


// print_r($data);
// die('lau');


	// if ($data['password'] == $data['cpassword']) {


	//$query = $source->Query("Select * FROM users where email='" . $_POST['email'] . "'");
	// $query = $source->Query("Select * FROM users where email? ",$_SESSION['username']);
	// $result = $source->SingleRow();




if ($result ->password==$_POST['oldpass']) {
	if ($result) {
		if ($_POST['cpass'] == $_POST['newpass']) {

			if ($source->Query(
				"UPDATE users SET password=? where email=?",
				[$data['newpass'], $_SESSION['email']]
			  )) {
				$to = $_POST['email']; // Receiver Email ID, Replace with your email ID
				$subject = "Confirmation";
				$message = "Your Account created succesfully as admin!" . "\n" . "Login information down below." . "\n" . "UserName :" . $_SESSION['username'] . "\n" . "Email :" . $_POST['email'] . "\n" . "Password :" . $data['newpass'];
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
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		}
	} else {
		echo "<script>alert('Woops! Email Already Exists.')</script>";
	}
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

		<h1>Change Password</h1>

		<form action="" method="post" enctype="multipart/form-data">

			<div class="fdl">

				<label for="oldpass">Old Password</label>
				<input id="oldpass" name="oldpass" type="text" placeholder="*****">

			</div>
			<div class="fdr">

				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="*****@email.com">

			</div>
			<div class="fdl">

				<label for="newpass">New Password</label>
				<input id="newpass" name="newpass" type="text" placeholder="*****">

			</div>
			<div class="fdr">

				<label for="cpass">Confirm Password</label>
				<input id="cpass" name="cpass" type="cpass" placeholder="alex.hunter@email.com">

			</div>


			<!-- <button id="submit" type="submit" name="submit" value="submit">Submit</button> -->
			<div class="signupbtn">
				<input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>