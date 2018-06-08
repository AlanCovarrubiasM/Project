<?php
	require('config.php');
	session_start();
	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
	 
	if ($connection->connect_error) {
	   die("Connection failure: " . $connection->connection_error);
	}
	 
	$id_convocatoria = $_POST['id_convocatoria'];
	$id_usuario = $_POST['id_usuario'];
	
	$sql = "INSERT INTO convocatoria_registro (id_convocatoria, id_usuario) VALUES ('$id_convocatoria', '$id_usuario')";
	
	if ($connection->query($sql) === TRUE) {
	   echo "Se a registrado en una convocatoria.";
	} else {
	   echo "Error al crear el registro: $connection->error";
	}
	
	mysqli_close($connection);
?>