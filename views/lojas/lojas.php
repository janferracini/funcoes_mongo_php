<div class="container">
    <h1 style="margin-bottom: 1em">Lista de Lojas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Loja</th>
                <th scope="col">Endereço</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d) {?>
                <tr>
                    <td><?php echo $d->loja ?></td>
                    <td><?php echo $d->endereco ?></td>
                    <td><a href="lojas_edit?id=<?php echo $d->_id ?>" class="bnt">
                        <img src="assets/svg/editar.svg" style="width: 20px"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="float-right"><a href="lojas_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>