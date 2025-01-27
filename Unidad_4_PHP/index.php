<?php
// Incluir el archivo de conexión
include 'conexio.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acortador de URLs</title>
</head>
<body>
    <h1>Acortar URL</h1>
    <form action="acortar.php" method="POST">
        <label for="url">Ingresa la URL larga:</label>
        <input type="url" id="url" name="url" required>
        <button type="submit">Acortar</button>
    </form>
    <br>
        <form action="registrar.html" method="post">
            <button name="accion" value="insertar">Registrar</button>
        </form>
        <br>
        <form action="login.html" method="post">
        <button name="accion" value="login">Login</button>
        </form>
        <h2>URLs Acortadas</h2>
        <ul>
            <?php
            // Mostrar las URLs acortadas almacenadas en la base de datos
            $sql = "SELECT url_original, url_corta FROM datos";
            $result = mysqli_query($conexion, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li><a href='redireccion.php?corta=" . $row['url_corta'] . "'>http://tudominio.com/" . $row['url_corta'] . "</a> - " . $row['url_original'] . "</li>";
                }
            } else {
                echo "<li>No hay URLs acortadas.</li>";
            }
            ?>
        </ul>
</body>
</html>
