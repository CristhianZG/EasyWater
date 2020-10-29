<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssMB/style.css">
</head>

<body>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top inicio final">
        <!--PONER UN COLOR--->
        <div class="container">
            <a class="navbar-brand" href="#">EASYWATER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#Bienvenida">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contactos">Contactos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('panelController/equipoView'); ?>" class="nav-link" >
                            <i class="fas fa-user"></i>
                            <label for="">Iniciar</label>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="imageDefult view overlay zoom" id="Bien"></section>
    <br>
    <br>
    <br>
    <section class="">
        <h1 class="text-center animated fadeIn" id="Bienvenida">Bienvenidos a la pagina oficial de EASYWATER</h1>
        <br>
        <p class="text-center h-3">En EasyWater estamos comprometidos con el medio ambiente, <br> presentando un sistema flexible que potencia los métodos y dispositivos actuales que ayudan a la recolección de agua, <br> presentado como una solución inteligente ante la escases de agua en cualquier parte del mundo</p>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" id="Productos">
                    <div class="view overlay zoom">
                        <img class="img-fluid" src="<?php echo base_url(); ?>/img/alphaJpg.jpg" alt="image">
                    </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <h1 class="text-center">PROTOTIPO ALPHA</h1>
                    <p>Controlado por un SoC (System on a Chip) de la familia de Esp8266 el NodeMCU, conexión a red inalámbrica, cuenta con 2 celdas termoeléctricas TEC1206, sistema de disipación de calor por aire con “2 fan coolers” de 3000RPM, dos sensores de temperatura para temperatura interior y exterior y uno de humedad interior, este dispositivo cuenta con tanque de líquido de fácil acceso y limpieza, cuenta con pantalla LDC para la información más relevante sobre el dispositivo, sistema modular escalable que le permite aumentar el número de sensores hasta 4 de cada tipo y modulos de refrigeración hasta 6 celdas.</p>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="text-center">PROTOTIPO BETA</h1>
                    <p>
                        Controlado por el popular Arduino UNO, cuenta con 4 celdas termoeléctricas TEC1206, sistema de refrigeración dual por aire tipo pasivo mediante disipadores aluminio/cobre y activo con potentes ventiladores de 12cm, sensor combinado 2 en uno temperatura/humedad, este dispositivo cuenta con tanque de líquido de fácil acceso y limpieza, cuenta con pantalla LDC para la información más relevante sobre el dispositivo. Sistema modular escalable que le permite aumentar el número de sensores hasta 6 de cada tipo y módulos de refrigeración hasta 8 celdas.
                    </p>
                </div>
                <br>
                <div class="col-sm-6">
                    <div class="view overlay zoom">
                        <img class="img-fluid" src="<?php echo base_url(); ?>/img/betaJpg.jpg" alt="image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container-fluid">
            <hr>
            <strong>
                <h1>Equipo</h1>
            </strong>
            <p>Todos lo equipos de EasyWater son probados uno a uno, los equipos cuentan con stock con partes de repuesto en caso de que los necesite, así también los módulos adicionales.</p>
            <hr>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-5">
                    <div class="card">

                        <h5 class="card-header info-color white-text text-center py-4" id="Contactos">
                            <strong>Solicitud de Contacto</strong>
                        </h5>
                        <div class="card-body px-lg-5 pt-0">
                            <form class="text-center" style="color: #757575;" action="#!">

                                <div class="md-form">
                                    <input type="text" id="Nombre" class="form-control">
                                    <label for="Nombre">Nombre</label>
                                </div>

                                <div class="md-form">
                                    <input type="email" id="materialLoginFormEmail" class="form-control">
                                    <label for="materialLoginFormEmail">Correo Electronico</label>
                                </div>

                                <div class="md-form">
                                    <input type="number" id="materialLoginFormEmail" class="form-control">
                                    <label for="materialLoginFormEmail">Telefono</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea2">Comentario</label>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"></textarea>
                                </div>

                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1>Contacto</h1>
                    <p>Cualquier duda, consulta o sugerencia, puede contactarnos mediante el presente formulario, le responderemos lo mas pronto posible, no olvide llenar sus datos de forma correcta para tener una pronta respuesta.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section>
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">
                        <!-- Content -->
                        <u>
                            <strong>
                                <h5 class="text-uppercase text-center">Soporte</h5>
                            </strong>
                        </u>
                        <br>
                        <div class="text-center">
                            <u>
                                <a href="">Prototipo y Componentes</a>
                            </u>

                            <br>
                            <u>
                                <a href="">Diagramas</a>
                            </u>

                            <br>
                            <u>
                                <a href="">Manuales</a>
                            </u>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <u>
                                    <strong>
                                        <h5 class="text-uppercase">Contactos</h5>
                                    </strong>
                                </u>
                                <br>
                                <ul class="list-unstyled">
                                    <li>
                                        <u>
                                            <h6>Enviar Whatsapp:</h6>
                                        </u>

                                        <div class="">
                                            <i class="fas fa-phone m-1"></i>
                                            <a href="#!">+591 69508456</a>
                                            <br>
                                            <i class="fas fa-phone m-1"></i>
                                            <a href="#!">+591 69508456</a>
                                        </div>
                                    </li>
                                    <br>
                                    <li>
                                        <u>
                                            <h6>Correos:</h6>
                                        </u>

                                        <i class="fas fa-user m-1"></i>
                                        <a href="#!">jean.paul.carpio@gmail.com</a>
                                        <br>
                                        <i class="fas fa-user m-1"></i>
                                        <a href="#!">crystofer.mas@gmail.com</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <u>
                                    <h5>Siguenos</h5>
                                </u>

                                <a type="button" class="btn-floating btn-fb btn-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <br>
                                <a type="button" class="btn-floating btn-tw btn-sm">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <br>
                                <a type="button" class="btn-floating btn-li btn-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <br>
                                <a type="button" class="btn-floating btn-git btn-sm">
                                    <i class="fab fa-github"></i>
                                </a>
                                <br>
                                <a type="button" class="btn-floating btn-git btn-sm">
                                    <i class="fab fa-youtube"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href=""> EasyWaterBO.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        new WOW().init();
    });
</script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        offset: 100
    });
</script>