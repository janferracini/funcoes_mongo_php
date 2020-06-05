<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Editar Marca</h3>
    <div class="row">
        <form method="POST" action="marcas_update" class="col-lg-10">

        <?php foreach ($data as $d ) { ?>

            <div class="form-group">
                <label for="marca">Marca</label>
                <!-- <input type="text" name="marca" id="marca" class="form-control"> -->
                <textarea row="5" name="marca" id="marca" class="form-control"> <?php echo $d->marca?></textarea>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea row="5" name="descricao" id="descricao" class="form-control"> <?php echo $d->descricao?></textarea>
            </div>

            <div class="form-group">
                <a href="marcas" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>

        <?php } ?>
        </form>
    </div>
</div>