<!DOCTYPE html>
<html lang="en">

<head>
    <title>REMASA - Acerca de nosotros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon2.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Cargar fuentes -->
    <link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" id="templatemo_nav_top" style="background-color: #20386B;">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fab fa-whatsapp"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href=""> 33 39 52 11 66</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340"> 33 36 00 15 49 / 33 36 00 15 70</a>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com"> remasamg@hotmail.com</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/p/Refaccionaria-Miguel-De-Autobuses-Sa-De-Cv-100054638641322/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/remasa_mx/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navegación -->


    

    <!-- Header -->
    <?php
        //Llamada al menú de navegación
        include 'menu.php';
        $menu = new menu();
        $menu ->barraMenu();
    ?>
    <!--Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

 <!--Banner -->

 <section style="background-color: #058F71;">
    <div class="container" style="padding: 20px;">
        <div class="col-md-12 text-white text-center">
            <h1>Acerca de nosotros</h1>
            <p>Somos una empresa especializada dedicada a la venta de refacciones para autobuses, ofreciendo piezas de alta calidad y un servicio personalizado. Contamos con un equipo experto que garantiza soluciones eficientes para el mantenimiento de flotas, con entregas rápidas y un compromiso constante con la satisfacción del cliente. Confía en nosotros para mantener sus autobuses en óptimas condiciones de funcionamiento.
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 text-white text-center">
                <h2>Misión</h2>
                <p>Proporcionar a los clientes del sector de autotransportes, refacciones de la más alta calidad, respaldadas por un servicio excepcional, garantizando la seguridad y el rendimiento de sus vehículos, manteniendo al mismo tiempo el compromiso con la calidad y la excelencia en sus servicios.
                </p>
            </div>
            <div class="col-md-6 text-white text-center">
                <h2>Visión</h2>
                <p>Ser líderes en la industria de refacciones para autobuses y tractocamiones, reconocidos a nivel nacional por la excelencia en sus productos y servicios. Se busca continuar creciendo y expandiendo su presencia en el mercado, manteniendo siempre sus valores como pilares fundamentales de la empresa.
                </p>
            </div>
        </div>
    </div>
</section>


    </section>
    <!--Banner -->

    <!--Sección -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Horario de atención</h1>
                <img src="assets/img/horariodeatencion.png" alt="Horario">
            </div>
        </div>
    </section>
    <!--Sección -->

    <!--Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestras marcas</h1>
                    <p>
                        Trabajamos con las piezas de las marcas más solicitadas en el mercado.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controles-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--Controles-->

                        <!--Carrusel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--Primer slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/manlogo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/mercedeslogo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volvologo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/scanialogo.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Primer slide-->

                                    <!--Segundo slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volvologo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/scanialogo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/manlogo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/mercedeslogo.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Segundo slide-->

                                </div>
                                <!-- Slides-->
                            </div>
                        </div>
                        <!--Carrusel Wrapper-->

                        <!--Controles-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!-- Controles-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brands-->

    <!-- Footer -->
    <footer id="tempaltemo_footer" style="background-color: #1A2B50;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 border-bottom pb-3 border-light logo" style="color: #1BB280;"><b>REMASA</b></h2>
                    <ul class="list-unstyled text-light footer-link-list">

                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none" href="https://www.google.com.mx/maps/place/REMASA/@20.620459,-103.2890316,19.38z/data=!4m6!3m5!1s0x8428b36cc0d9c15b:0x59f89a6ff9183a46!8m2!3d20.6203304!4d-103.2883587!16s%2Fg%2F1vljgn9n?entry=ttu"> Carretera a Los Altos No. 1776 <br> San Pedrito, Tlaquepaque, Jalisco.</a>
                        </li>

                        <li>
                        <i class="fab fa-whatsapp fa-fw"></i>
                        <a class="text-decoration-none" href="https://wa.me/3339521166"> 33 39 52 11 66</a>
                        </li>

                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">33 36 00 15 49 / 33 36 00 15 70</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">remasamg@hotmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Suspensión</a></li>
                        <li><a class="text-decoration-none" href="#">Frenos</a></li>
                        <li><a class="text-decoration-none" href="#">Dirección</a></li>
                        <li><a class="text-decoration-none" href="#">Filtración</a></li>
                        <li><a class="text-decoration-none" href="#">Lubricantes</a></li>
                        <li><a class="text-decoration-none" href="#">Conecciones</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Acceso rápido</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Inicio</a></li>
                        <li><a class="text-decoration-none" href="acercaDeNosotros.php">Acerca de nosotros</a></li>
                        <li><a class="text-decoration-none" href="contactanos.php">Contáctanos</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4" style="background-color: #1A2B50;">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">

                    <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://wa.me/3339521166"><i class="fab fa-whatsapp fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/p/Refaccionaria-Miguel-De-Autobuses-Sa-De-Cv-100054638641322/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/remasa_mx/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div  style="background-color: #058F71;">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light" style="background-color: #058F71;";>
                            Copyright &copy; 2023 REMASA 
                            | Desarrollado por:  <a rel="sponsored" target="_blank">Software Solutions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--Footer -->
    <!--Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!--Script -->
</body>

</html>