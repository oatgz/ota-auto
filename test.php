<?php

echo "TEST";
$uname = "oatgz";
$pword = "Oatz123456";
$uri = "mongodb://oatgz:Oatz123456@ds135812.mlab.com:35812/ota";

$conn = new MongoDB\Client($uri);

echo $uri;

?>