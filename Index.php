<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESEARCH PLATFORM</title>
    <link rel="icon" href="img/Logo.jpeg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>


<body>
    <div class="content">
        <div class="container " style=" padding: 5%; width: 85%; margin: auto; ">
            <div class="row " style="max-width: 100%; padding:0%; max-height: 100%;">
                <div class="col-md-5 d-flex justify-content-center align-items-center" style="padding:0; background: #000000; ">
                    <img src="img/FondoPrueba.jpg" alt="" style="width: 100%; max-height: 150%">
                    <div class="cont">
                        <!-- <img src="" alt="LOGO" width="60%" style="border-radius: 50%;"> -->
                    </div>
                </div>
                <div class="col-md-7" style="background: #FFFFFF; padding:0;">
                    <header class="d-flex justify-content-center align-items-center">
                        <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                                <a class="navbar-brand"  href="#"  data-bs-toggle="collapse" data-bs-target="#collapse_Inicio " aria-expanded="false" aria-controls="collapse_Inicio">Inicio</a>
                                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav" style="padding: 8px; ">
                                    <ul class="navbar-nav" >
                                        <li style=" padding: 7px;border-radius: 7px;" class="nav-item" data-bs-toggle="collapse" data-bs-target="#collapse_Acerca_de">
                                            <a style="color: #000000;" class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_Acerca_de " aria-expanded="false" aria-controls="collapse_Acerca_de">Acerca de </a>
                                        </li> &ensp;
                                        <li style=" padding: 7px; border-radius: 7px;" class="nav-item" data-bs-toggle="collapse" data-bs-target="#collapse_Contacto">
                                            <a style=" color: #000000;" class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapse_Contacto">Contacto</a>
                                        </li> &ensp;
                                        <li style=" padding: 7px; border-radius: 7px;" class="nav-item" data-bs-toggle="collapse" data-bs-target="#collapse_Estadistica">
                                            <a style="color:#000000" class="nav-link disabled " href="#" data-bs-toggle="collapse" data-bs-target="#collapse_Estadistica">Estadisticas</a>
                                        </li> &ensp;
                                        <button style=" padding: 7px; background:#511367; color:#FFFFFF; " type="button" class="btn btn" data-bs-toggle="collapse" data-bs-target="#collapse_InicioSesion">Inicio sesión</button>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <main>
                        <div class="accordion" id="accordionExample">
                            <div class="container mt-4 justify-content-center">
                                <div id="collapse_InicioSesion" class="collapse" data-bs-parent="#accordionExample" >
                                    <div class=" container" style="width: 80%;" >
                                        <form action="php/Iniciar_Sesion.php" method="post" >
                                            <div class="mb-4 mt-4" >
                                                <label for="email" class="form-label">Email:</label>
                                                <input name="EnviarEmail" required type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pwd" class="form-label">Password:</label>
                                                <input name="EnviarPaswoord" required id="PasswordSend" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">

                                            </div>
                                            <div class="form-check mb-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input"  type="checkbox" onclick=" visibility() " name="remember"> Ver Contraseña

                                                </label>
                                            </div>
                                            <button style="background:#511367; color:#FFFFFF;" type="submit" class="btn btn-success">Iniciar Sesion</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div id="collapse_Inicio" class="collapse" data-bs-parent="#accordionExample">
                                    prueba mamas huevo 
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div id="collapse_Contacto" class="collapse" data-bs-parent="#accordionExample">
                                    prueba mamas huevo Contacto
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div id="collapse_Acerca_de" class="collapse" data-bs-parent="#accordionExample">
                                    prueba mamas huevo Acerca de
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/VistaContraseña.js"></script>
</body>

</html>