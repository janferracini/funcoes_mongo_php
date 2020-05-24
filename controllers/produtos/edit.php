<?php 
    require_once __DIR__."/../../core/mongo/find.php";


    $id=new \MongoDB\BSON\ObjectID($_GET['id']);
    
    $filter = ['_id'=>$id];
    $options =[];
    $collection = 'ecommerce.produtos';

    $data = find($filter, $options, $collection);

    require_once __DIR__."/../../views/produtos/edit.php";