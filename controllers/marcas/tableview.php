<?php

require_once __DIR__."/../../core/mongo/findall.php";

$collection = 'ecommerce.marcas';

$data = findAll($collection); //onde vai salvar a busca e mandar pra view

require_once __DIR__."/../../views/marcas/marcas.php";
