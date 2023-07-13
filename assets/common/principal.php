<?php
include('login.php');
include('config.php');
include('index.php');


function main(){
    if(!isset($_SESSION['signed_in']) or $_SESSION['signed_in'] == 0){
        echo $contenido;
    }
}


?>