<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REMASA</title>
    <link rel="stylesheet" href="../css/menu.css" type="text/css">
    <link rel="stylesheet" href="../css/formularios.css" type="text/css">
</head>
<body>
    <!-- Separación del menu con el resto de la pagina-->
    <div style="clear:both;"></div>
    <section>
        <h1>Acceso al sistema</h1>
        <div>
        <form method="post" action="Controlador/validarLogin.php">
            <div class="formleyenda"><label>Correo:</label></div>
            <input id="correo" type="text" name="correo">
            <div class="formleyenda"><label>Contraseña:</label></div>
            <input id="contrasena" type="password" name="contrasena">
            <div></div>
            <div>
                <button id="enviarUsr" name="enviarUsr" type="submit">Ingresar</button>
            </div>
        </form>
        </div>
        
    </section>
</body>
</html>