<?php


class Venta{
    //Atributos(igual que los campos de la tabla)
    private $idventa;
    private $idproducto;
    private $cantidad;
    private $descripcion;
    private $preciototal;
    private $preciounitario;
    private $idusuario;
    private $fecha;
    private $iva;
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

    //----Métodos------------------------------------------------------------------------------------------------------------

    //Método para conectar a la tabla venta y detalleventa de la BD
    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{
            mysqli_select_db($this->conexion,"remasa");
        }
    }//EstableceConexion

     //Método para REGISTRAR información en la tabla detalleventa-----------------------------------------------------------------
     public function insertarProductoDetalleVenta(){
        //1-Definir la instruccion SQL de inserción
        $this->setIdventa(1);
        $registrar = "insert into detalleventa (idventa,idProducto, cantidad, descripcion, preciototal, preciounitario, idusuario) values ('".$this->getIdventa()."','".$this->getIdproducto()."',".$this->getCantidad().",'".$this->getDescripcion()."','".$this->getPreciototal()."','".$this->getPreciounitario()."','".$this->getIdusuario()."','detalleventa')";
        //echo $registrar."<br>";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        mysqli_query($this->conexion,$registrar);
        
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
        
        //5-Mensaje informativo
        echo "Usuario registrado.<br>";
    }//registrarUsuario
    public function consultarDetalleVenta() {
        
    
        // Consulta SQL para obtener detalles del producto por ID
        $sql = "SELECT  idproducto, cantidad, descripcion, preciototal, preciounitario,  idusuario FROM detalleventa WHERE idventa = 15"/*. $this->getIdventa()*/;
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        $result = mysqli_query($this->conexion,$sql);
    
        // Verificar si se obtuvieron resultados
        /*if ($result->num_rows > 0) {
            // Obtener los detalles del producto
            $row = $result->fetch_assoc();
    
            // Crear un array con los detalles del producto
            $producto = array(
                'id' => $row["id"],
                'nombre' => $row["nombre"],
                'descripcion' => $row["descripcion"],
                'medida' => $row["medida"],
                'precio' => $row["precio"],
                'cantidad' => 1, // Puedes establecer la cantidad predeterminada
            );
    
             
            //4-Cierro la conexión con la BD
            mysqli_close($this->conexion);
            return $producto;
        } else {
            //4-Cierro la conexión con la BD
            mysqli_close($this->conexion);
            return null;
        }*/
        return $result;
    }

}//class