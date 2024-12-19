<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de Sesión</h1>
        <form action="php/login_usuario_be.php" method="POST">
            <div class="username">
                <input type="text" name="nombre_usuario">
                <label>Nombre de Usuario</label>
            </div>
            <div class="username">
                <input type="password" name="contrasena">
                <label>Contraseña</label>
            </div>
            <div class="recordar"><a href="recuperar_contrasena.php">¿Olvido su Contraseña?</a></div>
            <input type="submit" value="Iniciar Sesión">
            <div class="registrarse">
                Quiero registrarme <a href="registro.php">Registro</a>
            </div>
        </form>
    </div>
</body>
</html>