<div class="container" style="margin-top: 5em;">
    <h3>Atualizar Marca</h3>
    <div class="row">
        <form method="POST" action="marcas_update" class="col-lg-10">

            <?php foreach ($data as $d) { ?>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $d->_id ?>">
                    <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $d->marca ?>">

                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="<?php echo $d->descricao ?>">
                </div>

                <div class="form-group">
                    <a href="marcas" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-raised btn-success">Salvar</button>

                </div>

            <?php } ?>
        </form>
    </div>
</div>