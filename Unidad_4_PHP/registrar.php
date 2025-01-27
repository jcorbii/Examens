<html>
<html>

<head>
  <title>Registrar</title>
</head>

<body>
<?php
include 'conexio.php';

$usuario = $_REQUEST['usuario'];
$contrasenya = $_REQUEST['contrasenya'];

  // Insertar en la base de datos
  $passwordhash =  password_hash($contrasenya, PASSWORD_BCRYPT);
  $sql = "insert into  datos(usuario,contraseña) values ('$usuario','$passwordhash')";
  $result = mysqli_query( $conexion, $sql);
  
  echo "El usuario fue registrado.";
  ?>
</body>

</html>