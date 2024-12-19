<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por Favor debes Iniciar Sesión");
            window.location = "InicioSesion.php";
        </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Hola Mundo...</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>