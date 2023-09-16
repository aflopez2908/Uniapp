<?php

// incluir el archivo conectar.php
require_once('Conectar.php');


    $id = $_POST['id'];    
    $universidadId= $_POST['universidad_id'];
    $programaAplicado= $_POST['programa_aplicado'];
    $requisitos= $_POST['requisitos'];
    $precioBruto= $_POST['precio_bruto'];
    $porcentajeBeca= $_POST['porcentaje_beca'];
    $pagoTotal= $_POST['pago_total'];

    

    $sql = "INSERT INTO registro_becas (id,universidad_id,programa_aplicado,requisitos,precio_bruto,porcentaje_beca,pago_total) VALUES ('$id','$universidadId','$programaAplicado','$requisitos','$precioBruto','$porcentajeBeca','$pagoTotal')";

    if ($conn->query($sql) === TRUE) {
        echo "Beca agregada con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>