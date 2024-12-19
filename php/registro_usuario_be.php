<?php

include 'conexion_be.php';

// Capturar datos del formulario
$correo = $_POST['correo'];
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

// Verificar si las contraseñas coinciden
if ($contrasena !== $confirmar_contrasena) {
    echo '
        <script>
            alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
            window.location = "../registro.php";
        </script>
    ';
    exit();
}

// Verificar si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro.");
            window.location = "../registro.php";
        </script>
    ';
    exit();
}

// Verificar si el nombre de usuario ya está registrado
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro.");
            window.location = "../registro.php";
        </script>
    ';
    exit();
}


// Insertar datos en la base de datos
$query = "INSERT INTO usuarios(correo, nombre_usuario, contrasena) 
          VALUES('$correo', '$nombre_usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario Registrado Exitosamente");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("No se ha podido registrar al usuario. Intenta otra vez.");
            window.location = "../registro.php";
        </script>
    ';
}

// Cerrar conexión
mysqli_close($conexion);
?>
