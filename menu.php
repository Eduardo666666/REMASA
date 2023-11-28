<?php
class menu {
    function barraMenu() {
        ?>
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
                                    <a class="nav-link" href="index.php"><b>Inicio</b></a>
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
                            <a class="nav-icon position-relative text-decoration-none" href="carrito.php">
                                <i class="fa fa-fw fa-shopping-cart mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light"></span>
                            </a>
                            <a class="nav-icon position-relative text-decoration-none" href="frmLogin.php">
                                <i class="fa fa-fw fa-user mr-3"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </nav>
    <!-- Header -->    
        <?php
        }//método
    }//class
?>