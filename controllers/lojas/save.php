<?php
    require_once __DIR__."/../../core/mongo/insert.php";
    
    //recebe os itens do formulário
    $obj = ['loja'=>$_POST['loja'], 'endereco'=>$_POST['endereco']];

    //onde vai salvar
    $collection = 'ecommerce.lojas';

    //faz a inserção do array na tabela certa
    insert($obj, $collection);

    //volta para a página lojas
    echo '<script>alert("Registro salvo!");location.href="lojas";</script>';