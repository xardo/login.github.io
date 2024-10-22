<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $db = "login";

    $conexion = mysqli_connect($server, $usuario, $contraseña, $db) or die ("Error en la conexión");

    $id = $_POST['txtId'];
    $user = $_POST['txtUser'];
    $contra = $_POST['txtContra'];
    $edad = $_POST['txtEdad'];

    $insertar = "INSERT into datos values ('$id', '$contra', '$user', '$edad')";

    $resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar registros");

    mysqli_close($conexion);
    echo "Datos insertados correctamente" ; 
    
    
    ?>
</body>
</html>