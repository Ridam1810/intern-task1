
<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<?php
// require_once 'splitfile/navbar.php';
include "init.php";


// error_reporting(0);

// if (isset($_SESSION['username'])) {
// 	header("Location: dashboard.php");
// }

if (isset($_POST['submit'])) {
	// echo $_POST['password'];exit();


	$data = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'phone' => $_POST['phone'],
		'password' => $_POST['password'],
		'gender' => $_POST['gender'],
		'address' => $_POST['address'],
		'utype' => $_POST['utype'],
		'date' => $_POST['date']
	
		
	];
	

	  $query = $source->Query("Select * FROM users where email='" . $_POST['email'] . "'");
	  $result = $source->SingleRow();
  
//   print_r($result);
//   die('lau');
  
	  if (!$result) {
  
		if ($source->Query(
			"INSERT INTO `users` (name,email,phone,password,gender,address,utype,date) VALUES (?,?,?,?,?,?,?,?)",
			[$data['name'], $data['email'], $data['phone'], $data['password'], $data['gender'], $data['address'], $data['utype'], $data['date']]
		  )) {
			//   $to = $_POST['email']; // Receiver Email ID, Replace with your email ID
			//   $subject = "Confirmation";
			//   $message = "Your Account created succesfully as Guest!" . "\n" . "Login information down below." . "\n" . "Name :" . $_POST['name'] . "\n" . "Email :" . $_POST['email'] . "\n" . "Password :" . $data['password'];
			//   $headers = "From: " . "rithyamforbe@gmail.com";
			// //   $_SESSION['regname'] = $_POST['name'];
			//   if (mail($to, $subject, $message, $headers)) {
			// 	  // header("Location: patient_confirmation.php");
		  
		  
				  
			// 	  // echo RedirectURL('patient_confirmation.php');
			//   } else {
			// 	  // header("Location: error.php");
			// 	  echo "
			// 		  <script type=\"text/javascript\">
			// 		  window.location.href = 'error.php';
			// 		  </script>
			// 	  ";
			//   }
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

	<title>Register Form </title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<?php if (isset($_SESSION['username'])) {?>
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register  Guest</p>
				<?php  } else{ ?>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register As Guest</p>
			<?php  } ?>
			<div class="input-group">
				<input type="name" placeholder="Fullname" name="name" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="phone" placeholder="Phone" name="phone" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="gender">
            <input type="radio" name="gender" value="male" <?php if (isset($old_gender) && $old_gender == "male") echo ' checked'; ?> required> Male
            <input type="radio" name="gender" value="female" <?php if (isset($old_gender) && $old_gender == "female") echo ' checked'; ?> required> Female
          </div>
			<div class="input-group">
				<input type="address" placeholder="Address" name="address" value="" required>
			</div>
			<input type="hidden" name="utype" value="3">
			<div class="input-group">
				<input type="date" placeholder="Date" name="date" value="" required>
			</div>
			

			<div class="input-group">
				<!-- <button name="submit" class="btn">Login <a href="index1.php"></a></button> -->
				<button type="submit" name="submit" class="btn">Register</button>
			</div>
			<?php if (isset($_SESSION['username'])) {?>
				<p class="login-register-text"><a href="dashboard.php">Go Back</a>.</p>
				<?php  } else{ ?>
					<p class="login-register-text"><a href="login.php">Login</a>.</p>
			<?php  } ?>
		</form>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>