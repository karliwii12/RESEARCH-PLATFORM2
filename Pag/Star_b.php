<?php
session_start();
if (!isset($_SESSION["Email"])) {
    echo "<script>
    location.href = '../Index.php';
    </script>";
    exit();
}
if (!isset($_GET["buscar"])) {
    echo "<script>
    alert('ups, Ocurrio un eror');
location.href = 'Star.php';
</script>";
    exit();
}
$value = $_GET["buscar"];
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

</head>

<body style="background: #E8F7EF ;">
    <header id="header" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a class="navbar-brand" href="Star.php"><img src="../img/Logo.jpeg" alt="logo" width="15%"
                                style="border-radius: 100%;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-md-7">
                        <i class="bi bi-list toggle-sidebar-btn"></i>
                        <form action="../php/process.php" id="searchForm" class="d-flex" style="width: 100%;"
                            method="post">
                            <label class="btb btn-info" style=" width: 15%;" onclick="Ocultar()" data-bs-target="true"
                                id="boton">
                                <img src="../img/menu.png" alt="menu" width="60%">
                            </label>
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                id="Buscar" name="buscar" value="<?php echo $value ?>">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md">
                            <label><img src="../img/FondoPreliminar.jpg" alt="Perfil" width="70%"
                                    style="border-radius: 10%; float: right;"></label>
                        </div>
                        <div class="col-md">
                            <a class="btn btn-info" href="../php/cerrarSesion.php">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>


    </header>
    <main>
        <br><br><br>
        <div class="row">
            <div class="col-lg-3" id="1">
                <aside id="sidebar" class="sidebar">
                    <ul class="sidebar-nav" id="sidebar-nav">

                        <li class="nav-item">
                            <a class="nav-link " href="index.html">
                                <i class="bi bi-grid"></i>
                                <span>Dashboard</span>
                            </a>
                        </li><!-- End Dashboard Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-menu-button-wide"></i><span>Components</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="components-alerts.html">
                                        <i class="bi bi-circle"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordion.html">
                                        <i class="bi bi-circle"></i><span>Accordion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-badges.html">
                                        <i class="bi bi-circle"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-breadcrumbs.html">
                                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-buttons.html">
                                        <i class="bi bi-circle"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-cards.html">
                                        <i class="bi bi-circle"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="bi bi-circle"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-list-group.html">
                                        <i class="bi bi-circle"></i><span>List group</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modal.html">
                                        <i class="bi bi-circle"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="bi bi-circle"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="bi bi-circle"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress.html">
                                        <i class="bi bi-circle"></i><span>Progress</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-spinners.html">
                                        <i class="bi bi-circle"></i><span>Spinners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips.html">
                                        <i class="bi bi-circle"></i><span>Tooltips</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Components Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-journal-text"></i><span>Forms</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="forms-elements.html">
                                        <i class="bi bi-circle"></i><span>Form Elements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-editors.html">
                                        <i class="bi bi-circle"></i><span>Form Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="bi bi-circle"></i><span>Form Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Forms Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="tables-general.html">
                                        <i class="bi bi-circle"></i><span>General Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-data.html">
                                        <i class="bi bi-circle"></i><span>Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Tables Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-bar-chart"></i><span>Charts</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="bi bi-circle"></i><span>Chart.js</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-apexcharts.html">
                                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-echarts.html">
                                        <i class="bi bi-circle"></i><span>ECharts</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Charts Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="icons-bootstrap.html">
                                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icons-remix.html">
                                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icons-boxicons.html">
                                        <i class="bi bi-circle"></i><span>Boxicons</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Icons Nav -->

                        <li class="nav-heading">Pages</li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Profile</span>
                            </a>
                        </li><!-- End Profile Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>F.A.Q</span>
                            </a>
                        </li><!-- End F.A.Q Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-contact.html">
                                <i class="bi bi-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li><!-- End Contact Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-register.html">
                                <i class="bi bi-card-list"></i>
                                <span>Register</span>
                            </a>
                        </li><!-- End Register Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-login.html">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <span>Login</span>
                            </a>
                        </li><!-- End Login Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-error-404.html">
                                <i class="bi bi-dash-circle"></i>
                                <span>Error 404</span>
                            </a>
                        </li><!-- End Error 404 Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-blank.html">
                                <i class="bi bi-file-earmark"></i>
                                <span>Blank</span>
                            </a>
                        </li><!-- End Blank Page Nav -->

                    </ul>

                </aside><!-- End Sidebar-->
            </div>
            <div class="col-lg-6" id="2">
                <div class="container" style="width: 90%;">
                    <?php

                    if ($_GET['a'] === "t") {

                        $query = "SELECT * FROM repositorio WHERE LOWER(Titulo) LIKE '%$value%'";
                    } else {

                        $query = "SELECT * FROM repositorio WHERE LOWER(Autor) LIKE '%$value%'";
                    }


                    $respuesta = mysqli_query($conexion, $query);


                    if ($respuesta && mysqli_num_rows($respuesta) > 0) {

                        $contero = 0;


                        while ($fila = mysqli_fetch_assoc($respuesta)) {

                            $background = ($contero % 2 == 0) ? '#BEF4F8' : 'lightgray';
                            ?>
                            <div class="row d-flex justify-content-center align-items-center"
                                style="padding: 10px; background: <?php echo $background; ?>; border-radius: 15px; border: solid 1px #000;">
                                <div class="col-md-4">
                                    <b>
                                        <a href="../php/visitas.php?id=<?php echo $fila['id'] ?>" target="_blank"
                                            style="color: #000;">
                                            <?php echo ucwords(strtolower($fila['Titulo'])); ?>
                                        </a>
                                    </b>
                                </div>
                                <div class="col-md-6">
                                    <i> <?php echo $fila['Descripcion']; ?></i>
                                </div>
                                <div class="col-md-2">
                                    <?php echo $fila['Autor']; ?>
                                </div>
                            </div>
                            <br>
                            <?php

                            $contero++;
                        }
                    } else {

                        echo "No se encontraron resultados.";
                    }
                    ?>
                </div>

            </div>

            <div class="col-lg-3" id="3" style=" background: #F3E8F7  ;">
                <div class="container" id="contenedor" style="width: 90%;">
                    <br>
                    <center>
                        <h2>Los 5 Articulos Más Visitados</h2>
                    </center>
                    <br>
                    <?php $sql = "SELECT id, Autor,  Titulo, Visitas FROM repositorio ORDER BY Visitas DESC";
                    $result = mysqli_query($conexion, $sql);

                    if ($result->num_rows > 0) { ?>
                        <div class="row d-flex justify-content-center align-items-center"
                            style="background: #F2DDF9 ; border-radius: 8px; padding: 5px;">
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
                                <div class="row d-flex justify-content-center align-items-center"
                                    style="background: #C2F9FD;  border: solid 1px #FCD0CB ; border-radius: 8px; padding: 5px;">
                                    <div class="col-md-10">
                                        <a href="../php/visitas.php?id=<?php echo $row['id'] ?>" target="_blank"
                                            style="text-decoration: none; color: #000;">
                                            <b><?php echo $row['Titulo'] ?></b> </a>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: large;"><?php echo $row['Visitas'] ?></p>
                                    </div>

                                </div><br>
                            <?php } else {
                                $cont = 0; ?>
                                <div class="row d-flex justify-content-center align-items-center"
                                    style="background: lightgray; border: solid 1px #0E6CEC ; border-radius: 8px; padding: 5px;">
                                    <div class="col-md-10">
                                        <a href="../php/visitas.php?id=<?php echo $row['id'] ?>"
                                            style="text-decoration: none; color: #000;" target="_blank">
                                            <b><?php echo $row['Titulo'] ?></b> </a>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: large;"><?php echo $row['Visitas'] ?></p>
                                    </div>

                                </div><br>
                            <?php }
                            $limite++;
                            if ($limite >= 5) {
                                break;
                            }
                        }
                    } else {
                        echo "No se encontraron resultados.";
                    }
                    $conexion->close();
                    ?>
                </div>
            </div>

        </div>
    </main>
    <footer></footer>








    </div>
    <!-- 
Cierra la sesion -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../Control/script.js"></script>
</body>

</html>