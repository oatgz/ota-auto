<?php
echo "Hello Ota-auto";
$api_key="rxKOV3hat_e_6-di58LIAy8XB238Xihp";
$connect = 'https://api.mlab.com/api/1/databases/ota/collections/lineota?apiKey='.$api_key.'';
$connect=new Mongo();
$db = $connect->selectDB( "ota" );
$collection = $db->selectCollection( "otaline" );
$cursor = $collection->find();
   foreach ($cursor as $document) {
      echo $document["question"] . "\n";
   }