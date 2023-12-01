<?php


class Venta {
    // Atributos (igual que los campos de la tabla)
    private $idventa;
    private $preciototal;
    private $fecha;
 
    // Atributo de conectividad con la BD
    private $conexion;
    
    // Métodos
    // - Constructor
    public function __construct(){
        $this->idventa = 1;
        $this->preciototal = 1;
        $this->fecha = date("Y-m-d H:i:s");
    }
    
    // Set's y Get's
    public function setIdventa($idventa){
        $this->idventa = $idventa;
    }
    
    public function setPreciototal($preciototal){
        $this->preciototal = $preciototal;
    }
    
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    
    public function getIdventa(){
        return $this->idventa;
    }
    
    public function getPreciototal(){
        return $this->preciototal;
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    // Método para conectar a la tabla ventas de la BD
    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{
            mysqli_select_db($this->conexion,"remasa");
        }
    }// EstableceConexion

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
}
?>
