<?php
    require_once __DIR__."/../../core/mongo/insert.php";
    
    //recebe os itens do formulário
    $obj = ['produto'=>$_POST['produto'], 'marca'=>$_POST['marca'], 'preco'=>$_POST['preco']];

    //onde vai salvar
    $collection = 'ecommerce.produtos';

    //faz a inserção do array na tabela certa
    insert($obj, $collection);

    //volta para a página Marcas
    echo "<script>location.href='produtos'</script>";