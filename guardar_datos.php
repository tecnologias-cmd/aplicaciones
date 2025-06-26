<?php

$conexion = new mysqli("20.59.121.124", "root", "1234", "prueba");

if ($SERVER["REQUEST_METHOD"] == "POST")
{
	$nombre = $POST['nombre'];
	$apellido = $POST['apellido'];
	$correo = $POST['correo'];
	$edad = $POST['edad'];

	$sql "INSERT INTO alumnos (nombre, apellido, correo, edad)
	VALUES ('$nombre', '$apellido', '$correo', '$edad')";

	if ($conexion->query($sql) === TRUE)
	{
	echo "Datos guardados correctamente.";

	}else {
	echo "Error: " . $sql . "<br>" . $conexion->error;
	
	}
	$conexion->close();
}
	?>


