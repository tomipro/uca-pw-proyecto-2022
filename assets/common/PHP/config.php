<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'uca-pw-proyecto-DB';

$link = mysqli_connect($server,$username,$password,$db_name);

if(!$link){
    die('Conexión fallida: '. mysqli_connect_error());
}
echo 'Pudiste conectarte';
?>