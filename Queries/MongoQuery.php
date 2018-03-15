<?php
require_once "Query.php";
require_once "UpdateQuery.php";

class MongoQuery extends Query implements UpdateQuery
{
    public function update()
    {
        echo "Mongo update" . PHP_EOL;
    }
}