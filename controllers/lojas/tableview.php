<?php

require_once __DIR__."/../../core/mongo/findall.php";

$collection = 'ecommerce.lojas';

$data = findAll($collection);

require_once __DIR__."/../../views/lojas/lojas.php";