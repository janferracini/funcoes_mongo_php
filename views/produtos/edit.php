<div class="container" style="margin-top: 5em;">
    <h3>Atualizar Produto</h3>
    <div class="row">
        <form method="POST" action="produtos_update" class="col-lg-10">

        <?php foreach ($data as $d ) { ?>
            <div class="form-group">
                <label for="produto">Produto</label>
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $d->_id ?>">
                <input type="text" name="produto" id="produto" class="form-control"  value="<?php echo $d->produto ?>">

            </div>



            <div class="form-group">
                <label for="marca">Marca</label>
                <select name="marca" id="marca" class="form-control">
                <option value="<?php echo $d->_id ?>"><?php echo $d->marca ?></option>
                </select>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" step="any" name="preco" id="preco" class="form-control" value="<?php echo $d->preco ?>">
            </div>




            <div class="form-group">
                <a href="produtos" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
        <?php }?>
        </form>
    </div>
</div>