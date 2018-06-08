<?php
	require('../config.php');
	session_start();
	$connection = new mysqli($database_host, $database_user, $database_password, $database_name);
	
	if ($connection->connect_error) {
	   die("Connection failure: " . $connection->connection_error);
	}
	
	//print_r($_SESSION['user_id']);
	  
    //generamos la consulta
	$sql = "SELECT * FROM convocatoria_registro WHERE id_usuario=".$_SESSION['user_id'];
 	$jsonSql = mysqli_query($connection, $sql);
 	//$filas = mysqli_num_rows($jsonSql);
 	$convertToJson= array();
 	
 	while ($data = mysqli_fetch_array($jsonSql, MYSQLI_ASSOC)) {
	 	$convertToJson[] = $data;
 	}
 	print json_encode($convertToJson);	
	
	
	//mysqli_close($connection);

?>