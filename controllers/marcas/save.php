<?php
    require_once __DIR__."/../../core/mongo/insert.php";
    
    //recebe os itens do formulário
    $obj = ['marca'=>$_POST['marca'], 'descricao'=>$_POST['descricao']];

    //onde vai salvar
    $collection = 'ecommerce.marcas';

    //faz a inserção do array na tabela certa
    insert($obj, $collection);

    //volta para a página Marcas
    echo "<script>location.href='marcas'</script>";