<?php

session_start();
//print_r($_POST);
//variables que pasamos del formulario de Login.php
$correo=$_POST['correo'];
$password=$_POST['contrasena'];


//echo "Se reciben los siguientes datos: <br>";
//echo "Usuario recibido: ".$usuario."<br>";
//echo "Contraseña recibida: ".$password."<br>";

//Validar si están vacios
if($correo=='' || $password==''){
    //Dirigir a la página principal
    echo '<script>alert("Algun campo está vacío.")</script>';
    echo '<script>window.location.replace("../frmlogin.php");</script>';
}else {
    try{
        include_once '../Modelo/usuarios.php';
        $usr = new Usuario();
        $usr->setCorreo($_POST['correo']);
        $usr->setContrasena($_POST['contrasena']);
        $datos = $usr->buscarUsuario();
        //Obtener el registro de la busqueda
        $registro = mysqli_fetch_array($datos);
        //Validar si los datos de la BD son vacios
        if($registro['correo']=='' || $registro['contrasena']==''){
            echo '<script>alert("Escriba usuario y contraseña válidos. Intente de nuevo.")</script>';
            echo '<script>location.href="../frmlogin.php"</script>';
        }
        else{
            //Valida contraseña
            if($password == $registro['contrasena']) {
                $_SESSION['valido']=1;
                //Aquí va el enlace a la página principal despues del login
                echo '<script>location.href="../principal.php"</script>';

            }else{
                echo '<script>alert("El usuario o contraseña son incorrectos. Intente de nuevo.")</script>';
                //echo '<script>location.href="../Formularios/frmlogin.php"</script>';
            }
        }//else


    }catch(Exception $ex){
        echo 'Error: '.$ex->getMessage();
    }

}//validar