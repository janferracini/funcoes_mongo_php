<div class="container">
<h1 style="margin-bottom: 1em">Lista de Usuários</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($data as $d ) { ?>
                <tr>

                    <td><?php echo $d->cpf ?></td>
                    <td><?php echo $d->nome ?></td>
                    <td><?php echo $d->email ?></td>
                    <td><a href="usuarios_edit?id=<?php echo $d->_id ?>" class="bnt">
                        <img src="assets/svg/editar.svg" style="width: 20px"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="float-right"><a href="usuarios_add"><img src="assets/svg/adicionar.svg" style="width:4em;height:auto"> </a></div>
</div>