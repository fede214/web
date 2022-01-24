<?php

session_start();
// coneccion local
$servidor="localhost";
$usuario="fede";
$contraseña="fede22";
$bd="test2";
// coneccion web
// $servidor="localhost";
// $usuario="c0690318";
// $contraseña="MEsa97move";
// $bd="c0690318_unvime";
$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);

# comprabasion de conexion descomentar if
// if ($conexion) {
//     echo "conexion exitosa";
// }
// else{
//     echo"conexion fallida";
// }
