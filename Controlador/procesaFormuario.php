<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "test";
$password = "REMASA";
$dbname = "remasa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['name'];
$correo = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

// Insertar datos en la tabla "comentarios"
$sql = "INSERT INTO comentarios (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente";
} else {
    echo "Error al enviar el comentario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

