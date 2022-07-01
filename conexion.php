<?php
$usuario=   'root';
$pass= '';
$server= 'LocalHost';
$db= 'socios';

$conexion= new mysqli($server,$usuario,$pass,$db);

if  ($conexion->    connect_errno){
    //ERROR
    die('Error de conexión con la Base de datos');
}
?>