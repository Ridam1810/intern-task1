<?php

if (!isset($_SESSION)) {
    session_start();
}
// include 'splitfile/navbar.php';
include "init.php";
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
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
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Got your info!<br><?php echo " Thank you" . " " . $_SESSION['fullname'] . ",<br><h4> We will maintain our further contact through email!<br>contact number :01985$$$$$$</h4>"; ?></p>
            <p class="login-register-text"> <a href="guestentry.php">Go Back</a>.</p>

        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>