<br>
<br>
<div class="container-fluid">
    <h1>
        <strong>
            LISTADO DE LA REFRIGERACION
        </strong>
    </h1>
    <div class="row">
        <div class="col-sm-6">
            <?php
            $atributos = array('class' => 'from-group', 'id' => 'crearRefrigeracion');
            echo form_open_multipart('refrigeracionController/crearRefrigeracionView', $atributos);
            ?>
            <button type="submit" class="btn"><i class="fas fa-plus fa-lg"></i>
                Crear</button>
            <?php
            echo form_close();
            ?>
        </div>
        <div class="col-sm-6">
            <input class="form-control mb-4 w-50 p-3 ml-auto" id="tableSearch" style="margin: 0px;" type="text" placeholder="Buscar">
        </div>
    </div>

    <table class="table table-bordered table-responsive-md table-striped ">
        <thead>
            <tr>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Nombre
                </th>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Modelo
                </th>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Fecha de Creacion
                </th>
                <th class="th-sm">Editar</th>
                <th class="th-sm">Eliminar</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php
            foreach ($refrigeracion->result() as $row) {
            ?>
                <tr>
                    <td class="p-2 m-0"><?php echo $row->nombreModulo ?></td>
                    <td class="p-2 m-0"><?php echo $row->modelo ?></td>
                    <td class="p-2 m-0"><?php echo $row->fechaCreacion ?></td>
                    <td class="p-2 m-0 text-center">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'editarRefrigeracion');
                        echo form_open_multipart('refrigeracionController/modificarRefrigeracionView', $atributos);
                        ?>
                        <input type="hidden" name="idModulo" value="<?php echo $row->idModulo ?>">
                        <button type="sudmit" class="btn btn-sm"><i class="fas fa-edit"></i></button>
                        <?php
                        echo form_close();
                        ?>
                    </td>
                    <td class="p-2 m-0 text-center">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'editarSensor');
                        echo form_open_multipart('refrigeracionController/eliminarRefrigeracion', $atributos);
                        ?>
                        <input type="hidden" name="idModulo" value="<?php echo $row->idModulo ?>">
                        <button type="sudmit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        <?php
                        echo form_close();
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Nombre
                </th>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Modelo
                </th>
                <th class="th-sm">
                    <a href=""><i class="fas fa-sort"></i></a>
                    Fecha de Creacion
                </th>
                <th class="th-sm">Editar</th>
                <th class="th-sm">Eliminar</th>
            </tr>
        </tfoot>
    </table>
</div>