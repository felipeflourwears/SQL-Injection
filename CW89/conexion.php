<?php
$server = "localhost";
$user = "root";
$pass = "";
$db ="injection";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno)
{
    die("LA CONEXIÓN A FALLADO" . $conexion->connect_errno);

}

else{
    echo "CONEXIÓN EXITOSA";
}

?>