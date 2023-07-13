<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $alias = $_POST['User_Alias'];
    $password = $_POST['User_Password'];

    $sql = "SELECT User_Alias, User_Password, User_Level FROM Usuarios WHERE User_Alias ='$alias' AND User_Password='$password'";
    $result = $link->query($sql);


    // Verificamos que exista una fila que cumpla con esas condiciones (1 si 0 no)
    if ($result->num_rows == 1) {
        echo "Conexión establecida";
        $datos = mysqli_fetch_assoc($result);

        $_SESSION['signed_in'] = 1;

        //guardamos el alias y el nivel de usuario
        $_SESSION['User_Alias'] = $datos['User_Alias'];
        $_SESSION['User_Level'] = $datos['User_Level'];
        header('Location: usermain.php');
        die();
    }
    else{
        echo 'Usuario o constraseña incorrecta!';
    }
}

$contenido = <<<LOGIN
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="icon" type="image/x-icon" href="/assets/imgs/misc/favicon.ico">
        <title>Login</title>
    </head>

    <body>
        <div id="login-container">
            <div class="container-formulario">
                <div class="login-registro">
                    <form method="post" action="login.php" class="login-formulario" onsubmit="return verificacionIniciar()">
                        <h2 class="titulo-login">¡Inicia Sesión!</h2>
                        <div class="campo-ingreso">
                            <img src="../imgs/icons/user.svg" alt="" class="iconos" style="padding: 1rem;">
                            <input type="text" placeholder="Usuario" class="userreg" name="User_Alias">
                        </div>
                        <div class="campo-ingreso">
                            <img src="../imgs/icons/lock.svg" alt="" class="iconos" style="padding: 1rem;">
                            <input type="password" placeholder="Contraseña" class="userregpass" name="User_Password">
                        </div>
                        <input type="submit" name="login" class="btn solid" value="Iniciar sesion" >
                        <a href="../common/usermain.html">Prueba</a>
                    </form>
                </div>
            </div>
            <div class="container-paneles">
                <div class="panel panel-izq">
                    <div class="contenido">
                        <h3>¿Sos nuevo?</h3>
                        <p>En pocos pasos sumate al mejor marketplace de NFTs y arte digital que vas a conocer.</p>
                        <button class="btn transparente" id="registro-btn">Registrate</button>
                    </div>
                    <img src="../imgs/components/art-gallery.svg" class="imagen-login" alt="">
                </div>
            </div>
        </div>
        <script src="../scripts/login.js"></script>
    </body>

    </html>

LOGIN;

echo $contenido;

?>