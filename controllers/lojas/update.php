<?php
    require_once __DIR__."/../../core/mongo/update.php";

    $id = new \MongoDB\BSON\ObjectId($_POST['id']);

    $filter = ['_id'=>$id];

    $obj = ['loja'=>$_POST['loja'], 'endereco'=>$_POST['endereco']];
    $collection = 'ecommerce.lojas';

    update($filter, $obj, $collection);

    echo '<script>alert("Loja editada com sucesso.");location.href="lojas";</script';