<?php

require_once('Conectar.php');

    $id = $_POST['id'];    
    $universidadId = $_POST['universidad_id'];
    $ciudadId = $_POST['ciudad_id'];
    $precio = $_POST['precio'];
    $pensum = $_POST['pensum'];
    $nombrePosgrado = $_POST['nombre'];
    $requisitos = $_POST['requisitos'];

    $sql = "UPDATE registro_posgrado SET universidad_id='$universidadId',ciudad_id='$ciudadId',precio='$precio',pensum='$pensum',nombre='$nombrePosgrado',requisitos='$requisitos' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Posgrado actualizado con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>