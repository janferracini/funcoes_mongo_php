<?php

    require_once __DIR__."/../../core/mongo/findall.php";

    $collection = 'ecommerce.marcas'; //vai puxar as marcas para mostrar 

    $marcas = findAll($collection); //vai mostrar tudo das marcas

    

require_once __DIR__."/../../views/produtos/add.php";