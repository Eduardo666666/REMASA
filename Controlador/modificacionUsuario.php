<!DOCTYPE html>
<html>
<head>
    <?php
    // include '../Controlador/seguridadLogin.php';
    ?>
	<meta charset="utf-8">
	<title>REMASA WEB</title>

<link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
<link rel="stylesheet" href="../assets/css/NuevoUsuario.css" type="text/css">
</head>
<body>
    <header>
        
    </header>
    <!-- Separación del menu con el resto de la página-->
    <div style="clear:both;"></div>

    <section>
        <?php
            //Efectuar la operación REGISTRAR
            if(isset($_POST['editarUsr'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/usuarios.php';
                //Generamos una instancia de la clase Alumnos
                $user = new Usuario();
                //Registramos datos en el objeto
                $user->setApellidos($_POST['apellidos']);
                $user->setCiudad($_POST['ciudad']);
                $user->setCodigopostal($_POST['codigopostal']);
                $user->setContrasena($_POST['contrasena']);
                $user->setCorreo($_POST['correo']);
                $user->setDireccion($_POST['direccion']);
                $user->setEstado($_POST['estado']);
                $user->setNombre($_POST['nombre']);
                $user->setTelefono($_POST['telefono']);
                
                //Llamada al método para registrar valores
                $user->editarUsuario();
                //Mensaje informativo
                echo '<script>alert("Usuario '.$user->getNombre().' Modificado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../principal.php");</script>';
            }//enviarRegAlum

        ?>
    </section>


<!--Funcion para buscar y modificar datos de usuario__________________________________________________________-->
<section>
    <?php
    // Inicio de sesión
    session_start();

    if (isset($_SESSION['correo'])) {

        // Resto del código
        if (isset($_POST['buscarUsuario'])) {
            // Importamos el archivo php d  e la clase Usuario
            include '../Modelo/usuarios.php';

            // Generamos una instancia de la clase Usuario
            $user = new Usuario();

            // Cambiar valores para actualizar
            $user->setCorreo($_SESSION['correo']);

            // Llamada al método para buscar valores
            $datos = $user->consultaUsuario();

            // Obtener el registro de la búsqueda
            $registro = mysqli_fetch_array($datos);

            if ($registro['nombre'] != '') {
                // Mostrar los datos obtenidos
                ?>
                <h1>Busqueda de Usuario</h1>
                <form method="post" onsubmit="return confirm('¿Actualizar datos?');" action="modificacionUsuario.php">
                    <div class="formleyenda"><label>Nombre:</label></div>
                    <input id="nombre" type="text" name="nombre" value="<?php echo $registro['nombre']?>" required>
                    <div class="formleyenda"><label>Apellidos:</label></div>
                    <input id="apellidos" type="text" name="apellidos" value="<?php echo $registro['apellidos']?>" required>
                    <div class="formleyenda"><label>Teléfono:</label></div>
                    <input maxlength="10" min="10" id="telefono" type="tel" name="telefono" value="<?php echo $registro['telefono']?>" required>
                    <div class="formleyenda"><label>Código postal:</label></div>
                    <input id="codigopostal" type="number" name="codigopostal" value="<?php echo $registro['codigopostal']?>" required>
                    <div class="formleyenda"><label>Dirección:</label></div>
                    <input id="direccion" type="text" name="direccion" value="<?php echo $registro['direccion']?>" required>
                    <div class="formleyenda"><label>Ciudad:</label></div>
                    <input id="ciudad" type="text" name="ciudad" value="<?php echo $registro['ciudad']?>" required>
                    <div class="formleyenda"><label>Estado:</label></div>
                    <select name="estado" id="estado" required>
                        <option value="" disabled selected>Selecciona un estado</option>
                        <option value="Aguascalientes" <?php echo ($registro['estado'] == 'Aguascalientes') ? 'selected' : ''; ?>>Aguascalientes</option>
                        <option value="Baja California" <?php echo ($registro['estado'] == 'Baja California') ? 'selected' : ''; ?>>Baja California</option>
                        <option value="Baja California Sur" <?php echo ($registro['estado'] == 'Baja California Sur') ? 'selected' : ''; ?>>Baja California Sur</option>
                        <option value="Campeche" <?php echo ($registro['estado'] == 'Campeche') ? 'selected' : ''; ?>>Campeche</option>
                        <option value="Ciudad de México" <?php echo ($registro['estado'] == 'Ciudad de México') ? 'selected' : ''; ?>>Ciudad de México</option>
                        <option value="Coahuila" <?php echo ($registro['estado'] == 'Coahuila') ? 'selected' : ''; ?>>Coahuila</option>
                        <option value="Colima" <?php echo ($registro['estado'] == 'Colima') ? 'selected' : ''; ?>>Colima</option>
                        <option value="Chiapas" <?php echo ($registro['estado'] == 'Chiapas') ? 'selected' : ''; ?>>Chiapas</option>
                        <option value="Chihuahua" <?php echo ($registro['estado'] == 'Chihuahua') ? 'selected' : ''; ?>>Chihuahua</option>
                        <option value="Durango" <?php echo ($registro['estado'] == 'Durango') ? 'selected' : ''; ?>>Durango</option>
                        <option value="Estado de México" <?php echo ($registro['estado'] == 'Estado de México') ? 'selected' : ''; ?>>Estado de México</option>
                        <option value="Guanajuato" <?php echo ($registro['estado'] == 'Guanajuato') ? 'selected' : ''; ?>>Guanajuato</option>
                        <option value="Guerrero" <?php echo ($registro['estado'] == 'Guerrero') ? 'selected' : ''; ?>>Guerrero</option>
                        <option value="Hidalgo" <?php echo ($registro['estado'] == 'Hidalgo') ? 'selected' : ''; ?>>Hidalgo</option>
                        <option value="Jalisco" <?php echo ($registro['estado'] == 'Jalisco') ? 'selected' : ''; ?>>Jalisco</option>
                        <option value="Michoacán" <?php echo ($registro['estado'] == 'Michoacán') ? 'selected' : ''; ?>>Michoacán</option>
                        <option value="Nuevo León" <?php echo ($registro['estado'] == 'Nuevo León') ? 'selected' : ''; ?>>Nuevo León</option>
                        <option value="Oaxaca" <?php echo ($registro['estado'] == 'Oaxaca') ? 'selected' : ''; ?>>Oaxaca</option>
                        <option value="Puebla" <?php echo ($registro['estado'] == 'Puebla') ? 'selected' : ''; ?>>Puebla</option>
                        <option value="Querétaro" <?php echo ($registro['estado'] == 'Querétaro') ? 'selected' : ''; ?>>Querétaro</option>
                        <option value="Quintana Roo" <?php echo ($registro['estado'] == 'Quintana Roo') ? 'selected' : ''; ?>>Quintana Roo</option>
                        <option value="San Luis Potosí" <?php echo ($registro['estado'] == 'San Luis Potosí') ? 'selected' : ''; ?>>San Luis Potosí</option>
                        <option value="Sinaloa" <?php echo ($registro['estado'] == 'Sinaloa') ? 'selected' : ''; ?>>Sinaloa</option>
                        <option value="Sonora" <?php echo ($registro['estado'] == 'Sonora') ? 'selected' : ''; ?>>Sonora</option>
                        <option value="Tabasco" <?php echo ($registro['estado'] == 'Tabasco') ? 'selected' : ''; ?>>Tabasco</option>
                        <option value="Tamaulipas <?php echo ($registro['estado'] == 'Tamaulipas') ? 'selected' : ''; ?>">Tamaulipas</option>
                        <option value="Tlaxcala <?php echo ($registro['estado'] == 'Tlaxcala') ? 'selected' : ''; ?>">Tlaxcala</option>
                        <option value="Veracruz <?php echo ($registro['estado'] == 'Veracruz') ? 'selected' : ''; ?>">Veracruz</option>
                        <option value="Yucatán" <?php echo ($registro['estado'] == 'Yucatán') ? 'selected' : ''; ?>>Yucatán</option>
                        <option value="Zacatecas" <?php echo ($registro['estado'] == 'Zacatecas') ? 'selected' : ''; ?>>Zacatecas</option>
                    </select>
                    <div class="formleyenda"><label>Correo:</label></div>
                    <input id="correo" type="text" name="correo" value="<?php echo $registro['correo']?>" readonly required>
                    <div class="formleyenda"><label>Contraseña:</label></div>
                    <input id="contrasena" type="text" name="contrasena" value="<?php echo $registro['contrasena']?>" required>
                    <div>
                        <button id="editarUsr" name="editarUsr" type="submit">Editar</button>
                    </div>
                </form>
        
                <?php
                } else {
                    // Mensaje informativo
                    echo '<script>alert("Error.");</script>';
                    // Redirigir a página principal
                    // echo '<script>window.location.replace("../principal.php");</script>';
                } // else
            }//if-enviarConsultaProf
        } else {
            echo "La variable de sesión 'correo' no está definida.";
        }
        

        ?>
    </section>
</body>
</html>