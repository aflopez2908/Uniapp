<?php

require_once('Conectar.php');
       
    $id = $_POST['id'];
   
    $sql="DELETE FROM registro_becas where id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Beca eliminada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>