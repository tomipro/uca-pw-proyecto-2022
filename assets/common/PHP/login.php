<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['User_Email'];
    $password = $_POST['User_Password'];

    $sql = "SELECT * FROM Usuarios WHERE User_Email ='$email' AND User_Password='$password'";
    $result = $link->query($sql);

    if ($result->num_rows == 1) {
        echo "Conexión establecida";
        header('Location: usermain.php');
    }
}


?>