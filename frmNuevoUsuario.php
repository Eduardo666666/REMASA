<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>REMASA - Registrar usuario</title>
        <link rel="stylesheet" href="assets/css/NuevoUsuario.css" type="text/css">
    </head>

    <body>
        <div style="clear:both;"></div>
        <section>
            <div class="login-NuevoUsuario">
                <h2>Registo de usuario</h2>
                <form method="post" action="Controlador/procesaMovimiento.php" onsubmit="return confirm('¿Datos correctos?');">
                    <div class="formleyenda"><label>Nombre:</label></div>
                    <input id="nombre" type="text" name="nombre" required>
                    <div class="formleyenda"><label>Apellidos:</label></div>
                    <input id="apellidos" type="text" name="apellidos" required>
                    <div class="formleyenda"><label>Telefono:</label></div>
                    <input id="telefono" type="number" name="telefono" required>
                    <div class="formleyenda"><label>Código postal:</label></div>
                    <input id="codigopostal" type="number" name="codigopostal" required>
                    <div class="formleyenda"><label>Dirección:</label></div>
                    <input id="direccion" type="text" name="direccion" required>
                    <div class="formleyenda"><label>Ciudad:</label></div>
                    <input id="ciudad" type="text" name="ciudad" required>
                    <div class="formleyenda"><label>Estado:</label></div>
                    <input id="estado" type="text" name="estado" required>
                    <div class="formleyenda"><label>Correo:</label></div>
                    <input id="correo" type="text" name="correo" required>
                    <div class="formleyenda"><label>Contraseña:</label></div>
                    <input id="contrasena" type="password" name="contrasena" required>
                    <div></div>
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