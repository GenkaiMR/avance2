<?php
function connection() : mysqli {
    $db = mysqli_connect("localhost", "root", "", "prueba");
    
    // Verificar si la conexión fue exitosa
    if (!$db) {
        die("Connection Fail: " . mysqli_connect_error());
    }

    return $db; // Retorna la conexión
}
?>
