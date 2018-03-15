<?php
require_once "ConnectionInterface.php";

class MySqlConnection implements ConnectionInterface
{
    public function connect()
    {
        echo "MySql connection" . PHP_EOL;
    }
}