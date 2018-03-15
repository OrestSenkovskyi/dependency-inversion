<?php
require_once "Query.php";
require_once "UpdateQuery.php";

class MySqlUpdateQuery extends Query implements UpdateQuery
{
    public function update()
    {
        echo "MySql update" . PHP_EOL;
    }
}