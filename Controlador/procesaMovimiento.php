<!DOCTYPE html>
<html>
<head>
    <?php
    // include '../Controlador/seguridadLogin.php';
    ?>
	<meta charset="utf-8">
	<title>REMASA WEB</title>
    <link rel="stylesheet" href="../css/menu.css" type="text/css">
    <link rel="stylesheet" href="../css/formularios.css" type="text/css">
</head>
<body>
    <header>
        
    </header>
    <!-- Separación del menu con el resto de la página-->
    <div style="clear:both;"></div>
    <section>
        <?php
            //Efectuar la operación REGISTRAR
            if(isset($_POST['enviarNvoUsr'])){
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
                $user->registrarUsuario();
                //Mensaje informativo
                echo '<script>alert("Usuario '.$user->getNombre().' registrado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../frmLogin.php");</script>';
            }//enviarRegAlum

        ?>
    </section>
</body>
</html>