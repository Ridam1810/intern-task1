<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html> -->
<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<?php

include "init.php";


// error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	// echo $_POST['password'];exit();


	$data = [
		'email' => $_POST['email'],
		'password' => $_POST['password'],
	];

	$query = $source->Query("Select * FROM users where email='" . $data['email'] . "' AND password='" . $data['password'] . "'");
	$result = $source->SingleRow();
	//   print_r ($result);exit();
	if ($result) {

		$_SESSION['idno'] = $result->id;
		$_SESSION['username'] = $result->name;
		$_SESSION['email'] = $result->email;
		$_SESSION['utype'] = $result->utype;



		// echo $result['username'];exit();
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
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

	<title>Login Form </title>
</head>

<body>
	<div class="container">
		<form action="login.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<!-- <button name="submit" class="btn">Login <a href="index1.php"></a></button> -->
				<button type="submit" name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text"><a href="dashboard.php">Enter as Guest</a>.</p>
		</form>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>