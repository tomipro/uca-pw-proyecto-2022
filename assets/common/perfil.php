<?php

$username = strtoupper($_SESSION['User_Alias']);
$nivel = "";

if($_SESSION['User_Level'] == 1){
    $nivel = "Administrador";
}
else{
    $nivel = "Usuario";
}


?>