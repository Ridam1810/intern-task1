<?php


// if (!isset($_SESSION)) {
//     session_start();
//   }
include 'splitfile/navbar.php';
include "init.php";
// $docId=$_SESSION['docId'] ;
// $time=$_SESSION['time'];
// $date=$_SESSION['date'];
// echo $docId;
// echo $time;
// echo $date;
// exit();
// public checking
if ($source->Query(
    "UPDATE guest SET prescription=?,m1=?, t1=?, d1=?,m2=?, t2=?, d2=?,m3=?, t3=?, d3=?,m4=?, t4=?, d4=?,m5=?, t5=?, d5=?,m6=?, t6=?, d6=?,m7=?, t7=?, d7=?, where id=?",
    [$data['prescription'],$data['m1'],$data['t1'],$data['d1'],$data['m2'],$data['t2'],$data['d2'],$data['m3'],$data['t3'],$data['d3'],$data['m4'],$data['t4'],$data['d4'],$data['m5'],$data['t5'],$data['d5'],$data['m6'],$data['t6'],$data['d6'],$data['m7'],$data['t7'],$data['d7'], $_GET['id']]
  )) {
  }





?>
