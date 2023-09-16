<?php

require_once('Conectar.php');
       
    $id = $_POST['id'];
   
    $sql="DELETE FROM registro_posgrado where id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Posgrado eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>