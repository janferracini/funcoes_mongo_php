<?php
require_once __DIR__ . "/../../core/mongo/insert.php";

//recebe os itens do formulário
$obj = ['marca' => $_POST['marca'], 'descricao' => $_POST['descricao']];

//onde vai salvar
$collection = 'ecommerce.marcas';

//faz a inserção do array na tabela certa
insert($obj, $collection); //abre a função de insert.php

//volta para a página Marcas
echo '<script>alert("Registro salvo!");location.href="marcas";</script>';