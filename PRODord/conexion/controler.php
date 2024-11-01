<?php
include 'connection.php'; // Incluye el archivo de conexión

session_start();
// 

// Establecer la conexión
$connection = connection(); // Llama a la función de conexión

if (!empty($_POST["login"])) {
    // Verificar si los campos están vacíos
    if (empty($_POST["user"]) || empty($_POST["password"])) {
        echo "<div>Please fill all the fields.</div>";
    } else {
        $user = $_POST["user"];
        $password = $_POST["password"];

        // Asegúrate de que $conexion esté definida y sea válida
        if ($connection) {
            $stmt = $connection->prepare("SELECT * FROM usuario WHERE username = ? AND clave = ?");
            if (!$stmt) {
                echo "Error in the preparation of the consultation: " . $connection->error;
                exit();
            }
            $stmt->bind_param("ss", $user, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            // Verificar si se encontró un usuario
            if ($data = $result->fetch_object()) {
                $_SESSION['username'] = $data->username;
                // Verificar el rol del usuario
                if ($data->rol == 2 || $data->rol == 3) {
                    header("Location: Administrador/home.php");
                } elseif ($data->rol == 1) {
                    header("Location: Basico/home.php");
                } else {
                    echo "<div>Role not found</div>";
                }
            } else {
                echo "<div>User or password are incorrect</div>";
            }
        } else {
            echo "<div>Error: Database connection  failed</div>";
        }
    }
}
?>
