<?php

// incluir el archivo conectar.php
require_once('Conectar.php');


    $id = $_POST['id'];    
    $universidadId = $_POST['universidad_id'];
    $ciudadId = $_POST['ciudad_id'];
    $precio = $_POST['precio'];
    $pensum = $_POST['pensum'];
    $nombrePosgrado = $_POST['nombre'];
    $requisitos = $_POST['requisitos'];

    

    $sql = "INSERT INTO registro_posgrado (id,universidad_id,ciudad_id,precio,pensum,nombre,requisitos) VALUES ('$id','$universidadId','$ciudadId','$precio','$pensum','$nombrePosgrado','$requisitos')";

    if ($conn->query($sql) === TRUE) {
        echo "Posgrado agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>