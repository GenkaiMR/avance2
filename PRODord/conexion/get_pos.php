<?php
include_once 'connection.php';

$connection = connection();

// Consulta para obtener los puestos
$sql = "SELECT clave, nombre FROM puesto";
$resultado = $connection->query($sql);

    echo '<option value="" > Choose a position  </option>';
if ($resultado->num_rows > 0) {
    // Agregar una opción por cada puesto
    while ($fila = $resultado->fetch_assoc()) {
        echo '<option value="' . $fila['clave'] . '">' . $fila['nombre'] . '</option>';
    }
} else {
    echo '<option value="">Data not found</option>';
}

?>
