
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//include'connection.php';
    //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['done'])) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $emp_id = $_POST['emp_id'];
        $gender = $_POST['gender'];
        $uname = $_POST['uname'];
        $int = $_POST['int'];
        $number = $_POST['number'];
        $comm = $_POST['comm'];
        $agree = $_POST['agree'];
       
        /*echo '<strong>Success</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';*/
      $userName="root";
$password="";
$server='localhost';
$database='basic';

$con=mysqli_connect($server,$userName,$password,$database);

        if ($con) {
            echo "connection successful";
            // $sql = "INSERT INTO `form` ( `first`, `last`,`emp_id`,`gender`,`uname`,`int`,`number`,`comm`,`agree`) VALUES ( '$first', '$last','$emp_id','$gender','$uname','$int','$number','$comm','$agree')";
            $sql = "INSERT INTO `form` ( `first`, `last`,`emp_id`,`gender`,`uname`,`int`,`number`,`comm`,`agree`) VALUES ( $first, $last,$emp_id,$gender,$uname,$int,$number,$comm,$agree)";
            $result = mysqli_query($con, $sql);
            echo "Executed!";

            /*if ($result) {
                echo 'Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
            }
        } else {
            echo "connection failed";*/
        // }
    }
  }


    ?>
</body>
</html>


