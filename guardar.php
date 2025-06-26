<?php
// Conexión con la base de datos
$conexion = new mysqli("20.59.121.124", "root", "1234", "prueba");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$email = $_POST['email'];

// Insertar datos en la tabla 'alumnos'
$sql = "INSERT INTO alumnos (nombre, apellido, email, edad)
        VALUES ('$nombre', '$apellido', '$email', $edad)";

if ($conexion->query($sql) === TRUE) {
    echo "Alumno registrado exitosamente.";
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>