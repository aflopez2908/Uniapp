<?php

require_once('Conectar.php');
    $id = $_POST['id'];    
    $universidadId = $_POST['universidad_id'];
    $ciudadId = $_POST['ciudad_id'];
    $descripcion_Pregrado = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $pensum = $_POST['pensum'];
    $nombrePregrado = $_POST['nombre'];

    $sql = "UPDATE registro_pregrado SET universidad_id='$universidadId',ciudad_id='$ciudadId',descripcion='$descripcion_Pregrado',precio='$precio',pensum='$pensum',nombre='$nombrePregrado' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pregrado actualizado con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>