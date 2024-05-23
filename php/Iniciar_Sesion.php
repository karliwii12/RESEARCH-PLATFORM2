<?php 

session_start();

include("conexion.php");
$paginaStar = "../Pag/Star.php";
$volver ="../Index.php";
$email = $_POST ["EnviarEmail"];
$contraseña = $_POST ["EnviarPaswoord"];

 $verificar = "SELECT * FROM usuariologin WHERE Usuario='$email'";
 $encontrado = mysqli_query($conexion, $verificar);

 if($verificar && mysqli_num_rows($encontrado)> 0){
     $columna = mysqli_fetch_array($encontrado);
    $contraseñaGuardada = $columna['Contraseña'];
     if(password_verify($contraseña, $contraseñaGuardada)){
             $_SESSION ['Email'] = $email;
       header("Location: $paginaStar");
     }else{
        echo"
        <script>
        alert('Usuario o contraseña incorrecto');
        location.href = '$volver';
        </script>
        ";
     }
    
     exit();
}else{	
    echo"
    <script>
    alert('Usuario o contraseña incorrecto');
    location.href = '$volver';
    </script>
    ";
}

$conexion ->close();



