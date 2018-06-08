<?php

require('../config.php');

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$fechaInicio =$_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
echo "-----------------------------------------------";
echo $fechaInicio;
echo $fechaFin;

if (isset($nombre) && isset($categoria) && isset($descripcion)) {
 $connection = new mysqli($database_host, $database_user, $database_password, $database_name);
 
 if ($connection->connect_error) {
   die("Connection failure: " . $connection->connection_error);
 }

 $statement = "insert into Convocatorias (nombre, categoria, descripcion, fechaInicio, fechaFin) values ('$nombre', '$categoria' ,'$descripcion', '$fechaInicio', '$fechaFin')";

 if ($connection->query($statement) === TRUE) {
   echo "Registro creado.";
 } else {
   echo "Error al crear el registro: $connection->error";
 }

 mysqli_close($connection);
}
?>