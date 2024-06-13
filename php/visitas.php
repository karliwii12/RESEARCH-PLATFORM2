<?php
include ('../php/conexion.php');
$buscar = "";
if (isset($_GET['id'])) {

    $variable = $_GET['id'];
    $query = "SELECT * FROM repositorio WHERE id = '$variable'";
    $respuesta = mysqli_query($conexion, $query);
    if ($respuesta && mysqli_num_rows($respuesta) > 0) {
        $id = mysqli_fetch_array($respuesta);
        $numero = 1+$id["Visitas"];
        $actualizar="UPDATE `repositorio` SET `Visitas`='$numero' WHERE id='$variable'";
       $con= mysqli_query($conexion, $actualizar);
       if ($con) {
        $url=$id['Url'];
        echo "<script>
        location.href = '$url';
        </script>";
            exit();
       }
    }
} else {
    echo "<script>
location.href = '../pag/Star.php';
</script>";
    exit();
}
