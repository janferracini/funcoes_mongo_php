<?php
    require_once __DIR__."/../../core/mongo/update.php";
    //o update vai salvar o obj novamente com os dados editados

    $id = new \MongoDB\BSON\ObjectId($_POST['id']);

    $filter = ['_id'=>$id];

    $obj = ['marca'=>$_POST['marca'], 'descricao'=>$_POST['descricao']];
    $collection = 'ecommerce.marcas';

    update($filter, $obj, $collection);

    echo '<script>alert("Marca editada com sucesso.");location.href="marcas";</script';