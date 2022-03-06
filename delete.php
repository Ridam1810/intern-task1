<?php
include("init.php");

$query = $source->Query("DELETE FROM user where id=?",[$_GET['deleteuser']]);
if($query){
    $_SESSION['delete_user'] = "";
    header("location:list.php");
}else{
    $_SESSION['delete_user'] = "Failed To Delete";
    header("location:list.php");
}

?>