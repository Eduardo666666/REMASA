<?php
class menuLogin {
    function barraMenuLogin() {
        ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Cargar fuentes -->
    <link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">



    <style>
    /* Estilo personalizado para el botón específico */
    .custom-btn {
        background-color: #21386C !important;
        color: white !important;
        border-radius: 4px !important;
        cursor: pointer;
        width: calc(100% - 24px) !important;
        max-width: none !important;
        padding: 10px 15px !important;
        margin: 5px !important;
        border: none !important;
    }


    /* Estilo para el botón específico cuando se pasa el mouse por encima */
    .custom-btn:hover {
        background-color: #008E72 !important;
    }


    </style>

            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light shadow">
                <div class="container d-flex justify-content-between align-items-center">

                    <img  class="navbar-brand text-success logo h1 align-self-center" src="./assets/img/logo.png" 
                    alt="Remasa Logo" style="width: 200px; height: auto;">

                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                        <div class="flex-fill">
                            <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="principal.php"><b>Inicio</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="acercaDeNosotros.php"><b>Acerca de nosotros</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tienda.php"><b>Tienda</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contactanos.php"><b>Contáctanos</b></a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar align-self-center d-flex">
                            <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                    <div class="input-group-text">
                                        <i class="fa fa-fw fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                <i class="fa fa-fw fa-search mr-2"></i>
                            </a>
                            <a class="nav-icon position-relative text-decoration-none" href="#">
                            <i class="fa fa-fw fa-shopping-cart mr-1"></i>
                                <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span> -->
                            </a>
                            <!-- <a class="nav-icon position-relative text-decoration-none" href="Controlador/cerrarLogin.php">
                                <i class="fa fa-fw fa-user mr-3"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                            </a>  -->


                           
                            
                            <div class="btn-group">
    <button type="button" class="btn btn-primary custom-btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="fa fa-user" style="padding-right: 10px;"></span>
    </button>
                                <div class="dropdown-menu">
                                    <form method="post" action="Controlador/modificacionUsuario.php">
                                        <!-- Utiliza un botón en lugar de un enlace -->
                                        <button class="dropdown-item" id="buscarUsuario" name="buscarUsuario" type="submit">Modificar usuario</button>
                                    </form>
                                    <a class="dropdown-item" href="frmMisCompras.php">Mis compras</a>
                                    <a class="dropdown-item" href="Controlador/cerrarLogin.php">Cerrar Sesión</a>
                                </div>
                            </div>

                 </div>
            </nav>
    <!-- Header -->   
        <?php
        }//método
    }//class
?>