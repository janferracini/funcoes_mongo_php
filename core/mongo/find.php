<?php
    function find($filter, $options, $collection){
        //na option pode colocar opções como nome "maria" por ordem Cresc

        require_once __DIR__."/manager.php";

        $db = new \MongoDB\Driver\Query($filter, $options);

        $cursor = $manager->executeQuery($collection, $db);

        return $cursor;
    }