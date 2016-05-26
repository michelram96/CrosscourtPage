<?php
$dbhost="localhost";
$dbusuario="root";
$dbpassword="";
$db="crosscourt";
$conexion_db=mysqli_connect($dbhost,$dbusuario,$dbpassword);
mysqli_select_db($conexion_db,$db);
?>