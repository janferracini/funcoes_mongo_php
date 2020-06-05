<?php 

    function findAll($collection) { //faz a listagem de tudo na collection

        require_once __DIR__."/manager.php";

        $db=new \MongoDB\Driver\Query([]); //poderia colocar critério dentro
        //listar, ex ativos: ['ativo=>true']  se tivesse essa condição

        $cursor = $manager->executeQuery($collection,$db);

        return $cursor;
    }