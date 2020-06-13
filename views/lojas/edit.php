<div class="container" style="margin-top: 5em;">
    <h3>Atualizar Loja</h3>
    <div class="row">
        <form method="POST" action="lojas_update" class="col-lg-10">

        <?php foreach ($data as $d) { ?>

            <div class="form-group">
                <label for="loja">Loja</label>

                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $d->_id ?>">
                <input type="text" name="loja" id="loja" class="form-control" value="<?php echo $d->loja ?>">
            </div>

            <div class="form-group">
                <label for="endereco">Descrição</label>
                <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $d->endereco ?>">
            </div>




            <div class="form-group">
                <a href="lojas" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
            <?php } ?>
        </form>
    </div>
</div>