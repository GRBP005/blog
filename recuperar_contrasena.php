<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <h1>Recuperar Contraseña</h1>
        <form action="php/iniciar_recupero.php" method="POST">
            <div class="username">
                <input type="mail" name="correo">
                <label>Correo Electronico</label>
            </div>
            <input type="submit" value="Recuperar">
            <div class="registrarse">
                ¿No tienes cuenta? <a href="registro.php">Registro</a>
            </div>
        </form>
    </div>
</body>
</html>