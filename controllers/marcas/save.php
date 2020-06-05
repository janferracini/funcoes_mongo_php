<?php
require_once __DIR__ . "/../../core/mongo/insert.php";

//recebe os itens do formulário
$obj = ['marca' => $_POST['marca'], 'descricao' => $_POST['descricao']];

//onde vai salvar
$collection = 'ecommerce.marcas';

//faz a inserção do array na tabela certa
insert($obj, $collection); //abre a função de insert.php

//volta para a página Marcas
echo "<script>location.href='marcas'</script>";

/*
require_once __DIR__ . "/../../core/orm/model.php";

$model = new Model('mongodb://localhost:27017');

$model->item->marca = $_POST['marca'];
$model->item->descricao = $_POST['descricao'];

$model->insert('ecommerce.marcas');

echo "<script>location.href='marcas'</script>";
*/
