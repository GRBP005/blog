<?php

session_start();
include 'conexion_be.php';

$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' 
                    and contrasena = '$contrasena' ");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $nombre_usuario;
    header("location: ../index.php");
    exit();
}else {
    echo '
    <script>
            alert("Usuario No Existe, Registrate o Verifica tus datos");
            window.location = "../InicioSesion.php";
        </script>
        ';
        exit();
}

?>