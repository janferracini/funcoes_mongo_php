<?php

require_once __DIR__."/../../core/mongo/findall.php";
require_once __DIR__."/../../core/mongo/find.php";

$collection = 'ecommerce.produtos';

$data = findAll($collection);



require_once __DIR__."/../../views/produtos/produtos.php";