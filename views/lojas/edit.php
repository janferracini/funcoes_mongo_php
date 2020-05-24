<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Editar Loja</h3>
    <div class="row">
        <form method="POST" action="lojas_save" class="col-lg-10">



            <div class="form-group">
                <label for="loja">Loja</label>
                <!-- <input type="text" name="marca" id="marca" class="form-control"> -->
                <textarea row="5" name="loja" id="loja" class="form-control"> <?php echo $d->loja?></textarea>
            </div>

            <div class="form-group">
                <label for="endereco">Descrição</label>
                <textarea row="5" name="endereco" id="endereco" class="form-control"> <?php echo $d->endereco?></textarea>
            </div>




            <div class="form-group">
                <a href="loja" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
        </form>
    </div>
</div>