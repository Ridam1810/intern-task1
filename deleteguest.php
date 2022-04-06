<?php
if (!isset($_SESSION)) {
  session_start();
}
include "init.php";
include "validation.php";
$path="Uploads/".$_SESSION['filename']; 
unlink($path);
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

else{
    
    $query = $source->Query("DELETE FROM guest where id=?",[$_GET['deleteuser']]);
if($query){
    $_SESSION['delete_user'] = "";
    header("location:patient.php");
    
}else{
    $_SESSION['delete_user'] = "Failed To Delete";
    header("location:patient.php");
}
}



?>