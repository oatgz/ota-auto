<?php


$uname = "oatgz";
$pword = "Oatz123456";
$uri = "mongodb://".$uname.":".$pword."@ds135812.mlab.com:35812/ota";

$conn = new MongoDB\Client($uri);

echo $uri

?>