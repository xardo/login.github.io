<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$db = "login";

$conn = new mysqli($server, $usuario, $contraseña, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['user'];
$contra = $_POST['contra'];

$sql = "SELECT * FROM datos WHERE user='$user' AND contra='$contra'";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['usuario'] = $user;
        header("Location: inicio.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    echo "Error executing query: " . $conn->error;
}

$conn->close();
?>