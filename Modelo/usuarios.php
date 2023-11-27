<?php


class Usuario{
    //Atributos(igual que los campos de la tabla)
    private $correo;
    private $contrasena;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $codigopostal;
    private $direccion;
    private $ciudad;
    private $estado;
    private $tipousuario;
    //Atributo de conectividad con la BD
    private $conexion;
    
    //Métodos
    //-Constructor
    public function _construct(){
        $this->correo="none";
        $this->contrasena="none";
        $this->nombre="none";
        $this->apellidos="none";
        $this->telefono=1;
        $this->codigopostal=1;
        $this->direccion="none";
        $this->ciudad="none";
        $this->estado="none";
        $this->tipodeusuario="none";
    }
    
    //Set's y Get's
    public function setCorreo($correo){
        $this->correo = $correo;
    }
    
    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setCodigopostal($codigopostal){
        $this->codigopostal = $codigopostal;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function setTipodeusuario($tipodeusuario){
        $this->tipodeusuario = $tipodeusuario;
    }

    
    public function getCorreo(){
        return $this->correo;
    }
    
    public function getContrasena(){
        return $this->contrasena;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellidos(){
        return $this->apellidos;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }

    public function getCodigopostal(){
        return $this->codigopostal;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getTipodeusuario(){
        return $this->tipodeusuario;
    }
    
    //Método para conectar a la tabla alumnos de la BD
    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1:3306','test','REMASA');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{
            mysqli_select_db($this->conexion,"remasa");
        }
    }//EstableceConexion
    
    //---------------
    //Método para BUSCAR usuario por cuenta y contraseña
    public function buscarUsuario(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select apellidos, ciudad, codigopostal, contrasena, correo, direccion, estado, nombre, telefono from usuario where tipousuario='cliente' and correo='".$this->getCorreo()."' and contrasena = '".$this->getContrasena()."';";
        //echo $consulta."<br>";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($this->conexion,$consulta);
        
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
        
        //5-Retorna los datos de la consulta
        return $resultado;
    }//consultaUsuario


    //Método para REGISTRAR información en la tabla usuario
    public function registrarUsuario(){
        //1-Definir la instruccion SQL de inserción
        $registrar = "insert into usuario (apellidos, ciudad, codigopostal, contrasena, correo, direccion, estado, nombre, telefono, tipousuario) values ('".$this->getApellidos()."','".$this->getCiudad()."',".$this->getCodigopostal().",'".$this->getContrasena()."','".$this->getCorreo()."','".$this->getDireccion()."','".$this->getEstado()."','".$this->getNombre()."',".$this->getTelefono().",'cliente')";
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
    
}//class
