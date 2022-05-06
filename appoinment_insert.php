<?php


// if (!isset($_SESSION)) {
//     session_start();
//   }
include 'splitfile/navbar.php';
include "init.php";
$docId=$_SESSION['docId'] ;
$time=$_SESSION['time'];
$date=$_SESSION['date'];
// echo $docId;
// echo $time;
// echo $date;
// exit();
// public checking
$query = $source->Query(" SELECT * FROM appointment WHERE `time` = '$time' AND `date` = '$date' AND `docId` = '$docId'");



$all = $source->FetchAll();
$numrow = $source->CountRows();
// echo $numrow;exit();

if($numrow > 0){
    echo "
              <script type=\"text/javascript\">
              window.location.href = 'booked.php';
              </script>
          ";
  
  }else{
  
    if ($source->Query(
      "INSERT INTO `appointment` (docId,doc,docEmail,time,patientName,date,patientEmail,status) VALUES (?,?,?,?,?,?,?,?)",
      [$profile->id, $profile->name, $profile->email, $_POST['time'], $_SESSION['username'], $_POST['date'],$_SESSION['email'], $data['status']]
    )) {
        echo "
            <script type=\"text/javascript\">
            window.location.href = 'booked_done.php';
            </script>
        ";
    }
  }





?>
