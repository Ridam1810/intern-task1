<?php

include'connection.php';

if (isset($_POST['done'])) {

    $id=$_GET['id'];
    $email = $_POST['email'];
    $Password = $_POST['pass'];
    $Comment = $_POST['comment'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];
    $Hobby = $_POST['hobby'];
    //$sql = "INSERT INTO `post` ( `username`, `password`,`comment`,`Gender`,`Qualification`,`Hobby`) VALUES ( '$email', '$Password','$Comment','$gender','$qualification','$Hobby')";
    $sql ="UPDATE `post` SET `id`='$id',`username`='$email',`password`='Password',`comment`='$Comment',`Gender`='$gender',`Qualification`='$qualification',`Hobby`=' $Hobby' WHERE id=$id";
   // $sql"Udate `post` SET";
    $result = mysqli_query($con, $sql);
    header('location:Insert.php');
}

?>