<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Editar Produto</h3>
    <div class="row">
        <form method="POST" action="produtos_save" class="col-lg-10">

        <?php foreach ($data as $d ) { ?>
            <div class="form-group">
                <label for="produto">Produto</label>
                <textarea row="5" name="produto" id="produto" class="form-control"> <?php echo $d->produto?></textarea>
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <select name="marca" id="marca" class="form-control">

                    <option value="<?php echo $produtos->show->marcas->_id ?>"><?php echo $d->marca ?></option>


                </select>
            </div>

            <div class="form-group">
                <label for="perco">Preço</label>
                <input type="number" step="any" name="perco" id="perco" class="form-control" value="<?php echo $d->preco ?>" />
            </div>




            <div class="form-group">
                <a href="produtos" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
        <?php }?>
        </form>
    </div>
</div>