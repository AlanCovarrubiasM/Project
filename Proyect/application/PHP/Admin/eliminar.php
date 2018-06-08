<?php
	
   require('../config.php');

	$Id = $_POST['number'];
	$tabla = $_POST['tabla'];

	echo "varible: ".$Id;


	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
	if ($connection->connect_error) {
   		die("Connection failure: " . $connection->connection_error);
   		echo 'error';
   	}

   	$delate = "DELETE FROM $tabla WHERE Id=$Id";

   	if($connection->query($delate) === TRUE){
   		echo "Registro borrado";
   	}

   	else{
   		echo "Registro no borrado" . $connection->error;
   	}
      echo 'done';
   	mysqli_close($connection);
?>	