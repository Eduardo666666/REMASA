<?php
class menuLogin {
    function barraMenuLogin() {
        ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light shadow">
                <div class="container d-flex justify-content-between align-items-center">

                    <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                        Zay
                    </a>

                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                        <div class="flex-fill">
                            <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="principal.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="acercaDeNosotros.php">Acerca de nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tienda.php">Tienda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contactanos.php">Contáctanos</a>
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
                                <i class="fa fa-fw fa-cart-arrow-down mr-1"></i>
                                <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span> -->
                            </a>

                            <!-- <a class="nav-icon position-relative text-decoration-none" href="Controlador/cerrarLogin.php">
                                <i class="fa fa-fw fa-user mr-3"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                            </a>  -->
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">
                                    <!-- Ícono de despliegue sin texto -->
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="frmModificarUsuario.php">Modificar usuario</a>
                                    <a class="dropdown-item" href="Controlador/cerrarLogin.php">Cerrar Sesión</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </nav>
    <!-- Header -->    
        <?php
        }//método
    }//class
?>