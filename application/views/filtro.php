<br><br><br>
<div class="container-fluid jumbotron">
    <div class="row">
        <div class="text-center col-md-12">
            <h2><strong>Filtro de máquinas</strong></h2>
            <br><br><br>
            <div class="col-md-6">
                <form method="POST" accept-charset="utf-8" action="<?php echo site_url(); ?>/maquinas/tipo">
                    <div class="form-group ">
                        <label for="tipo">Realizar una búsqueda por tipo de máquina</label>
                        <select class="form-control select2 select2-hidden" id="id_tipo" name="id_tipo">
                            <option selected="selected" disabled>Seleccion el tipo de máquina que busca</option>
                            <?php foreach ($tipos as $key): ?>
                                <option value="<?php echo $key->ID; ?>"><?php echo $key->TIPO; ?></option>
                            <?php endforeach ?>
                            
                        </select>
                        <br><br>
                        <button type="submit" class="btn btn-ats btn-block pull-right">Buscar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form method="POST" accept-charset="utf-8" action="<?php echo site_url(); ?>/maquinas/modelo">
                    <div class="form-group ">
                        <label for="marca_y_modelo">Realizar una búsqueda por el modelo de la máquina</label>
                        <select class="form-control select2 select2-hidden" name="modelo" id="modelo">
                            <option selected="selected" disabled>Seleccione un modelo</option>
                            <?php foreach ($modelos as $key): ?>
                                <option value="<?php echo $key->MODELO ?>|<?php echo $key->ID_TIPO ?>"><?php echo $key->MODELO; ?></option>
                                            
                            <?php endforeach ?>
                        </select>
                        <br><br>
                        <button type="submit" class="btn btn-ats btn-block pull-right">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(function(){
        $('.select2').select2();
    })
</script>