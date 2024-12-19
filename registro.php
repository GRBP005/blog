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
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.querySelector("form");
            const password = document.querySelector('input[name="contrasena"]');
            const confirmPassword = document.querySelector('input[name="confirmar_contrasena"]');

            form.addEventListener("submit", (event) => {
                if (password.value !== confirmPassword.value) {
                    event.preventDefault(); // Evita que el formulario se envíe
                    alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
                }
            });
        });
    </script>
</head>
<body>
    <div class="formulario">
        <h1>Registrate</h1>
        <?php
            if (isset($_GET['error'])) {
                echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
            }
        ?>
        <form action="php/registro_usuario_be.php" method="POST">
            <div class="username">
                <input type="text" name="correo" required>
                <label>Correo Electrónico</label>
            </div>
            <div class="username">
                <input type="text" name="nombre_usuario" required>
                <label>Nombre de Usuario</label>
            </div>
            <div class="username">
                <input type="password" name="contrasena" required>
                <label>Contraseña</label>
            </div>
            <div class="username">
                <input type="password" name="confirmar_contrasena" required>
                <label>Confirmar Contraseña</label>
            </div>
            <input type="submit" value="Registrarse">
            <div class="registrarse">
                Ya tengo cuenta <a href="InicioSesion.php">Inicio de Sesión</a>
            </div>
        </form>
    </div>
</body>
</html>
