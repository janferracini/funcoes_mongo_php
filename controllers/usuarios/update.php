<?php
    require_once __DIR__."/../../core/mongo/update.php";

    $id = new \MongoDB\BSON\ObjectId($_POST['id']);

    $filter = ['_id'=>$id];

    $obj = ['cpf'=>$_POST['cpf'], 'nome'=>$_POST['nome'], 'email'=>$_POST['email']];
    $collection = 'ecommerce.usuarios';

    update($filter, $obj, $collection);

    echo "<script>location.href='usuarios'</script";