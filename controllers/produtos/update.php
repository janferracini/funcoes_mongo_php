<?php
    require_once __DIR__."/../../core/mongo/update.php";

    $id = new \MongoDB\BSON\ObjectId($_POST['id']);

    $filter = ['_id'=>$id];

    $obj = ['produto'=>$_POST['produto'], 'marca'=>$_POST['marca'], 'preco'=>$_POST['preco']];
    $collection = 'ecommerce.produtos';

    update($filter, $obj, $collection);

    echo '<script>alert("Produto editado com sucesso.");location.href="produtos";</script';