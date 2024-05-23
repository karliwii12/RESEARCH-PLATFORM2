<?php 
session_start();
if (!isset($_SESSION["Email"]) ) { 
    echo"<script>
    location.href = '../Index.php';
    </script>";
exit(); 
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hola pendejo
    <a href="../php/cerrarSesion.php">Salir</a>
<!-- 
Cierra la sesion -->
</body>
</html>