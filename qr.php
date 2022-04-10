<?php

require_once'phpqrcode/qrlib.php';


$path ="images/";
$file= $path.uniqid().".png";
$text="Something";

QRcode :: png ($text,$file, 'L', 10);

echo "<center><img src='".$file."'><center>";
