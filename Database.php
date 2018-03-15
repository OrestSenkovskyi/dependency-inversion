<?php
require_once "Connections/MySqlConnection.php";
require_once "Queries/MySqlUpdateQuery.php";
require_once "Connections/MongoConnection.php";
require_once "Connections/ConnectionInterface.php";
require_once "Queries/UpdateQuery.php";

class Database
{
    protected $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection->connect();
    }

    public function update(UpdateQuery $q)
    {
        $q->update();
    }
}

$database = new Database(new MySqlConnection());
$database->update(new MySqlUpdateQuery());