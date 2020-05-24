<?php
    require_once __DIR__."/../../core/mongo/insert.php";
    
    //recebe os itens do formulário
    $obj = ['cpf'=>$_POST['cpf'], 'nome'=>$_POST['nome'], 'email'=>$_POST['email']];

    //onde vai salvar
    $collection = 'ecommerce.usuarios';

    //faz a inserção do array na tabela certa
    insert($obj, $collection);

    //volta para a página usuarios
    echo "<script>location.href='usuarios'</script>";