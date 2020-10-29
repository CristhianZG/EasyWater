<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Creacion de Modulo de Refrigeracion</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 m-3">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'crearRefrigeracion');
                        echo form_open_multipart('refrigeracionController/crearRefrigeracionBd', $atributos);
                        ?>
                        <div class="md-form pr-3">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <input name="nombre" type="text" id="form1" class="form-control">
                            <label for="form1">Nombre Modulo</label>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-3">
                        <div class="md-form pr-3">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <input name="modelo" type="text" id="form1" class="form-control">
                            <label for="form1">Modelo</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-sm"><i class="fas fa-save"></i>
                        Guardar</button>
                        <?php
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6"></div>
    </div>
</div>