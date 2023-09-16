<?php

// incluir el archivo conectar.php
require_once('Conectar.php');


    $id = $_POST['id'];    
    $universidadId = $_POST['universidad_id'];
    $ciudadId = $_POST['ciudad_id'];
    $descripcion_Pregrado = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $pensum = $_POST['pensum'];
    $nombrePregrado = $_POST['nombre'];

    

    $sql = "INSERT INTO registro_pregrado (id,universidad_id,ciudad_id,descripcion,precio,pensum,nombre)
    VALUES ('$id','$universidadId', '$ciudadId', '$descripcion_Pregrado', '$precio','$pensum','$nombrePregrado')";

    if ($conn->query($sql) === TRUE) {
        echo "Pregrado agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>