<?php


class Venta{
    //Atributos(igual que los campos de la tabla)
    private $idventa;
    private $nuevoIdVenta;
    private $idproducto;
    private $cantidad;
    private $descripcion;
    private $preciototal;
    private $preciounitario;
    private $idusuario;
    private $fecha;
    private $iva;
    private $totalVenta;
    //Atributo de conectividad con la BD
    private $conexion;
    
    //-Constructor
    public function __construct(){
        $this->idventa=1;
        $this->idproducto=1;
        $this->cantidad=1;
        $this->descripcion="none";
        $this->preciototal=1;
        $this->preciounitario=1;
        $this->idusuario=1;
        $this->fecha=1;
        $this->iva=1;
        $this->totalVenta=1;
    }
    
    //Set's y Get's
    public function setIdventa($idventa){
        $this->idventa = $idventa;
    }
    
    public function setIdproducto($idproducto){
        $this->idproducto = $idproducto;
    }
    
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    
    public function setPreciototal($preciototal){
        $this->preciototal = $preciototal;
    }

    public function setPreciounitario($preciounitario){
        $this->preciounitario = $preciounitario;
    }

    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setIva($iva){
        $this->iva = $iva;
    }
    public function setNuevoIdVenta($nuevoIdVenta){
        $this->nuevoIdVenta = $nuevoIdVenta;
    }
    public function setTotalVenta($totalVenta){
        $this->totalVenta = $totalVenta;
    }

    
    public function getIdventa(){
        return $this->idventa;
    }
    
    public function getIdproducto(){
        return $this->idproducto;
    }
    
    public function getCantidad(){
        return $this->cantidad;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getPreciototal(){
        return $this->preciototal;
    }

    public function getPreciounitario(){
        return $this->preciounitario;
    }

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getIva(){
        return $this->iva;
    }
    public function getNuevoIdVenta(){
        return $this->nuevoIdVenta;
    }
    public function getTotalVenta(){
        return $this->totalVenta;
    }

    //----Métodos------------------------------------------------------------------------------------------------------------

   // Método para conectar a la tabla ventas de la BD
    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{
            mysqli_select_db($this->conexion,"remasa");
        }
    }

        // Método para CONSULTAR TODOS los registros de la tabla
        public function consultaVenta(){
            if (isset($_SESSION['correo'])) {
                //A la variable correo le asignamos el correo del usuario que inicio sesión
                $correo = $_SESSION['correo'];
    
                //1-Se hace la instrucción SQL para obtener el id del usuario, pasando el correo 
                $id = "SELECT idusuario FROM usuario WHERE correo = '$correo'";
    
                //2-Establecer conexión con la BD
                $this->EstableceConexion();   
    
                //3-Ejecutar la instrucción SQL en la conexion (BD)
                $res = mysqli_query($this->conexion,$id);
                if (!$res) {
                    die('Error en la consulta SQL: ' . mysqli_error($this->conexion));
                }
    
                // 4-Obtener el valor de idusuario
                $registro = mysqli_fetch_array($res);
                $idusuario = $registro['idusuario'];
                //echo $idusuario;
    
                $consulta = "SELECT detalleventa.idventa, detalleventa.idproducto, detalleventa.cantidad, detalleventa.descripcion, 
                detalleventa.preciototal AS detalleventa_preciototal, detalleventa.preciounitario,
                venta.preciototal AS venta_preciototal, venta.fecha AS venta_fecha
                FROM detalleventa
                JOIN venta ON detalleventa.idventa = venta.idventa";
                
                
                // 3- Ejecutar la instrucción SQL en la conexión (BD)
                $resultado = mysqli_query($this->conexion, $consulta);
                
                // 4- Cerrar la conexión con la BD
                mysqli_close($this->conexion);
                
                // 5- Retornar los datos de la consulta
                return $resultado;
            } else {
                echo "La variable de sesión 'correo' no está definida.";
            }
        }// consultaVenta

     //Método para REGISTRAR información en la tabla detalleventa-----------------------------------------------------------------
    //-----------------------------------------------------------------------------------------------------------
    public function insertarProductoDetalleVenta() {
        $registrar = "INSERT INTO detalleventa (idventa, idproducto, cantidad, descripcion, preciototal, preciounitario, idusuario) VALUES (".$this->getIdventa().",".$this->getIdproducto().",".$this->getCantidad().",'".$this->getDescripcion()."',".$this->getPreciototal().",".$this->getPreciounitario().",".$this->getIdusuario().")";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
    
        //3-Ejecutar la instrucción SQL en la conexión (BD)
        $result = mysqli_query($this->conexion, $registrar);
    
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
    
        if ($result) {
            echo "Producto registrado exitosamente.<br>";
        } else {
            echo "Error al registrar el producto: " . mysqli_error($this->conexion) . "<br>";
        }
    } //---------------------------------------------------------------------------------------------
    
    
    public function consultarDetalleVenta() {
        // Consulta SQL para obtener detalles del producto por ID
        $sql = "SELECT idproducto, cantidad, descripcion, preciototal, preciounitario FROM detalleventa WHERE idventa = ". $this->getIdventa();
        
        // Establecer conexión con la BD
        $this->EstableceConexion();
        
        // Ejecutar la instrucción SQL en la conexión (BD)
        $result = mysqli_query($this->conexion, $sql);
    
        // Verificar si se obtuvieron resultados
        if ($result->num_rows > 0) {
            // Inicializar un array para almacenar detalles de venta
            $detallesVenta = array();
    
            // Iterar sobre los resultados y almacenar en el array
            while ($row = $result->fetch_assoc()) {
                $producto = array(
                    'idproducto' => $row["idproducto"],
                    'cantidad' => $row["cantidad"],
                    'descripcion' => $row["descripcion"],
                    'preciototal' => $row["preciototal"],
                    'preciounitario' => $row["preciounitario"]
                );
                $detallesVenta[] = $producto;
            }

            // Cerrar la conexión con la BD
            mysqli_close($this->conexion);
    
            return $detallesVenta;
        } else {
            // Cerrar la conexión con la BD
            mysqli_close($this->conexion);
            return null;
        }
    }
    
      // 
  
    
// Método para obtener el último ID de venta
public function consultaUltimoIdVenta() {
    // Consulta SQL para obtener el último ID de venta
    $sql = "SELECT MAX(idventa) AS idventa FROM venta;";

    // Establecer conexión con la BD
    $this->EstableceConexion();

    // Ejecutar la instrucción SQL en la conexión (BD)
    $result = mysqli_query($this->conexion, $sql);

    // Verificar si se obtuvieron resultados
    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Almacenar el último ID de venta utilizando el método setNuevoIdVenta
        $this->setNuevoIdVenta($row['idventa']);
    } else {
        echo "Error al obtener el último ID de venta: " . mysqli_error($this->conexion) . "<br>";
    }
    $this->setIdventa($this->getNuevoIdVenta()+1);
    // Cerrar la conexión con la BD
    mysqli_close($this->conexion);
}
    
// Método para sumar total de la venta
public function sumaTotalVenta() {
    // Consulta SQL para obtener la suma de preciototal
   
    $sql = "SELECT SUM(preciototal) as totalventa FROM detalleventa WHERE idventa = " . $this->getIdventa();

    // Establecer conexión con la BD
    $this->EstableceConexion();

    // Ejecutar la instrucción SQL en la conexión (BD)
    $result = mysqli_query($this->conexion, $sql);

    // Verificar si se obtuvieron resultados
    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Obtener el total de ventas y establecerlo en el objeto Venta
        $totalVentas = $row['totalventa'];
        $this->setTotalVenta($totalVentas);
    } else {
        echo "Error al obtener el total de la venta: " . mysqli_error($this->conexion) . "<br>";
    }

    // Cerrar la conexión con la BD
    mysqli_close($this->conexion);
}

    
      
    

    
}//class