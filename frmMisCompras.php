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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Cargar fuentes -->
    <link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Replace the "test" client-id value with your client-id -->
    <script src="https://www.paypal.com/sdk/js?client-id=AU53wQEsG_cDrwz7ga56YgGlmHRufyOoxYTci0plCtnDKGREBlOxwBhcSAL6tUr9JHz7JJeodj0nyqp1&currency=MXN"></script>
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
        include 'menulogin.php';
        $menu = new menuLogin();
        $menu ->barraMenuLogin();
    ?>
    <!-- Header -->

    <!-- Separación del menu con el resto de la pagina-->
    <div style="clear:both;"></div>
    <section>
        <!--tabla de consulta-->
        <div style="overflow-x: auto;">
        <h1 style="text-align:center">Compras realizadas</h1>
            <table class="table table-bordered">
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
        

        <div id="paypal-button-container"></div>
        <p id="result-message"></p>

        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '500.00' // Monto en pesos mexicanos
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (orderData) {
                        // Successful capture! For dev/demo purposes:
                        // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        // const transaction = orderData.purchase_units[0].payments.captures[0];
                        // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                        
                        // Muestra un mensaje en el elemento con el ID 'result-message'
                        document.getElementById('result-message').innerText = 'Transacción exitosa';
                    });
                }
            }).render('#paypal-button-container');
        </script>



    </section>

</body>
</html>