<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Edicion de Sensores</h1>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-6 m-3">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'crearNuevoSensor');
                        echo form_open_multipart('sensorController/guardarSensorBd', $atributos);
                        ?>
                        <?php
                        foreach ($infoSensor->result() as $row) {
                        ?>
                            <input type="hidden" name="idSensor" class="form-control" value="<?php echo $row->idSensor; ?>">
                            <div class="md-form mb-2">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <input name="modelo" type="text" id="form1" class="form-control" value="<?php echo $row->modeloSensor; ?>">
                                <label for="form1">Modelo del Sensor</label>
                            </div>

                    </div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 m-3">
                        <!--Textarea with icon prefix-->
                        <div class="md-form pr-3 mr-3">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea name="descripcion" id="form10" class="md-textarea form-control" rows="8"><?php echo $row->descripcion; ?></textarea>
                            <label for="form10">Descripcion</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-sm"><i class="fas fa-save"></i>
                        Guardar</button>
                    <?php
                        }
                        echo form_close();
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6"></div>
    </div>
</div>