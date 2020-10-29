<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="icon" href="<?php echo base_url(); ?>img/imgMB/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssMB/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssMB/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/panel.css">
</head>

<body>

    <section class="cuerpo">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <!---ELEMENTOS DEL MENU ORIZONTAL--->
            <div class="border-right color" id="sidebar-wrapper">
                <div class="sidebar-heading titulo color"><i class="fas fa-tint fa-lg"></i>
                EASYWATER </div>
                <div class="list-group list-group-flush color">
                    <a href="<?php echo site_url('panelController/equipoView'); ?>" class="list-group-item color"><i class="fab fa-steam"></i>
                        EQUIPO</a>
                    <a href="<?php echo site_url('placaBaseController/index'); ?>" class="list-group-item color"><i class="fas fa-ruler-horizontal"></i>
                        PLACA BASE</a>
                    <a href="<?php echo site_url('transmisionController/index'); ?>" class="list-group-item color"><i class="fas fa-database"></i>
                        TRANSMICION DE DATOS</a>
                    <a href="#" class="list-group-item color "><i class="fas fa-users"></i>
                        USUARIOS</a>
                    <a class="list-group-item color" data-toggle="collapse" href="#collapseOpcionesEquipo"><i class="fas fa-tools"></i>
                        OPCIONES DE EQUIPO
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseOpcionesEquipo" class="panel-collapse collapse">
                        <a href="#" class="list-group-item color">CARACTERISTICAS</a>
                        <a href="#" class="list-group-item color">AJUSTES</a>
                        <a href="#" class="list-group-item color">VISUALIZACION</a>
                    </div>
                    <a class="list-group-item color" data-toggle="collapse" href="#collapseSensores"><i class="fab fa-intercom"></i>
                        SENSORES
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseSensores" class="panel-collapse collapse">
                        <a href="<?php echo site_url('sensorController/index'); ?>" class="list-group-item color">VISUALIZACION</a>
                        <a href="#" class="list-group-item color">TIPO DE SENSORES</a>
                    </div>
                    <a class="list-group-item color" data-toggle="collapse" href="#collapseComponentes"><i class="fab fa-buromobelexperte"></i>
                        COMPONENTES
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseComponentes" class="panel-collapse collapse">
                        <a href="<?php echo site_url('refrigeracionController/index'); ?>" class="list-group-item color">MODULO DE REGRIGERACION</a>
                        <a href="#" class="list-group-item color">OTROS</a>
                    </div>

                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <!---CONTENIDO DE LA NAVEGACION DE LA CABEZERA--->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light border-bottom colorHeader color">
                    <button class="btnT w-10 p-3 border border-0" id="menu-toggle">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>

                    <button class="navbar-toggler colorHeader " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse colorHeader" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <a href="#" class="nav-link">
                                <i class="fas fa-wrench colorHeader"></i>
                                <label class="colorHeader" for="">Configuraciones</label>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-user colorHeader"></i>
                                <label class="colorHeader" for="">Usuario</label>
                            </a>
                            <a href="#" class="nav-link" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sign-out-alt colorHeader"></i>
                                <label class="colorHeader" for="">Salir</label>
                            </a>
                        </ul>
                    </div>
                </nav>