<?php
session_start();
if (!isset($_SESSION["Email"])) {
    echo "<script>
    location.href = '../Index.php';
    </script>";
    exit();
}
include ('../php/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star</title>
    <link rel="icon" href="../img/Logo.jpeg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleStar.css">
    <link rel="stylesheet" href="path/to/your/styles.css">

</head>
<style>
    .dropdown-menu-large {
        width: 100%;
    }

    .vis:hover {
        transform: scale(1.2);
        border: solid 2px #A4F1CF;

    }
</style>

<body style="background: #E8F7EF ;">
    <header class="fixed-top p-1 mb-3 border-bottom" style="background-color: #fff;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Oreja">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <a class="navbar-brand" href="#">
                                        <img src="../img/Logo.jpeg" alt="logo" width="40px"
                                            style="border-radius: 100%;">
                                    </a>
                                </font>
                            </font>
                        </a>
                    </li>
                </ul>
                <form action="../php/process.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" name="buscar" placeholder="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </div>
                </form>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/FondoPreliminar.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li>
                            <font style="vertical-align: inherit;">
                                <center><a href="../php/cerrarSesion.php" class="btn btn-info">Salir</a></center>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <br><br><br>
        <div class="row">
            <div class="col-lg-3" style=" background: #F3E8F7  ; ">
                <aside id="sidebar" class="sidebar">
                    <!-- <div class="col-lg-3" id="3" style=" background: #F3E8F7  ;"> -->
                    <div class="container" id="contenedor" style="width: 90%;">
                        <br>
                        <center>
                            <h2>Los 5 Articulos Más Visitados</h2>
                        </center>
                        <br>
                        <?php $sql = "SELECT id, Autor,  Titulo, Visitas FROM repositorio ORDER BY Visitas DESC";
                        $result = mysqli_query($conexion, $sql);

                        if ($result->num_rows > 0) { ?>
                            <div class="row" style="background: #F2DDF9 ; border-radius: 8px; padding: 5px;">
                                <div class="col-md-6">
                                    <b>
                                        <h3> Titulo</h3>
                                    </b>
                                </div>
                                <div class="col-md-6">
                                    <b>
                                        <h3> Visitas</h3>
                                    </b>
                                </div>

                            </div><br>
                            <?PHP
                            $cont = 0;
                            $limite = 0;
                            while ($row = $result->fetch_assoc()) {

                                if ($cont == 0) {
                                    $cont++; ?>
                                    <div class="vis">
                                        <div class="row d-flex justify-content-center align-items-center"
                                            style="background: #C2F9FD;  border: solid 1px #FCD0CB ; border-radius: 8px; padding: 5px;">
                                            <div class="col-md-10">
                                                <a href="../php/visitas.php?id=<?php echo $row['id'] ?>" target="_blank"
                                                    style="text-decoration: none; color: #000; font-size: 12px;">
                                                    <b><?php echo $row['Titulo'] ?></b> </a>
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 12px;"><?php echo $row['Visitas'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                <?php } else {
                                    $cont = 0; ?>
                                    <div class="vis">
                                        <div class="row d-flex justify-content-center align-items-center"
                                            style="font-size: 12px; background: lightgray; border: solid 1px #0E6CEC ; border-radius: 8px; padding: 5px;">
                                            <div class="col-md-10">
                                                <a href="../php/visitas.php?id=<?php echo $row['id'] ?>"
                                                    style="text-decoration: none; color: #000;" target="_blank">
                                                    <b><?php echo $row['Titulo'] ?></b> </a>
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 12px;"><?php echo $row['Visitas'] ?></p>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                <?php }
                                $limite++;
                                if ($limite >= 5) {
                                    break;
                                }
                            }
                        } else {
                            echo "No se encontraron resultados.";
                        } ?>
                    </div>
                </aside><!-- End Sidebar-->
            </div>
            <div class="col-lg-9">
                <div class="container" style="width: 90%;">
                    <?php $conectar = "SELECT * FROM repositorio";
                    $respuesta = mysqli_query($conexion, $conectar);

                    if ($respuesta && mysqli_num_rows($respuesta) > 0) {
                        $contero = 0;
                        while ($fila = mysqli_fetch_assoc($respuesta)) {
                            if ($contero == 0) {
                                ?>
                                <div class="row d-flex justify-content-center align-items-center"
                                    style="padding: 10px; background: #BEF4F8; border-radius: 15px; border: solid 1px #000;">
                                    <div class="col-md-4">
                                        <b> <a href="../php/visitas.php?id=<?php echo $fila['id'] ?>" target="_blank"
                                                style="color: #000; ">
                                                <?php echo ucwords(strtolower($fila['Titulo'])); ?></a></b>
                                    </div>
                                    <div class="col-md-5" style="font-size: 12px;">
                                        <i> <?php echo $fila['Descripcion']; ?></i>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="width: 100%; font-size: 13px;"><b>Autor/es: </b> <br> <?php echo ucwords(strtolower($fila['Autor'])); ?></p>
                                    </div>
                                </div><br>
                                <?php
                                $contero++;
                            } else {
                                ?>
                                <div class="row d-flex justify-content-center align-items-center"
                                    style="padding: 10px; border-radius: 15px; background: lightgray; border: solid 1px #000;">
                                    <div class="col-md-4">
                                        <b> <a href="../php/visitas.php?id=<?php echo $fila['id'] ?>" target="_blank"
                                                style="color: #000;">
                                                <?php echo ucwords(strtolower($fila['Titulo'])); ?></a></b>
                                    </div>
                                    <div class="col-md-5" style="font-size: 12px;">
                                        <i> <?php echo $fila['Descripcion']; ?></i>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="width: 100%; font-size: 13px;"><b>Autor/es: </b> <br><?php echo ucwords(strtolower($fila['Autor'])); ?></p>
                                    </div>
                                </div> <br>
                                <?php
                                $contero = 0;
                            }
                        }
                    } else {
                        echo "No se encontraron resultados.";
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php $conexion->close(); ?>
    </main>
    <footer></footer>

    </div>
    <!-- 
Cierra la sesion -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>