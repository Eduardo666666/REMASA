<?php

//Esta clase almacenará la información proveniente del formulario, para posteriormente conectar a la BD y realizar la operación CRUD (agregar-C-, consultar-R-, actualizar-U- y eliminar-D)correspondiente

class Usuario{
    //Atributos(igual que los campos de la tabla)
    private $correo;
    private $contrasena;
    private $nombre;
    private $apellido;
    private $estatus;
    //Atributo de conectividad con la BD
    private $conexion;
    
    //Métodos
    //-Constructor
    public function _construct(){
        $this->correo="none";
        $this->contrasena="none";
        $this->nombre="none";
        $this->apellido="none";
        $this->estatus=1;
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
    
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    
    public function setEstatus($estatus){
        $this->estatus = $estatus;
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
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function getEstatus(){
        return $this->estatus;
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
    
    //Método para REGISTRAR información en la tabla alumnos
    public function registrarUsuario(){
        //1-Definir la instruccion SQL de inserción

        $registrar = "insert into vendedor (apellido, nombre, correo, contrasena, estatus) values (".$this->getApellido().",'".$this->getNombre()."','".$this->getCorreo()."',".$this->getContrasena().",1)";
        //echo $registrar."<br>";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        mysqli_query($this->conexion,$registrar);
        
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
        
        //5-Mensaje informativo
        echo "Vendedor registrado.<br>";
    }//registrarAlumno
    
    //Método para ACTUALIZAR información de la tabla alumnos
    public function actualizarUsuario(){
        //Evaluar que existan datos por actualizar
        if($this->getMatricula() != 0){
            //1-Definir la instruccion SQL de actualización
            //update alumnos set nombre='María', apellidos='Gonzalez', promedio=9.3 where matricula=12345;
            $actualizar = "update alumnos set nombre='".$this->getNombre()."', apellidos='".$this->getApellidos()."', promedio=".$this->getPromedio()." where matricula=".$this->getMatricula().";";
            //echo $actualizar."<br>";

            //2-Establecer conexión con la BD
            $this->EstableceConexion();

            //3-Ejecutar la instrucción SQL en la conexion (BD)
            mysqli_query($this->conexion,$actualizar);

            //4-Cierro la conexión con la BD
            mysqli_close($this->conexion);

            //5-Mensaje informativo
            echo "Alumno modificado.";
        }else {
            echo "Sin definir matricula por actualizar.";
        }
        
    }//actualizaAlumno
    

    //---------------
    //Método para BUSCAR usuario por cuenta y contraseña
    public function buscarUsuario(){
        //1-Definir la instruccion SQL de consulta
        $consulta = "select apellido, nombre, correo, contrasena from vendedor where estatus=1 and correo='".$this->getCorreo()."' and contrasena = '".$this->getContrasena()."';";
        //echo $consulta."<br>";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($this->conexion,$consulta);
        
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
        
        //5-Retorna los datos de la consulta
        return $resultado;
    }//consultaVendedor
    
    //Método para CONSULTAR TODOS los registros de la tabla
    public function consultarUsuarios(){
        //1-Definir la instruccion SQL de consulta
        //select * from alumnos order by apellidos;
        $consulta = "select matricula, nombre, apellidos, promedio from alumnos where estatus = 1 order by apellidos";
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();
        
        //3-Ejecutar la instrucción SQL en la conexion (BD)
        $resultado = mysqli_query($this->conexion,$consulta);
        
        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);
        
        //5-Retorna los datos de la consulta
        return $resultado;
    }//consultaAlumnos
    
    //Método para BORRAR (cambiar status) información de la tabla alumnos
    public function borrarUsuarios(){
        //1-Definir la instruccion SQL de consulta
        //update alumnos set estatus=2 where matricula=12345;
        $borrar = "update alumnos set estatus = 2 where matricula=".$this->getMatricula().";";
        //print_r($borrar);
        
        //2-Establecer conexión con la BD
        $this->EstableceConexion();

        //3-Ejecutar la instrucción SQL en la conexion (BD)
        mysqli_query($this->conexion,$borrar);

        //4-Cierro la conexión con la BD
        mysqli_close($this->conexion);

        //5-Mensaje informativo
        echo "Alumno dado de baja.";
    }//borrarAlumno
    
}//class
