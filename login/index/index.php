<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="login">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            
            <input placeholder=" ingrese su id " type="text" name="txtId" id="txtId" required><br>

            <input  placeholder=" ingrese su usuario " type="text" name="txtContra" id="txtContra" required><br>

            <input placeholder=" ingrese su Contraseña "type="password" name="txtUser" id="txtUser" required><br>

            <input placeholder=" ingrese su Edad "type="number" name="txtEdad" id="txtEdad" required min="1" max="120"><br>

            <br>
            <input type="submit" value="Registrarse">
            <br>
            <br>

            <a href="login.php">ya tengo usuario</a>
        </form>
        </div>
</body>
</html>
