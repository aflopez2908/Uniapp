<?php
$servername = "localhost"; // Nombre del servidor de la base de datos (puede variar según tu configuración)
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "uniappv2"; // Nombre de la base de datos a la que te quieres conectar

// Establece la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos \n";
?>