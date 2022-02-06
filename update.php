<?php

include'config.php';

if (isset($_POST['done'])) {

    $id=$_GET['id'];
    $first = $_POST['first'];
        $last = $_POST['last'];
        $emp_id = $_POST['emp_id'];
        $gender = $_POST['gender'];
        $uname = $_POST['uname'];
        $int = $_POST['int'];
        $number = $_POST['number'];
        $comm = $_POST['comm'];
        $agree = $_POST['agree'];
    //$sql = "INSERT INTO `post` ( `username`, `password`,`comment`,`Gender`,`Qualification`,`Hobby`) VALUES ( '$email', '$Password','$Comment','$gender','$qualification','$Hobby')";
    $sql ="UPDATE `post` SET `id`='$id',`first`='$first',`last`='last',`emp_id`='$emp_id',`gender`='$gender',`uname`='$uname',`int`=' $int',`number`=' $number',`comm`=' $comm',`agree`=' $agree' WHERE id=$id";
   // $sql"Udate `post` SET";
    $result = mysqli_query($con, $sql);
     
}

?>