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