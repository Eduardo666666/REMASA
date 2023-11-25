<!DOCTYPE html>
<html>
<head>
    <?php
    include '../Controlador/seguridadLogin.php';
    ?>
	<meta charset="utf-8">
	<title>Proyecto EPA</title>
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
            if(isset($_POST['enviarRegAlum'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/alumnos.php';
                //Generamos una instancia de la clase Alumnos
                $alum = new Alumno();
                //Registramos datos en el objeto
                $alum->setMatricula($_POST['matricula']);
                $alum->setNombre($_POST['nombre']);
                $alum->setApellidos($_POST['apellidos']);
                $alum->setPromedio($_POST['promedio']);
                //Llamada al método para registrar valores
                $alum->registrarAlumno();
                //Mensaje informativo
                echo '<script>alert("Alumno '.$alum->getNombre().' registrado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmAlumnosRegistro.php");</script>';
            }//enviarRegAlum
            
        //Efectuar la operación ACTUALIZAR
            if(isset($_POST['enviarActAlum'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/alumnos.php';
                //Generamos una instancia de la clase Alumnos
                $alum = new Alumno();
                //Cambiar valores para actualizar
                $alum->setMatricula($_POST['matricula']);
                $alum->setNombre($_POST['nombre']);
                $alum->setApellidos($_POST['apellidos']);
                $alum->setPromedio($_POST['promedio']);
                //Llamada al método para actualizar valores
                $alum->actualizaAlumno();
                //Mensaje informativo
                echo '<script>alert("Actualizados datos del Alumno.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmAlumnosBusqueda.php");</script>';
            }//if-enviarActAlum
        
        //Efectuar la operación BUSCAR
            if(isset($_POST['enviarConsultaAlum'])){
                    //Importamos el archivo php de la clase Alumnos
                    include '../Modelo/alumnos.php';
                    //Generamos una instancia de la clase Alumnos
                    $alum = new Alumno();
                    //Cambiar valores para actualizar
                    $alum->setMatricula($_POST['matricula']);
                    //Llamada al método para buscar valores
                    $datos = $alum->consultaAlumno();
                    //Obtener el registro de la busqueda
                    $registro = mysqli_fetch_array($datos);
                    if($registro['nombre']!=''){
                        //Mostrar los datos obtenidos
                    ?>
                    <h1>Busqueda de alumno</h1>
                    <form method="post" onsubmit="return confirm('¿Actualizar datos?');" action="../Controlador/procesaMovimiento.php">
                    <div class="formleyenda"><label>Matrícula:</label></div>
                    <input id="matricula" type="number" name="matricula" value="<?php echo $registro['matricula']?>">
                    <div class="formleyenda"><label>Nombre:</label></div>
                    <input id="nombre" type="text" name="nombre" value="<?php echo $registro['nombre']?>">
                    <div class="formleyenda"><label>Apellidos:</label></div>
                    <input id="apellidos" type="text" name="apellidos" value="<?php echo $registro['apellidos']?>">
                    <div class="formleyenda"><label>Promedio:</label></div>
                    <input id="promedio" type="number" name="promedio" value="<?php echo $registro['promedio']?>">
                    <div>
                        <button id="enviarActAlum" name="enviarActAlum" type="submit">Actualizar</button>
                    </div>
                    </form>
                    <?php
                    } else {
                        //Mensaje informativo
                        echo '<script>alert("Matricula inexistente.");</script>';
                        //Redirigir a página principal
                        echo '<script>window.location.replace("../Formularios/frmAlumnosBusqueda.php");</script>';
                    }//else
                }//if-enviarConsultaAlum
        
        //Efectuar la operación ELIMINAR
            if(isset($_GET['matricula'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/alumnos.php';
                //Generamos una instancia de la clase Alumnos
                $alum = new Alumno();
                //Cambiar valores para actualizar
                $alum->setMatricula($_GET['matricula']);
                //Llamada al método para actualizar valores
                $alum->borrarAlumno();
                //Mensaje informativo
                echo '<script>confirm("Alumno deshabilitado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmAlumnosConsultas.php");</script>';
            }

                                                            /* Profesor */
            //Efectuar la operación REGISTRAR
            if(isset($_POST['enviarNomProf'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/profesores.php';
                //Generamos una instancia de la clase Alumnos
                $Profe = new Profesor();
                //Registramos datos en el objeto
                $Profe->setNomina($_POST['nomina']);
                $Profe->setNombre($_POST['nombre']);
                $Profe->setApellidos($_POST['apellidos']);
                $Profe->setAsignatura($_POST['asignatura']);
                //Llamada al método para registrar valores
                $Profe->registrarprofesor();
                //Mensaje informativo
                echo '<script>alert("Profesor '.$Profe->getNombre().' registrado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmProfesoresAlta.php");</script>';
            }//enviarNomProf

            //Efectuar la operación ACTUALIZAR
            if(isset($_POST['enviarActProf'])){
                //Importamos el archivo php de la clase Alumnos
                include '../Modelo/profesores.php';
                //Generamos una instancia de la clase Alumnos
                $Profe = new Profesor();
                //Cambiar valores para actualizar
                $Profe->setNomina($_POST['nomina']);
                $Profe->setNombre($_POST['nombre']);
                $Profe->setApellidos($_POST['apellidos']);
                $Profe->setAsignatura($_POST['asignatura']);
                //Llamada al método para actualizar valores
                $Profe->actualizaProfesor();
                //Mensaje informativo
                echo '<script>alert("Actualizados datos del Profesor.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmProfesoresBusqueda.php");</script>';
            }//if-enviarActProf

            //Efectuar la operación BUSCAR
            if(isset($_POST['enviarConsultaProf'])){
                //Importamos el archivo php de la clase Profesor
                include '../Modelo/profesores.php';
                //Generamos una instancia de la clase profesores
                $profe = new Profesor();
                //Cambiar valores para actualizar
                $profe->setNomina($_POST['nomina']);
                //Llamada al método para buscar valores
                $datos = $profe->consultaprofesor();
                //Obtener el registro de la busqueda
                $registro = mysqli_fetch_array($datos);
                if($registro['nombre']!=''){
                    //Mostrar los datos obtenidos
                ?>
                <h1>Busqueda de profesor</h1>
                <form method="post" onsubmit="return confirm('¿Actualizar datos?');" action="../Controlador/procesaMovimiento.php">
                <div class="formleyenda"><label>Nomina:</label></div>
                <input id="nomina" type="number" name="nomina" value="<?php echo $registro['nomina']?>">
                <div class="formleyenda"><label>Nombre:</label></div>
                <input id="nombre" type="text" name="nombre" value="<?php echo $registro['nombre']?>">
                <div class="formleyenda"><label>Apellidos:</label></div>
                <input id="apellidos" type="text" name="apellidos" value="<?php echo $registro['apellidos']?>">
                <div class="formleyenda"><label>Promedio:</label></div>
                <input id="asignatura" type="text" name="asignatura" value="<?php echo $registro['asignatura']?>">
                <div>
                    <button id="enviarActProf" name="enviarActProf" type="submit">Actualizar</button>
                </div>
                </form>
                <?php
                } else {
                    //Mensaje informativo
                    echo '<script>alert("Nomina inexistente.");</script>';
                    //Redirigir a página principal
                    echo '<script>window.location.replace("../Formularios/frmProfesoresBusqueda.php");</script>';
                }//else
            }//if-enviarConsultaProf

            //Efectuar la operación ELIMINAR
            if(isset($_GET['nomina'])){
                //Importamos el archivo php de la clase Profesores
                include '../Modelo/profesores.php';
                //Generamos una instancia de la clase Profesores
                $profe = new Profesor();
                //Cambiar valores para actualizar
                $profe->setNomina($_GET['nomina']);
                //Llamada al método para actualizar valores
                $profe->borrarprofesor();
                //Mensaje informativo
                echo '<script>confirm("Profesor deshabilitado.");</script>';
                //Dirigir a la página principal
                echo '<script>window.location.replace("../Formularios/frmProfesoresReporte.php");</script>';
            }

        ?>
    </section>
</body>
</html>