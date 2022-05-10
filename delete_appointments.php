<?php
// include "init.php";
// // include "validation.php";

// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
// }
// else{

//     $query = $source->Query("DELETE FROM user where id=?",[$_GET['deleteuser']]);
// if($query){
//     $_SESSION['delete_user'] = "";
//     header("location:list.php");
    
// }else{
//     $_SESSION['delete_user'] = "Failed To Delete";
//     header("location:list.php");
// }
// }

if (!isset($_SESSION)) {
  session_start();
}
include "init.php";
include "validation.php";


if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

else{
    
    $query = $source->Query("DELETE FROM appointment where id=?",[$_GET['deleteuser']]);
if($query){
    $_SESSION['delete_user'] = "";
    header("location:doc_list.php");
    
}else{
    $_SESSION['delete_user'] = "Failed To Delete";
    header("location:list.php");
}
}
