<?php

switch ($msg) {
    case '1':
?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Complete los campos!</strong> Tanto el nombre como la descripcion deben estar llenados.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        break;
    case '2':
    ?>
        <div class=" alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Caracteres fuera de rango! </strong> Los caracteres de los campos sobre pasan los limites intente abreviar o disminuir el contenido.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php
        break;
    default:
        echo "";
}
?>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Creacion de Sensores</h1>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-6 m-3">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'crearNuevoSensor');
                        echo form_open_multipart('sensorController/crearSensorBd', $atributos);
                        ?>
                        <div class="md-form pr-3">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <input name="modelo" type="text" id="form1" class="form-control">
                            <label for="form1">Modelo del Sensor</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 m-3">
                        <!--Textarea with icon prefix-->
                        <div class="md-form pr-3 mr-3">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea name="descripcion" id="form10" class="md-textarea form-control" rows="8"></textarea>
                            <label for="form10">Descripcion</label>
                        </div>
                        <br>
                        <div class="">
                            <button type="submit" class="btn btn-sm"><i class="fas fa-save"></i>
                                Guardar</button>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div clas="col-sm-6"></div>
    </div>
</div>