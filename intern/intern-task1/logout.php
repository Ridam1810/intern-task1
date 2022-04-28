<?php 
session_start();
session_unset();
session_destroy();
unset($_SESSION['utype']);
unset($_SESSION['username']);
header("Location: login.php");


?>