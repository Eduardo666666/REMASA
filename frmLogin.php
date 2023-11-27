<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>REMASA - Loggin</title>
        <link rel="stylesheet" href="assets/css/formularios.css" type="text/css">
        <link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    </head>

    <body>
        <!-- Separación del menu con el resto de la pagina-->
        <div style="clear:both;"></div>
        <section>
            <!-- <h1>Acceso al sistema</h1> -->
            <div class="login-container">
                <h2>Iniciar sesión</h2>
           
                <form method="post" action="Controlador/validarLogin.php">
                    <div class="formleyenda"><label>Correo:</label></div>
                    <input id="correo" type="text" name="correo" required>
                    <br>

                    <div class="formleyenda"><label>Contraseña:</label></div>
                    <input id="contrasena" type="password" name="contrasena" required>
                    <button id="enviarUsr" name="enviarUsr" type="submit">Ingresar</button>
                    <div class="login-reg">
                        <p>No tengo cuenta <a href="frmNuevoUsuario.php">Registrarse</a></p>
                    </div>    
                    <div class="regresar">
                        <p><a href="index.php">Regresar</a></p>
                    </div>
                </form>
                
            </div>
            
        </section>
    </body>
</html>