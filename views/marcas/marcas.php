<div class="container">
<h1 style="margin-bottom: 1em">Lista de Marcas</h1>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">Marca</th>
                <th scope="col">Descrição</th>
                <th scope="col"> </th>
                <th scope="col"> </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d) {?>
                <tr>
                    <td><?php echo $d->marca ?></td>
                    <td><?php echo $d->descricao ?></td>
                    <td><?php echo $d->marca ?></td>
                    <td><a href="marcas_edit?id=<?php echo $d->_id ?>" class="bnt">
                        <img src="assets/svg/editar.svg" style="width: 15px"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="float-right"><a href="marcas_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>