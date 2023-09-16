<?php

require_once('Conectar.php');
       
    $id = $_POST['id'];
   
    $sql="DELETE FROM registro_pregrado where id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pregrado eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>