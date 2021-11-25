<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos="formulario";



$enlace = mysqli_connext($servidor,$usuario,$clave,$basededatos);

if(!$enlace){
    echo"Error con el servidor";
}
$conexion = mysqli_connect('localhost', "root" ,"");
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];

if($_file)
