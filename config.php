<?php
$userName="root";
$password="";
$server='localhost';
$database='basic';

$con=mysqli_connect($server,$userName,$password,$database,);

if($con)
{
    echo "connection successful";
}
else
{
    echo"connection failed";
}


?>
?>