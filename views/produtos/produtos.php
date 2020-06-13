<div class="container">
    <h1 style="margin-bottom: 1em">Lista de Produtos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Marca</th>
                <th scope="col">Preço</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($data as $d) { ?>
                <tr>

                    <td><?php echo $d->produto ?></td>
                    <td><?php echo $d->marca ?></td>
                    <td><?php echo $d->preco ?></td>
                    <td><a href="produtos_edit?id=<?php echo $d->_id ?>" class="bnt">
                        <img src="assets/svg/editar.svg" style="width: 20px"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="float-right"><a href="produtos_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>