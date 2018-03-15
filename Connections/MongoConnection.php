<?php
require_once "ConnectionInterface.php";

class MongoConnection implements ConnectionInterface
{
    public function connect()
    {
        echo "Mongo connection" . PHP_EOL;
    }
}