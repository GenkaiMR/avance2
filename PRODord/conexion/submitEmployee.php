<?php 
include_once "connection.php";

$connection = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $lastname1 = $_POST['lastname1'];
    $lastname2 = $_POST['lastname2'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $accessType = $_POST['access-type'];

    // Verificar que la contraseña y la confirmación coincidan
    if ($password !== $confirm) {
        echo "Las contraseñas no coinciden.";
    }

    // Preparar la consulta para insertar los datos en la tabla usuario
    $sql = "INSERT INTO usuario (username, clave, rol) VALUES (?, ?, ?)";

    if ($stmt = $connection->prepare($sql)) {
        $stmt->bind_param("sss", $user, $password, $accessType);

        if ($stmt->execute()) {
            // Obtener el ID del nuevo usuario
            $userId = $connection->insert_id;

            // Preparar la consulta para insertar los datos en la tabla empleado
            $sql2 = "INSERT INTO empleado (nombre, primApellido, segApellido, email, usuario, puesto) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt2 = $connection->prepare($sql2);
            $stmt2->bind_param("ssssss", $name, $lastname1, $lastname2, $email, $userId, $position);

            if ($stmt2->execute()) {
                echo "Usuario creado exitosamente.";
            } else {
                echo "Error al crear el empleado: " . $stmt2->error;
            }

        } else {
            echo "Error al crear el usuario: " . $stmt->error;
        }
    }
}
?>
