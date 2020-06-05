<?php
    //obj = array de objetos - collection = nome do db+table
    function insert($obj, $collection) {
        //busca o manager
        require_once __DIR__."/manager.php";

        $db = new \MongoDB\Driver\BulkWrite;

        $db->insert($obj); 

        $manager->executeBulkWrite($collection, $db);
    }