<?php 
    require_once __DIR__."/../../core/mongo/find.php";
    // o edit vai buscar os dados para apresentar na hora da edição
    
    $id = new \MongoDB\BSON\ObjectID($_GET['id']); //conversão em BSON p/ mongo 
    
    $filter = ['_id'=>$id]; //filtra as marcas pela ID
    $options =[];
    $collection = 'ecommerce.marcas';

    $data = find($filter, $options, $collection);

    require_once __DIR__."/../../views/marcas/edit.php";