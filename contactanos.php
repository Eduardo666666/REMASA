
<!DOCTYPE html>
<html lang="en">

<head>
    <title>REMASA - Contáctanos</title>
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
    <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" id="templatemo_nav_top" style="background-color: #21386C;">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fab fa-whatsapp"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="https://wa.me/3339521166" target="_blank"> 33 39 52 11 66</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340" target="_blank"> 33 36 00 15 49 / 33 36 00 15 70</a>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com" target="_blank"> remasamg@hotmail.com</a>
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
        session_start();
        include 'Controlador/validarMenu.php';
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


  
    <!-- Contenido de la pagina-->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-12 m-auto text-center">
            <h1 class="h1">Contáctanos</h1>
            <p class="text-center" style="font-weight: 400;">
                ¿Alguna duda?
                Sigue este link para conectarte a nuestro WhatsApp, te atenderemos a la brevedad.
            </p>

            <i class="fab fa-whatsapp fa-fw"style="font-size: 32px"></i>
            <br>
            <p class="col-md-6 m-auto text-center"><a href="https://wa.me/3339521166" target="_blank" style="font-size: 32px">wa.link/29axhg</a></p>
            </p>
        </div>
    </div>

    <!-- Mapa -->
    <div class="row align-items-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7640394.048980586!2d-107.57978944261912!3d20.7645236022926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b36cc0d9c15b%3A0x59f89a6ff9183a46!2sREMASA!5e0!3m2!1ses!2smx!4v1702530670759&z=10" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--Mapa -->

    <br>
    <br>
    <br>
    

    <div class="container">
       
                  
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center">

                        
                        <i class="fas fa-clock"style="font-size: 34px"></i>
                        <br>
                            <h1 class="h1">Horario de atención</h1>
                            <p class="text-center" style="font-weight: 600;">Lunes a Viernes</p>
                            <p class="text-center" style="font-weight: 400;">09:00 a 17:00 hrs</p>
                            <p class="text-center"style="font-weight: 600;" >Sábados</p>
                            <p class="text-center" style="font-weight: 400;">09:00 a 14:30 hrs</p>
                     </div>
                 
                </div>
     </div>

        <!-- Contáctanos -->
            <div class="container py-5">
                <p class="h2 text-center">Envíanos tus comentarios</p>
                <br>
                <div class="row py-5">
                    <form class="col-md-9 m-auto" id="comentariosForm" method="post" role="form">
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputname" style="font-weight: 600;">Nombre:</label>
                                <input type="text" class="form-control mt-1" id="name" name="name" placeholder="">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputemail" style="font-weight: 600;">Email:</label>
                                <input type="email" class="form-control mt-1" id="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputsubject" style="font-weight: 600;">Asunto:</label>
                            <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="inputmessage" style="font-weight: 600;">Comentario:</label>
                            <textarea class="form-control mt-1" id="message" name="message" placeholder="" rows="8"></textarea>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="submit" id="enviarBtn" class="btn btn-success btn-lg px-3">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <div id="mensajeEnvio" class="mt-3"></div>
                </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Manejar clic en el botón de enviar usando AJAX
                document.getElementById('enviarBtn').addEventListener('click', function (event) {
                    event.preventDefault();  // Evitar la recarga de la página al hacer clic en el botón de enviar

                    // Obtener datos del formulario
                    var formData = new FormData(document.getElementById('comentariosForm'));

                    // Realizar la solicitud AJAX
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'Controlador/procesaFormuario.php', true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                // Mostrar mensaje de éxito
                                document.getElementById('mensajeEnvio').innerHTML = '<div class="alert alert-success" role="alert">Comentario enviado correctamente.</div>';
                                
                                // Limpiar campos del formulario después de enviar
                                document.getElementById('name').value = '';
                                document.getElementById('email').value = '';
                                document.getElementById('subject').value = '';
                                document.getElementById('message').value = '';
                            } else {
                                // Mostrar mensaje de error si la solicitud falla
                                document.getElementById('mensajeEnvio').innerHTML = '<div class="alert alert-danger" role="alert">Error al enviar el comentario.</div>';
                            }
                        }
                    };
                    xhr.send(formData);
                });
            });
            </script>
<!-- Contáctanos -->




    <!-- Footer -->
    <footer id="tempaltemo_footer" style="background-color: #1A2B50;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 border-bottom pb-3 border-light logo" style="color: #1BB280;"><b>REMASA</b></h2>
                    <ul class="list-unstyled text-light footer-link-list">

                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none" href="https://www.google.com.mx/maps/place/REMASA/@20.620459,-103.2890316,19.38z/data=!4m6!3m5!1s0x8428b36cc0d9c15b:0x59f89a6ff9183a46!8m2!3d20.6203304!4d-103.2883587!16s%2Fg%2F1vljgn9n?entry=ttu" target="_blank"> Carretera a Los Altos No. 1776 <br> San Pedrito, Tlaquepaque, Jalisco.</a>
                        </li>

                        <li>
                        <i class="fab fa-whatsapp fa-fw"></i>
                        <a class="text-decoration-none" href="https://wa.me/3339521166" target="_blank"> 33 39 52 11 66</a>
                        </li>

                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340" target="_blank">33 36 00 15 49 / 33 36 00 15 70</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com" target="_blank">remasamg@hotmail.com</a>
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
                        <li><a class="text-decoration-none" href="tiendaConecciones.php">Conexiones</a></li>
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
                            | Desarrollado por Software Solutions
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