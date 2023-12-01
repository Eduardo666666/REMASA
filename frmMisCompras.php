<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>REMASA - Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon2.png">

    <link rel="stylesheet" href="assets/css/tablaMisCompras.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Cargar fuentes -->
    <link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>

    <!-- Navegación -->
   <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" id="templatemo_nav_top" style="background-color: #21386C;">
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
        include 'menulogin.php';
        $menu = new menuLogin();
        $menu ->barraMenuLogin();
    ?>
    <!-- Header -->

    <!-- Separación del menu con el resto de la pagina-->
    <div style="clear:both;"></div>



    
    <section>
        <!--tabla de consulta-->

        <div class="table-container">
        <div style="overflow-x: auto;">

     
        <h1 class="h1" style="text-align:center">Pedidos completados</h1>

        <br>
      
            <table class="table-compras table-bordered ">
                <thead>
                    <tr>
                        <th>Número de venta</th>
                        <th>Id producto</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Precio Unitario</th>
                        <th>Precio total</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        include 'Modelo/venta.php';
                        $venta = new Venta();
                        $datos = $venta->consultaVenta();
                
                        while ($fila = mysqli_fetch_array($datos)) {
                            echo "<tr><td>" . $fila['idventa'] . "</td><td>" . $fila['idproducto'] . "</td><td>" . $fila['cantidad'] . 
                            "</td><td>" . $fila['descripcion'] . "</td><td>" . $fila['preciounitario'] . "</td><td>" . 
                            $fila['detalleventa_preciototal'] . "</td><td>" . $fila['venta_fecha'] . "</td></tr>";
                        }
                    ?>                    
                </tbody>
            </table>
        </div>

                    </div>
        <!--tabla de consulta-->
    </section>



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
                        <li><a class="text-decoration-none" href="tiendaSuspension.php">Suspensión</a></li>
                        <li><a class="text-decoration-none" href="tiendaFrenos.php">Frenos</a></li>
                        <li><a class="text-decoration-none" href="tiendaDireccion.php">Dirección</a></li>
                        <li><a class="text-decoration-none" href="tiendaFiltracion.php">Filtración</a></li>
                        <li><a class="text-decoration-none" href="tiendaLubricantes.php">Lubricantes</a></li>
                        <li><a class="text-decoration-none" href="tiendaConecciones.php">Conecciones</a></li>
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
        <div style="background-color: #058F71;">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 REMASA
                            | Desarrolado por: <a rel="sponsored" target="_blank">Software Solutions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer -->

</body>
</html>