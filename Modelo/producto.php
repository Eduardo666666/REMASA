<?php


class Producto {
    //Atributos(igual que los campos de la tabla)
    private $cantidad;
    private $descripcion;
    private $id;
    private $medida;
    private $nombre;
    private $precio;
    private $marca;
    private $rutaimagen;
    private $categoria; 
    //Atributo de conectividad con la BD
    private $conexion;
    
    //Métodos
    //-Constructor
    public function __construct(){
        $this->cantidad=1;
        $this->descripcion="none";
        $this->id=1;
        $this->medida=1;
        $this->nombre="none";
        $this->precio=1;
        $this->marca="none";
        $this->rutaimagen="none";
        $this->categoria="none";
    }
    
    //Set's y Get's
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setMedida($medida){
        $this->medida = $medida;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setRutaimagen($rutaimagen){
        $this->rutaimagen = $rutaimagen;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    
    public function getCantidad(){
        return $this->cantidad;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getMedida(){
        return $this->medida;
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getRutaimagen(){
        return $this->rutaimagen;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    
    /*Método para conectar a la tabla alumnos de la BD
    private static function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{
            mysqli_select_db($this->conexion,"remasa");
        }
    }//EstableceConexion*/

    private static function EstableceConexion(){
        $conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else {
            mysqli_select_db($conexion, "remasa");
        }

        return $conexion;
    }
    
    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR productos Mercedez-Benz
    public function buscarProductosMercedes() {
        // 1-Definir la instruccion SQL de consulta
        $consulta = "SELECT id, nombre, descripcion, medida, precio, rutaimagen FROM producto WHERE marca='Mercedes-Benz'";
        // echo $consulta."<br>";
    
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR productos MAN
    public function buscarProductosMAN(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where marca='MAN'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos MAN

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR productos Scania
    public function buscarProductosScania(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where marca='Scania'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos Scania

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR productos Volvo
    public function buscarProductosVolvo(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where marca='Volvo'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos Volvo

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria conecciones
    public function buscarProductosCategoriaConecciones(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Conecciones'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria conecciones

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria lubricantes
    public function buscarProductosCategoriaLubricantes(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Lubricantes'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria lubricantes

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria filtracion
    public function buscarProductosCategoriaFiltracion(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Filtracion'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria filtracion

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria direccion
    public function buscarProductosCategoriaDireccion(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Direccion'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria direccion

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria frenos
    public function buscarProductosCategoriaFrenos(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Frenos'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria frenos

    //----------------------------------------------------------------------------------------------------------------------------------
    //Método para BUSCAR categoria suspencion
    public function buscarProductosCategoriaSuspencion(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select id, nombre, descripcion, medida, precio, rutaimagen from producto where categoria='Suspencion'";
        //echo $consulta."<br>";
        
        // 2-Establecer conexión con la BD
        $conexion = self::EstableceConexion();
    
        // 3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($conexion, $consulta);
    
        // 4-Cierro la conexión con la BD
        mysqli_close($conexion);
    
        // 5-Retorna los datos de la consulta
        return $resultado;
    }//consulta productos categoria suspencion


    //-----------------------------------------------------------------------------------------------------------------------------
     // Método para obtener los detalles del producto
     public function obtenerDetallesProducto($id) {
        // Verificar si $id es null o no es un número entero positivo
        if ($id === null || !ctype_digit($id) || $id <= 0) {
            // Puedes manejar este caso según tus necesidades
            return false;
        }
    
        // Obtener la conexión llamando al método estático
        $conexion = self::EstableceConexion();
    
        // Consulta SQL para obtener detalles del producto por ID
        $sql = "SELECT * FROM producto WHERE id = $id";
        try{
        // Ejecutar la instrucción SQL en la conexión (BD)
        $result = mysqli_query($conexion, $sql);
        
        // Verificar si se obtuvieron resultados
        if ($result && $result->num_rows > 0) {
            // Obtener los detalles del producto
            $row = $result->fetch_assoc();
    
            // Asignar los valores a los atributos directamente
            $this->setCantidad(1);
            $this->setDescripcion($row["descripcion"]);
            $this->setId($row["id"]);
            $this->setMedida($row["medida"]);
            $this->setNombre($row["nombre"]);
            $this->setPrecio($row["precio"]);
            $this->setMarca($row["marca"]);
            $this->setRutaimagen($row["rutaimagen"]);
            $this->setCategoria($row["categoria"]);
    
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        die('Error en la consulta: ' . $e->getMessage());
    }
    
    }
   
}//class

