<?php
include 'conexio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM datos WHERE usuario = '$username'";
    $result = mysqli_query( $conexion, $sql);
    

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $user['contraseña'])) {
            header(header: "Location: $url_original");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No se encontró un usuario con esa contraseña.";
    }
    $conn->close();

    
}
?>