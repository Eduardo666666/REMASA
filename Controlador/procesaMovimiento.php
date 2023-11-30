<!DOCTYPE html>
<html>
<head>
    <?php
    // include '../Controlador/seguridadLogin.php';
    ?>
	<meta charset="utf-8">
	<title>REMASA WEB</title>

<link rel="stylesheet" href="https://use.typekit.net/nwm6dld.css">
    <!-- PROBLEMA DISENO TIENDA <link rel="stylesheet" href="assets/css/NuevoUsuario.css" type="text/css"> -->
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


    <!--Funcion para buscar y modificar datos de usuario__________________________________________________________-->
    <section>
    <?php
    // Inicio de sesión
    session_start();

    if (isset($_SESSION['correo'])) {

        // Resto del código
        if (isset($_POST['buscarUsuario'])) {
            // Importamos el archivo php de la clase Usuario
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
                <form method="post" onsubmit="return confirm('¿Actualizar datos?');" action="procesaMovimiento.php">
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
                    <input id="correo" type="text" name="correo" value="<?php echo $registro['correo']?>" required>
                    <div class="formleyenda"><label>Contraseña:</label></div>
                    <input id="contrasena" type="password" name="contrasena" value="<?php echo $registro['contrasena']?>" required>
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
                $user->registrarUsuario();
                //Mensaje informativo
                echo '<script>alert("Usuario '.$user->getNombre().' Modificado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../frmLogin.php");</script>';
            }//enviarRegAlum

        ?>
    </section>


    <!--Metodo consultar productos_________________________________________________________________________-->
    <section>
        <?php
        //
        function consultarProductos() {
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "test";
            $password = "REMASA";
            $database = "remasa";
        
            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $database);
        
            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
        
            // Consulta SQL para obtener todos los productos
            $sql = "SELECT * FROM producto";
            $result = $conn->query($sql);
        
            // Verificar si se obtuvieron resultados
            $productos = array();
            if ($result->num_rows > 0) {
                // Almacenar los datos de cada producto en un array
                while ($row = $result->fetch_assoc()) {
                    $productos[] = array(
                        'id' => $row["id"],
                        'nombre' => $row["nombre"],
                        'descripcion' => $row["descripcion"],
                        'cantidad' => $row["cantidad"],
                        'medida' => $row["medida"],
                        'precio' => $row["precio"],
                        'marca' => $row["marca"],
                        'rutaimagen' => $row["rutaimagen"]
                    );
                }
            }
        
            // Cerrar la conexión
            $conn->close();
        
            // Devolver el array de productos
            return $productos;
        }
        
        ?>
    </section>

    <!--Metodo consultar productos____________________________________________________________________________-->
    <section>
        <?php
        //
        function consultarProductosPorMarca() {
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "remasa";
        
            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $database);
        
            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
        
            // Consulta SQL para obtener todos los productos
            $sql = "SELECT * FROM producto WHERE marca = 'Mercedes-Benz'";
            $result = $conn->query($sql);
        
            // Verificar si se obtuvieron resultados
            $productos = array();
            if ($result->num_rows > 0) {
                // Almacenar los datos de cada producto en un array
                while ($row = $result->fetch_assoc()) {
                    $productos[] = array(
                        'id' => $row["id"],
                        'nombre' => $row["nombre"],
                        'descripcion' => $row["descripcion"],
                        'cantidad' => $row["cantidad"],
                        'medida' => $row["medida"],
                        'precio' => $row["precio"],
                        'marca' => $row["marca"],
                        'rutaimagen' => $row["rutaimagen"]
                    );
                }
            }
        
            // Cerrar la conexión
            $conn->close();
        
            // Devolver el array de productos
            return $productos;
        }
        
        ?>
    </section>

    <!--Metodo carrito____________________________________-->
    <?php
    //<!----------------------------------------------------------------------------------------------------------------------->
    class Carrito {
        private $productosCarrito = array();
    
        public function agregarProducto($producto) {
            $this->productosCarrito[] = $producto;
        }
    
        public function obtenerContenido() {
            return $this->productosCarrito;
        }
    
        // Puedes agregar más métodos según sea necesario (actualizar, eliminar, etc.)
    }
    
?>
</body>
</html>