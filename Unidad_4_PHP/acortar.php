<?php
// ... (código de conexión a la base de datos y verificación de sesión)
include 'conexio.php';

$url_original = $_POST['url'];

if (isset($_POST['url'])) {
    $url_original = $_POST['url'];
    $url_corta = generar_url_corta($url_original);

    // Insertar en la base de datos
    $sql = "INSERT INTO datos(url_original, url_corta) VALUES ('$url_original', '$url_corta')";
    $result = mysqli_query( $conexion,  $sql);


    // Codic de ajuda
    //
    //
    // // ... (ejecutar consulta preparada)
    // // Conexion a la Base De Datos
    // $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "url") or
    // die("Problemas con la conexión");
    //
    // // Consulta MYSQL
    // mysqli_query($conexion, "insert into datos(url_original, url_corta) values 
    //                    ('$url_original','$url_corta')")
    // or die("Problemas en el select" . mysqli_error($conexion));
    //
    // mysqli_close(mysql: $conexion);
    //
    //

    echo "Tu URL corta es: http://tudominio.com/" . $url_corta;
}

// Función para generar la URL corta
function generar_url_corta($url) {
    $hash = md5($url);
    return substr($hash, 0, 8);
}
?>