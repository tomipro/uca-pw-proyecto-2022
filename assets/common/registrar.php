<?php

include('config.php');

$contenido = <<<html
    <form method="post" action="registrar.php" class="registro-formulario" name="registro" onsubmit="return verificacionRegistro()">
        <h2 class="titulo-login">¡Registrate!</h2>
            <div class="campo-ingreso">
                <img src="../imgs/icons/user.svg" alt="" class="iconos" style="padding: 1rem;">
                <input type="text" placeholder="Usuario" id="usuario" name="User_Alias">
            </div>
            <div class="campo-ingreso">
                <img src="../imgs/icons/envelope.svg" alt="" class="iconos" style="padding: 1rem;">
                <input type="email" placeholder="E-mail" id="email" name="User_Email">
            </div>
            <div class="campo-ingreso">
                <img src="../imgs/icons/lock.svg" alt="" class="iconos" style="padding: 1rem;">
                <input type="password" placeholder="Contraseña" id="contrasena" name="User_Password">
            </div>
        <input type="submit" name="registrar" class="btn" value="Registrarse">
    </form>

    <div class="panel panel-der">
        <div class="contenido">
            <h3>¿Yá tenés tu cuenta?</h3>
            <p>Ingresa tus datos y segui coleccionando tus NFTs.</p>
            <button class="btn transparente" id="login-btn">Iniciá Sesión</button>
        </div>
        <img src="../imgs/components/astronaut.svg" class="imagen-login" alt="">
    </div>

html;

echo $contenido;

?>