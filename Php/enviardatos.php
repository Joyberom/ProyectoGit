<?php
require 'Conexion.php';

$Estacion = htmlspecialchars($_POST ['Estacion'],ENT_QUOTES,'utf-8');  
$_Estacion = addslashes($Estacion);

$chipid = htmlspecialchars($_POST ['chipid'],ENT_QUOTES,'utf-8');  
$_chipid = strip_tags($chipid);

$temperatura = htmlspecialchars($_POST ['temperatura'],ENT_QUOTES,'utf-8');  
$_temperatura = addslashes($temperatura);

$Humedad = htmlspecialchars($_POST ['Humedad'],ENT_QUOTES,'utf-8');  
$_Humedad = strip_tags($Humedad);

$sql = "INSERT INTO lectura (Id,Estacion,chipId,Fecha,Temperatura,Humedad)VALUES (NULL,'$_Estacion', '$_chipid', CURRENT_TIMESTAMP, '$_temperatura','$_Humedad')";
mysqli_query($conexion, $sql);
mysqli_close($conexion);
echo "Datos ingresados: Temperatura " .$temperatura. " Humedad: " .$Humedad;
?>


