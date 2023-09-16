<?php

require_once('Conectar.php');
    $id = $_POST['id'];    
    $universidadId= $_POST['universidad_id'];
    $programaAplicado= $_POST['programa_aplicado'];
    $requisitos= $_POST['requisitos'];
    $precioBruto= $_POST['precio_bruto'];
    $porcentajeBeca= $_POST['porcentaje_beca'];
    $pagoTotal= $_POST['pago_total'];

    $sql = "UPDATE registro_becas SET universidad_id='$universidadId',programa_aplicado='$programaAplicado',requisitos='$requisitos',precio_bruto='$precioBruto',porcentaje_beca='$porcentajeBeca',pago_total='$pagoTotal' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Beca actualizada con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   

?>