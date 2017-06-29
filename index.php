<?php
try
{
    $connection = new Mongo('mongodb://oatgz:Oatgz123456@ds135812.mlab.com:35812/ota');
    $database   = $connection->selectDB('ota');
    $collection = $database->selectCollection('otaline');
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

$cursor = $collection->find();

?>