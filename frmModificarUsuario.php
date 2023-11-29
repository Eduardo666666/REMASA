<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>REMASA - Registrar usuario</title>
        <link rel="stylesheet" href="assets/css/NuevoUsuario.css" type="text/css">
    </head>

    <body>
        <?php
            $_SESSION['usuario'] = $correo;
        ?>
        <script>
        // Esta función se ejecutará automáticamente cuando la página se cargue completamente
        window.onload = function() {
            ejecutarFuncion();
        };

        // Tu función que deseas ejecutar
        // function ejecutarFuncion() {
        //     // Coloca aquí el código que deseas ejecutar automáticamente
        //     console.log("La función se ha ejecutado automáticamente al cargar la página.");
        // }
        </script>

        <?php

            include 'Controlador/procesaMovimiento.php';

            // Obtener la información de los productos
            $productos = modificarUsuario();
        ?>

        <div style="clear:both;"></div>
        <section>
            <div class="login-NuevoUsuario">
                <h2>Registo de usuario</h2>
                <form method="post" action="Controlador/procesaMovimiento.php">
                    <div class="formleyenda"><label>Nombre:</label></div>
                    <input id="nombre" type="text" name="nombre" required>
                    <div class="formleyenda"><label>Apellidos:</label></div>
                    <input id="apellidos" type="text" name="apellidos" required>
                    <div class="formleyenda"><label>Teléfono:</label></div>
                    <input maxlength="10" min="10" id="telefono" type="tel" name="telefono" required>
                    <div class="formleyenda"><label>Código postal:</label></div>
                    <input id="codigopostal" type="number" name="codigopostal" required>
                    <div class="formleyenda"><label>Dirección:</label></div>
                    <input id="direccion" type="text" name="direccion" required>
                    <div class="formleyenda"><label>Ciudad:</label></div>
                    <input id="ciudad" type="text" name="ciudad" required>
                    <div class="formleyenda"><label>Estado:</label></div>
                    <select name="estado" id="estado" required>
                        <option value="" disabled selected>Selecciona un estado</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                    <div class="formleyenda"><label>Correo:</label></div>
                    <input id="correo" type="text" name="correo" required>
                    <div class="formleyenda"><label>Contraseña:</label></div>
                    <input id="contrasena" type="password" name="contrasena" required>
                    <div>
                        <button id="enviarNvoUsr" name="enviarNvoUsr" type="submit">Registrar</button>
                    </div>
                    <div class="regresar">
                        <p><a href="frmlogin.php">Regresar</a></p>
                    </div>
            </form>
                
            </div>
            
        </section>
    </body>
</html>