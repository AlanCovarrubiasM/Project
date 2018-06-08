<?php
	require("../config.php");

	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
 
 if ($connection->connect_error) {
   die("Connection failure: " . $connection->connection_error);
 }
	
	$id_conv = 6;
	$nombre = $_POST['nombre'];
	$categoria = $_POST['categoria'];
	$descripcion = $_POST['descripcion'];

   	$editar = "UPDATE Convocatorias SET nombre='$nombre',categoria='$categoria',descripcion='$descripcion') WHERE Id=".$id_conv;
   	
   	if($connection->query($editar) === TRUE){
	   	echo "Se a modificado";
   	} else {
	   	echo "Error";
   	}
   
  $connection->close();
?>