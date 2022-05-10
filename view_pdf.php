<?php   

include "init.php";
$query = $source->Query("Select * FROM guest where id=?", [$_GET['id']]);
$profile1 = $source->singleRow();
// echo $profile1->test_result;exit();
$path="Test_results/".$profile1->test_result;
 echo "<iframe src=\"$path\" width=\"100%\" style=\"height:200%\"></iframe>";

?>