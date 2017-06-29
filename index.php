<?php
try
{
    $connection = new Mongo('mongodb://oatgz:Oatgz123456@ds135812.mlab.com:35812/ota');
	echo $connection;
    $database   = $connection->selectDB('ota');
	echo $database;
    $collection = $database->selectCollection('otaline');
	echo $collection;
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

$cursor = $collection->find();

?>