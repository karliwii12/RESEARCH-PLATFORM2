<?php
include ('../php/conexion.php');
$buscar = "";
if (isset($_POST['buscar'])) {

    $variable = $_POST['buscar'];
    $variable=ucwords(strtolower($variable));
  
    $query = "SELECT * FROM repositorio WHERE  LOWER(Titulo) LIKE '%$variable%'";
    $respuesta = mysqli_query($conexion, $query);
    if ($respuesta && mysqli_num_rows($respuesta) > 0) {
        if ($respuesta && mysqli_num_rows($respuesta) > 0) {
            $id = mysqli_fetch_array($respuesta);
            $valor = $id['Titulo'];
            echo "<script>
        location.href = '../pag/Star_b.php?buscar=$variable&a=t';
        </script>";
            $conexion->close();
            exit();
        }
    } else {
        $autor = "SELECT * FROM repositorio WHERE LOWER(Autor) LIKE '%$variable%'";
        $respuesta_Autor = mysqli_query($conexion, $autor);
        if ($respuesta_Autor && mysqli_num_rows($respuesta_Autor) > 0) {
            $id = mysqli_fetch_array($respuesta_Autor);
            $v_a = $id['Autor'];
            echo "<script>
        location.href = '../pag/Star_b.php?buscar=$variable&a=a';
        </script>";
            $conexion->close();
            exit();
        
        } else {
            echo "<script>
            alert('$variable, no esta disponible');
    location.href = '../pag/Star.php';
    </script>";
            exit();
        }
    }
}else {
    echo "<script>
location.href = '../pag/Star.php';
</script>";
    exit();
}
